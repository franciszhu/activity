<?php
class DetailModel extends Model{
	protected $_validate = array(
			array('user_num','require','用户必须'),
	);
	protected $_auto = array(
			array('act_num','time','1','function'),
	);
}