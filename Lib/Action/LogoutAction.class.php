<?php
class LogoutAction extends Action{
	function logout(){
		$_SESSION = array();
		$this->redirect('/../');
	}
}