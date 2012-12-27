<?php
class MyActivityAction extends Action{
	public function myActivity($page=0){
		$userNumber = $_SESSION['UserNumber'];
		//分页页码
		if($page == 0){
			$this->redirect('/MyActivity/myActivity/page/1');
		}
		$activityInfo = M('activity');
			
		//分页内容
		$activityInfoArray = $activityInfo->where('belong_to = '.$userNumber)->select();
		
		$activityCount = count($activityInfoArray);
		$activityMount = 8;
		$this->assign('pageCount', ceil($activityCount/$activityMount));
		
		
		
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMount * $page - $activityCount); 
		}
		
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
							->where('belong_to = '.$userNumber)
							->select();
		//echo count($activityInfoArray);
		//echo $activityInfoArray[2]['act_name'];
		//echo $activityCount/$activityMount;
		//for ($i=0; $i<count($activityInfoArray);$i++){
			$this->assign('activityInfoArray',$activityInfoArray);
		//}
		$this->assign('activityMount', $activityMount);
		
		$this->display('MyActivity');

	}
}