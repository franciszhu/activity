<?php
class NewActivityAction extends Action{
	public function launchActivity(){
		$this->display('../StartActivity/StartActivity');
	}
	public function newActivity(){
		$activity = M('activity'); //活动表
	
		$act_num = count($activity->select()) + 1 + 2000000000;
		$act_name = $_POST['info-name'];
		$time_start = $_POST['info-start-time'];
		$time_end = $_POST['info-end-time'];
		//$_SESSION['UserNumber'] = '1000000001';
		$intro = $_POST['info-introduce'];
		$cost = $_POST['info-cost'];
		$place = $_POST['info-place'];
		$photo = $_POST['info-name'];
	
		$activityInfo = array(
				'number' => $act_num,
				'act_name' => $act_name,
				'time_start' => $time_start,
				'time_end' => $time_end,
				'belong_to' => $_SESSION['UserNumber'],
				'intro' => $intro,
				'place' => $place,
				'cost' => $cost,
				'photo' => $photo);
		$activity->add($activityInfo);
		$this->success('添加成功','/activity/index.php/Detail/showDetail2/id/'.$act_num);
	
	}
}