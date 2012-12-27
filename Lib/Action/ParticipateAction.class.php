<?php
class ParticipateAction extends Action{
	public function addParticipate($actNumber=0){
		//$_SESSION['UserNumber'] = '1000000001';
		$userNumber = $_SESSION['UserNumber']; //take userNumber Form session
		$participate = M('participate'); // 参加者 和 活动 对应表

		$ifParticipate = $participate->where('act_num = '.$actNumber.' AND user_num = '.$userNumber)
									 ->select();
		if (count($ifParticipate) > 0) {
			$participate->where('act_num = '.$actNumber.' AND user_num = '.$userNumber)
						->delete();
			$this->success('已经取消参加');
		}else{
			$participateArray = array(
					'act_num' => $actNumber,
					'user_num' => $userNumber
			);
			$participate->add($participateArray);
			$this->success('参加成功');
		}
		
		
	}
}