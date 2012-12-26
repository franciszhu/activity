<?php
class SearchAction extends Action{
	
	public function online(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.online = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}
	
	public function offline(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.offline = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}
	
	public function local(){
		$User = M('activity',null);
		$list = $User->where('place = "tongji"')->select();
		$this->assign('list',$list);
		$this->display('search');
	}

	public function show(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.show = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}
	
	public function sports(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.sports = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}

	public function lecture(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.lecture = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}

	public function travel(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.travel = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}

	public function party(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.party = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}

	public function welfare(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.welfare = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}

	public function photos(){
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.photos = 1')->select();
		$this->assign('list',$list);
		$this->display('search');
	}
	
	public function notphotos(){ 
		$User = M('activity',null);
		$list = $User->table('activity,activity_attri')->where('activity_attri.number = activity.number and activity_attri.photos = 0')->select();
		$this->assign('list',$list);
		$this->display('search');	
	}
	
	public function today(){
		$date = date('Ymd');
		$condition['time_start'] = $date; 
		$User = M('activity',null);
		$list = $User->where($condition)->select();
		$this->assign('list',$list);
		$this->display('search');
	}
	
	public function tomorrow(){
		$year = date('Y');
		$month = date('m');
		$day = date ('d');
		$date = date('Ymd');
		if($month == 1|3|5|7|8|10)
		{
			if($day == 31)
			{
				$month = $month+1;
				$day = '01';
				$tomorrow = $year.$month.$day;
				$User = M('activity',null);
				$condition['time_start'] = $tomorrow;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
			else 
			{
				$User = M('activity',null);
				$condition['time_start'] = $date+1;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
		}
		else if($month == 4|6|9|11)
		{
			if($day == 30)
			{
				$month = $month+1;
				$day = '01';
				$tomorrow = $year.$month.$day;
				$User = M('activity',null);
				$condition['time_start'] = $tomorrow;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
			else 
			{
				$User = M('activity',null);
				$condition['time_start'] = $date+1;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
		}
		else if($month ==12)
		{
			if($day == 31)
			{
				$year = $year+1;
				$month = '01';
				$day = '01';
				$tomorrow = $year.$month.$day;
				$User = M('activity',null);
				$condition['time_start'] = $tomorrow;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
			else 
			{
				$User = M('activity',null);
				$condition['time_start'] = $date+1;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
		}
		else
		{
			if($day == 28)
			{
				$month = $month+1;
				$day = '01';
				$tomorrow = $year.$month.$day;
				$User = M('activity',null);
				$condition['time_start'] = $tomorrow;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
			else 
			{
				$User = M('activity',null);
				$condition['time_start'] = $date+1;
				$list = $User->where($condition)->select();
				$this->assign('list',$list);
				$this->display('search');
			}
		}
	}
		
	public function doing(){
		$User = M('activity',null);
		$date = date('Ymd');
		$condition['time_start'] = array('elt',$date);
		$condition['time_end'] = array('egt',$date);
		$list = $User->where($condition)->select();
		$this->assign('list',$list);
		$this->display('search');		
	}
		
	public function willdo(){
		$User = M('activity',null);
		$date = date('Ymd');
		$condition['time_start'] = array('gt',$date);
		$list = $User->where($condition)->select();
		$this->assign('list',$list);
		$this->display('search');		
	}
	
	public function done(){
	$User = M('activity',null);
		$date = date('Ymd');
		$condition['time_start'] = array('lt',$date);
		$list = $User->where($condition)->select();
		$this->assign('list',$list);
		$this->display('search');	
	}
}
?>