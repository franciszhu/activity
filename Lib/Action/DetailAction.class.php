<?php
class DetailAction extends Action{
	public function showDetail(){
		$Data = M('Activity');
		$this->data = $Data->select();
		$this->display();
	}
	
	public function showAttention(){
		$Attention = M('Attention');
		$this->myattention = $Attention->where('act_num=2000000001')->select();
		
		$attentionCount = $Attention->where('act_num=2000000001')->count();
		$this->attentionCount = $attentionCount;
		
		$this->display();
	}
	
	public function showDetail2($id){
		$Form = M('Activity');
		$data = $Form->find($id);
		
		if($data){
			$this->data = $data;

			$Attention = M('Attention');
			$attentionCount = $Attention->where('act_num = '.$id)->count();
// 			echo 'act_num = '.$id;
			$this->attentionCount = $attentionCount;
			
			$Participate = M('Participate');
			$participateCount = $Participate->where('act_num = '.$id)->count();
			$this->participateCount = $participateCount;
			
			$Origin = M('User_info');
			$belongName = $Origin->find($data['belong_to']);
// 			echo $data['belong_to'];
			$this->belongName = $belongName;
			
			$startYear=substr($data["time_start"],0,4);
			$this-> startYear = $startYear;
			$startMonth=substr($data["time_start"],4,2);
			$this-> startMonth = $startMonth;
			$startDay=substr($data["time_start"],6,2);
			$this-> startDay= $startDay;
			$startHour=substr($data["time_start"],8,2);
			$this-> startHour= $startHour;
			$startMinute=substr($data["time_start"],10,2);
			$this-> startMinute= $startMinute;
			
			$endYear=substr($data["time_end"],0,4);
			$this-> endYear = $endYear;
			$endMonth=substr($data["time_end"],4,2);
			$this-> endMonth = $endMonth;
			$endDay=substr($data["time_end"],6,2);
			$this-> endDay= $endDay;
			$endHour=substr($data["time_end"],8,2);
			$this-> endHour= $endHour;
			$endMinute=substr($data["time_end"],10,2);
			$this-> endMinute= $endMinute;
			
			$Participate = M('Participate');
			$participateArray = $Participate->field('user_num')->where('act_num = '.$id)->select();
			//echo $participateArray[0]['user_num'];
			
			// 			echo 'act_num = '.$id;
			
			$ParticipateUser = M('User_info');
			
			for ($i=0; $i<count($participateArray); $i++) {
				$userNameArray[$i] = $ParticipateUser->field('name')->find($participateArray[$i]['user_num']);	
				if ($i >= 5) {
					break;
				}
				//echo $participateArray[$i]['user_num'];
				//echo $userName[$i]['name'];
			}
			for ($i=0; $i<count($userNameArray); $i++){
				$userName['user'.$i] = $userNameArray[$i]['name'];
				//echo $userName['user1'];
			}	
			
			// 			echo $data['belong_to'];
			$this->belongName = $belongName;
			
			$this->attentionCount = $attentionCount;
		}
		else{
			$this->error('数据错误');
		}
		
		$this->assign('userName',$userName);
		
		$this->display('../Detail/ActivityInfo');
	//$this->display();
		
		
		
	}
	
	public function insertAttention(){
		$Form = D('Attention');
		if($Form->create()){
			$result = $Form->add();
			if($result){
				$this->success('操作成功！');
			}
			else{
				$this->error('写入错误！');
			}
		}
		else{
			$this->error($Form->getError());
		}
	}
}