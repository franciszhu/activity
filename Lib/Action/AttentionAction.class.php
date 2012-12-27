<?php
class AttentionAction extends Action{
	public function addAttention($actNumber=0){
		//$_SESSION['UserNumber'] = '1000000001';
		$userNumber = $_SESSION['UserNumber']; //take userNumber Form session
		$attention = M('attention'); // 参加者 和 活动 对应表

		$ifAttention = $attention->where('act_num = '.$actNumber.' AND user_num = '.$userNumber)
									 ->select();
		if (count($ifAttention) > 0) {
			$attention->where('act_num = '.$actNumber.' AND user_num = '.$userNumber)
						->delete();
			$this->success('已经取消关注');
		}else{
			$attentionArray = array(
					'act_num' => $actNumber,
					'user_num' => $userNumber
			);
			$attention->add($attentionArray);
			$this->success('关注成功');
		}
		
		
	}
}