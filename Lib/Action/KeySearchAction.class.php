<?php
class KeySearchAction extends Action{
	public function keySearch($page=0,$key_words=''){
		
		//$_GET['key_words'] = 't'; //test
	
// 		$i = 0;
// 		while ($i < count($actArray)) {
// 			//echo $i.'activityName:'.$actNum[$i]['act_num'].' ';
// 			$actName = $actArray[$i]['act_name'];
			
// 			echo $actName."</br>";
// 			$i++;
// 		}
		
//		$param[0] = $keyWords;
 		if($page == 0){
 			$keyWords = $_POST['$keyWords'];
 			$this->redirect('/KeySearch/keySearch/key_words/'.$key_words.'/page/1');
 		}
 		//echo strlen($key_words);
 		//$this->error('');
		$this->assign('key_words', $key_words);
		
		if (strlen($key_words) == 0){//if key words is empty
			//echo strlen($key_words);
			$this->error("请输入关键词。");
		}
		//echo $keyWords;	
		
		$activityInfo = M('activity');	
		
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
							->where('act_name LIKE "%'.$key_words.'%"'. // %key_words%
							' OR act_name LIKE "'.$key_words.'%"'. // key_words%
							' OR act_name LIKE "%'.$key_words.'"'. // %key_words
							' OR act_name LIKE "'.$key_words.'"') // key_wordsselect();
							->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
							->where('act_name LIKE "%'.$key_words.'%"'. // %key_words%
							' OR act_name LIKE "'.$key_words.'%"'. // key_words%
							' OR act_name LIKE "%'.$key_words.'"'. // %key_words
							' OR act_name LIKE "'.$key_words.'"') // key_wordsselect();
							->select();
		$activityCount = count($activityInfoArray);
		//echo $activityCount;
		//$this->error('s');
		
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		
		//echo count($activityInfoArray);
		//$this->error('s');
		//echo count($activityInfoArray);
		//echo $activityInfoArray[2]['act_name'];
		//echo $activityCount/$activityMount;
		//for ($i=0; $i<count($activityInfoArray);$i++){
			$this->assign('activityInfoArray',$activityInfoArray);
		//}
		$this->assign('activityMount', $activityMount);
		
		
		
		// 		for ($i=$activityMount-1; $i>=0; $i--){
			
		// 			$startYear=substr($activityInfoArray[$i]["time_start"],0,4);
		// 			$startMonth=substr($activityInfoArray[$i]["time_start"],4,2);
		// 			$startDay=substr($activityInfoArray[$i]["time_start"],6,2);
		// 			$startHour=substr($activityInfoArray[$i]["time_start"],8,2);
		// 			$startMinute=substr($activityInfoArray[$i]["time_start"],10,2);
		// 			$startTime = $startYear.'年'.$startMonth.'月'.$startDay.'日'.$startHour.':'.$startMinute;
			
		// 			$endYear=substr($activityInfoArray[$i]["time_end"],0,4);
		// 			$endMonth=substr($activityInfoArray[$i]["time_end"],4,2);
		// 			$endDay=substr($activityInfoArray[$i]["time_end"],6,2);
		// 			$endHour=substr($activityInfoArray[$i]["time_end"],8,2);
		// 			$endMinute=substr($activityInfoArray[$i]["time_end"],10,2);
		// 			$endTime = $endYear.'年'.$endMonth.'月'.$endDay.'日'.$endHour.':'.$endMinute;
			
		// 			$activityTime = $startTime.' 至 '.$endTime;
			
		// 			//发起人
		// 			$Origin = M('User_info');
		// 			$belongName = $Origin->find($activityInfoArray[$i]['belong_to']);
		// 			// 			echo $data['belong_to'];
		// 			$this->belongName = $belongName['name'];
			
		// 			//关注人数
		// 			$Attention = M('Attention');
		// 			$attentionCount = $Attention->where('act_num = '.$activityInfoArray[$i]['number'])->count();
		// 			// 			echo 'act_num = '.$id;
		// 			$this->attentionCount = $attentionCount;
		// 			//参加人数
		// 			$Participate = M('Participate');
		// 			$participateCount = $Participate->where('act_num = '.$activityInfoArray[$i]['number'])->count();
		// 			$this->participateCount = $participateCount;
			
		// 			echo '<div class="activity-info-simple">
		//                 	<div class="activity-info-simple-photo">
		//                     	<img alt="活动缩略图片" src="'.$activityInfoArray[$i]['photo'].'">
		//                     </div>
		//                     <div class="activity-info-simple-content">
		//                     	<div class="activity-info-simple-title">
		//                         <h2>'.$activityInfoArray[$i]['act_name'].'</h2>
		//                         </div>
		//                         <div class="activity-info-simple-time">
		//                         <p>'.$activityTime.'</p>
		//                         </div>
		//                         <div class="activity-info-simple-place">
		//                         <p>'.$activityInfoArray[$i]['place'].'</p>
		//                         </div>
		//                         <div class="activity-info-simple-belong">
		//                         <a href="/">'.$belongName.'</a>
		//                         </div>
		//                         <div class="activity-info-simple-attention">
		//                         <p><span>'.$attentionCount.'人关注</span>
		//                         <span>'.$participateCount.'人参加</span></p>
		//                         </div>
		//                     </div>
		//                 </div>';
		// 		}
		
 		$this->display('../Search/Search');
		
// 				if ($pageCount == 1) {
// 					;
// 				}else{
// 					if ($page != 1) {
// 						echo '<span><a href="'.($page-1).'">上一页</a></span>&nbsp;&nbsp;';
// 					}
// 					for ($i=1; $i <= $pageCount; $i++){
// 						if ($i == $page) {
// 							echo '<span>'.($i).'</span>&nbsp;&nbsp;';
// 						}else {
// 						echo '<span><a href="'.$i.'">'.($i).'</a></span>&nbsp;&nbsp;';
// 						}
// 					}
// 					if ($page == $pageCount) {
// 						//do nothing
// 					}else{
// 						echo '<a href="'.($page+1).'">下一页</a></span>';
// 					}
// 				}
 		}
	}