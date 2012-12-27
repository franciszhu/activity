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

	public function show($page=0){
		
		if($page == 0){
			$this->redirect('/Search/show/page/1');
		}
		
		$activityInfo = M('activity');
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
								->table('activity,activity_attri')
								->where('activity_attri.number = activity.number AND activity_attri.show = 1')
								->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
										->table('activity,activity_attri')
										->where('activity_attri.number = activity.number AND activity_attri.show = 1')
										->select();
		$activityCount = count($activityInfoArray);	
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		$this->assign('activityInfoArray',$activityInfoArray);
		$this->assign('activityMount', $activityMount);		
		$this->display('../Display/Display');
	}
	
	public function sports($page=0){
		if($page == 0){
			$this->redirect('/Search/sports/page/1');
		}
		
		$activityInfo = M('activity');
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
				->table('activity,activity_attri')
				->where('activity_attri.number = activity.number and activity_attri.sports = 1')
				->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
		->table('activity,activity_attri')
		->where('activity_attri.number = activity.number and activity_attri.sports = 1')
		->select();
		$activityCount = count($activityInfoArray);
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		$this->assign('activityInfoArray',$activityInfoArray);
		$this->assign('activityMount', $activityMount);
		$this->display('../Display/Display');
	}

	public function lecture($page=0){
		if($page == 0){
			$this->redirect('/Search/lecture/page/1');
		}
		
		$activityInfo = M('activity');
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
				->table('activity,activity_attri')
				->where('activity_attri.number = activity.number and activity_attri.lecture = 1')
				->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
		->table('activity,activity_attri')
		->where('activity_attri.number = activity.number and activity_attri.lecture = 1')
		->select();
		$activityCount = count($activityInfoArray);
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		$this->assign('activityInfoArray',$activityInfoArray);
		$this->assign('activityMount', $activityMount);
		$this->display('../Display/Display');
	}

	public function travel($page=0){
		if($page == 0){
			$this->redirect('/Search/travel/page/1');
		}
		
		$activityInfo = M('activity');
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
				->table('activity,activity_attri')
				->where('activity_attri.number = activity.number and activity_attri.travel = 1')
				->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
		->table('activity,activity_attri')
		->where('activity_attri.number = activity.number and activity_attri.travel = 1')
		->select();
		$activityCount = count($activityInfoArray);
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		$this->assign('activityInfoArray',$activityInfoArray);
		$this->assign('activityMount', $activityMount);
		$this->display('../Display/Display');
	}

	public function party($page=0){

		if($page == 0){
			$this->redirect('/Search/party/page/1');
		}
		
		$activityInfo = M('activity');
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
				->table('activity,activity_attri')
				->where('activity_attri.number = activity.number and activity_attri.party = 1')
				->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
		->table('activity,activity_attri')
		->where('activity_attri.number = activity.number and activity_attri.party = 1')
		->select();
		$activityCount = count($activityInfoArray);
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		$this->assign('activityInfoArray',$activityInfoArray);
		$this->assign('activityMount', $activityMount);
		$this->display('../Display/Display');
	}

	public function welfare($page=0){
		if($page == 0){
			$this->redirect('/Search/welfare/page/1');
		}
		
		$activityInfo = M('activity');
		//分页内容
		//$activityCount = count($activityInfo->select());
		$activityMountPerPage = 3;
		$activityMount = $activityMountPerPage;
		$activityCountTotal = count($activityInfo
				->table('activity,activity_attri')
				->where('activity_attri.number = activity.number and activity_attri.welfare = 1')
				->select());
		$activityCount = $activityCountTotal;
		$this->assign('page',$page);
		
		$activityOffset = $activityCount - $activityMount * $page;
		if ($activityOffset < 0) {
			$activityOffset = 0;
			$activityMount = $activityMount - ($activityMountPerPage * $page - $activityCount);
		}
		$activityInfoArray = $activityInfo->limit($activityOffset,$activityMount)
		->table('activity,activity_attri')
		->where('activity_attri.number = activity.number and activity_attri.welfare = 1')
		->select();
		$activityCount = count($activityInfoArray);
		$this->assign('pageCount', ceil($activityCountTotal/$activityMountPerPage));
		$this->assign('activityInfoArray',$activityInfoArray);
		$this->assign('activityMount', $activityMount);
		$this->display('../Display/Display');
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