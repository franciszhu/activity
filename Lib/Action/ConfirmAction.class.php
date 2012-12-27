<?php
class ConfirmAction extends Action {
	public function confirm(){
		$this->display('../Confirm/Confirm');
	}
	
	function ifNumeric($data){
		$foobar = str_split($data);
		for($i = 0;$i < count($foobar);$i++){
			if($foobar[$i] > '9' || $foobar[$i] < '0')
			{
				return 1;
			}
		}
		return 0;
	}
	
	public function confirmInput(){
		$activityName = $_POST['info-name'];
		$activityPlace = $_POST['info-place'];
		$activityCost = $_POST['info-cost'];
// 		$activityIntro = $_POST['info-introduce'];
		$tail = '00';
		
		$startYear = $_POST['info-start-year'];
		$startMonth = $_POST['info-start-month'];
		$startDay = $_POST['info-start-day'];
		$startHour = $_POST['info-start-hour'];
		$startMinute = $_POST['info-start-minute'];
		
		$endYear = $_POST['info-end-year'];
		$endMonth = $_POST['info-end-month'];
		$endDay = $_POST['info-end-day'];
		$endHour = $_POST['info-end-hour'];
		$endMinute = $_POST['info-end-minute'];
		
		if(strlen($activityName) > 50 || strlen($activityName) < 1 ){
			$this->error('活动名称过长或过短，请正确输入活动名称');
		}
		
		if(strlen($startYear) > 4 || strlen($startYear) < 1 || $this->ifNumeric($startYear)){
			$this->error('请正确输入开始日期');
		}
		
		if(strlen($startMonth) > 2 || strlen($startMonth) < 1 || $this->ifNumeric($startMonth)){
			$this->error('请正确输入开始日期');
		}
		
		if(strlen($startDay) > 2 || strlen($startDay) < 1 || $this->ifNumeric($startDay)){
			$this->error('请正确输入开始日期');
		}
		
		if(strlen($startHour) > 2 || strlen($startHour) < 1 || $this->ifNumeric($startHour)){
			$this->error('请正确输入开始时间');
		}
		
		if(strlen($startMinute) > 2 || strlen($startMinute) < 1 || $this->ifNumeric($startMinute)){
			$this->error('请正确输入开始时间');
		}
		
		if(strlen($endYear) > 4 || strlen($endYear) < 1 || $this->ifNumeric($endYear)){
			// 			echo $startTime;
			$this->error('请正确输入结束日期');
		}
		
		if(strlen($endMonth) > 2 || strlen($endMonth) < 1 || $this->ifNumeric($endMonth)){
			$this->error('请正确输入结束日期');
		}
		
		if(strlen($endDay) > 2 || strlen($endDay) < 1 || $this->ifNumeric($endDay)){
			$this->error('请正确输入结束日期');
		}
		
		if(strlen($endHour) > 2 || strlen($endHour) < 1 || $this->ifNumeric($endHour)){
			$this->error('请正确输入结束时间');
		}
		
		if(strlen($endMinute) > 2 || strlen($endMinute) < 1 || $this->ifNumeric($endMinute)){
			$this->error('请正确输入结束时间');
		}
		
		if(strlen($activityPlace) > 100){
			$this->error('活动地点过长，请正确输入活动地点');
		}
		
		if(strlen($activityCost) > 100){
			$this->error('活动花费过长，请正确输入活动花费');
		}
		$startYear4 = str_pad($startYear, 4,"0",STR_PAD_LEFT);
		$startMonth2 = str_pad($startMonth, 2,"0",STR_PAD_LEFT);
		$startDay2 = str_pad($startDay, 2,"0",STR_PAD_LEFT);
		$startHour2 = str_pad($startHour, 2,"0",STR_PAD_LEFT);
		$startMinute2 = str_pad($startMinute, 2,"0",STR_PAD_LEFT);
		
		$endYear4 = str_pad($endYear4, 4,"0",STR_PAD_LEFT);
		$endMonth2 = str_pad($endMonth, 2,"0",STR_PAD_LEFT);
		$endDay2 = str_pad($endDay, 2,"0",STR_PAD_LEFT);
		$endHour2 = str_pad($endHour, 2,"0",STR_PAD_LEFT);
		$endMinute2 = str_pad($endMinute, 2,"0",STR_PAD_LEFT);
		
		$startTime = $startYear4 . $startMonth2 . $startDay2 . $startHour2 . $startMinute2 . $tail;
		$endTime = $endYear4 . $endMonth2 . $endDay2 . $endHour2 . $endMinute2 . $tail;
		
		
		
// 		$this->assign('startTime',$startTime);
// 		$this->assign('endTime',$endTime);
		
// 		echo $startTime;
// 		echo $endTime;
	}
}
