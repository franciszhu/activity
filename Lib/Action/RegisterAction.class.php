<?php
class RegisterAction extends Action{
	//新用户注册
	public function register(){
		$userInfo = M('user_info');
	
		$userId = $_POST['userId'];
		if (strlen($userId) > 50) {//防止用户名过长
			$this->error('用户名太长，不支持50个字符以上的字符。');
		}
		if (strlen($_POST['psd']) > 18 || strlen($_POST['psd']) < 6) {//验证密码长度
			$this->error('密码应在6~18位之间。');
		}
		if (count($userInfo->where('id = '."'".$userId."'")->select()) > 0) {
			$this->error('用户名已经存在。');
		}
	
		$userNumber = count($userInfo->select()) + 1 + 1000000000; //给userNumber赋值
		$userInfoArray = array(
				'number' => $userNumber,
				'id' => $_POST['userId'],
				'passwd' => $_POST['psd'],
				'if_admin' => 0);
		$userInfo->add($userInfoArray);//往数据库里装信息
		$this->success('注册成功！','/activity/index.php');
	}
	
	public function regist(){
		$this->display('../register/register');
	}
}