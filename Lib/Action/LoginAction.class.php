<?php
class LoginAction extends Action{
	public function process(){
		$this->email = "tanjinggui@gmail.com";
		$this->display("Login");
	}
	
	public function login(){
		
		$userId = $_POST['userId'];
		$password = $_POST['psd'];
		if (strlen($userId) == 0 || strlen($password) == 0) {
			$this->error('请输入用户名和密码。');
			//$this->display();
		}
		$userInfo = M('user_info');
		$userResult = $userInfo->where('id = '."'".$userId."'")->select();
		if (count($userResult) == 0) {
			$this->error('没有该用户或者密码错误！');
		}
		if ($userResult[0]['id'] == $userId && $userResult[0]['passwd'] == $password)
		{
			$_SESSION['UserNumber'] = $userResult[0]['number'];
			$this->success('登陆成功','../Mainpage/listNewActivity'); //要改URL到主页
		}
		else {
			$this->error('没有该用户或者密码错误！');
		}
		
	}
	
	
	public function addUser(){
		$userInfo = M('activity',null); 
// 		$userID = $_POST[userID];
// 		$password = $_POST[password];
		
// 		$userArray = array(
// 			'number' => '2000000001',
// 			'act_name' => 'wanwan',
// 			'time_start' => 'xxx',
// 			'time_end' => 'xxxx',
// 			'belong_to' => '111111111',
// 			'intro' => 'zxxao',
// 			'place' => 'xplace',
// 			'photo'=>'sss',
// 			'cost' => '2000'
// 		);
// 		$userInfo->save($userArray);
		//$userInfo->delete('2000000001');
		$this->result = $userInfo->where("photo='sss'")->select();
		echo $this->result[0]["act_name"];
		echo "中文";
		$this->display();
	}
	
	
	//查看我参与的活动
	public function myPartActivity(){//我参与的活动
		$_SESSION['UserNumber'] = '1000000001';
		$userNumber = $_SESSION['UserNumber']; //take userNumber Form session
		$activity = M('activity',null); //活动表
		$participate = M('participate',null); // 参加者 和 活动 对应表
		
		$activityPaticipate = $participate->where('user_num = '.$userNumber)->field('act_num')->select();
		
		//echo $activityPaticipate[0]['act_num'];
		
		$i = 0;
		//echo count($activityPaticipate);
		while ($i < count($activityPaticipate)) {
			$actPatInfo = $activity->find($activityPaticipate[$i]['act_num']);
			echo 'activityName:'.$actPatInfo['act_name'].' ';
			echo 'TimeStart:'.$actPatInfo['time_start']."  ";
			$i++;
		}
		
	}
	
	//查看我发起的活动
	public function myActivity(){//我发起的活动
		$_SESSION['UserNumber'] = '1000000001';
		$userNumber = $_SESSION['UserNumber']; //take userNumber Form session
		$activity = M('activity',null); //活动表
		//$participate = M('participate',null); // 参加者 和 活动 对应表
		$actInfo = $activity->where('belong_to = '.$userNumber)->select();
		
		$i = 0;
		while ($i < count($actInfo)) {
			echo $i.'activityName:'.$actInfo[$i]['act_name'].' ';
			$i++;
		}
		
	}
	
	
	//喜欢某个活动
	public function myLikeActivity(){//我喜欢的活动
		$_SESSION['UserNumber'] = '1000000001';
		$userNumber = $_SESSION['UserNumber']; //take userNumber Form session
		$activity = M('activity',null); //活动表
		$activityAttention = M('attention',null); // 参加者 和 活动 对应表
	
		$actNumArray = $activityAttention->where('user_num = '.$userNumber)->field('act_num')->select();
	
		$i = 0;
		while ($i < count($actNumArray)) {
			//echo $i.'activityName:'.$actNum[$i]['act_num'].' ';
			$actNum = $actNumArray[$i]['act_num'];
			$actInfo = $activity->find($actNum);
			echo $actInfo['act_name'];
			$i++;
		}
	
	}
	
	//发起活动/增加活动
	public function launchActivity(){
		$activity = M('activity',null); //活动表
		
		$act_num = count($activity->select()) + 1 + 2000000000;
		$act_name = 'the seventh activity';
		$time_start = '199301020256';
		$time_end = '199402030789';
		$_SESSION['UserNumber'] = '1000000001';
		$intro = 'zhege huodong henhao!';
		$cost = '308';
		$place = '学校里面';
		$photo = '../photo/photo32.jpg';
		
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
		
	}
	
	//新用户注册
	public function register(){
		$userInfo = M('user_info',null);
		
		$userId = $_POST['userName'];
		if (strlen($userId) > 50) {//防止用户名过长
			$this->error('用户名太长，不支持50个字符以上的字符。');
		}
		if (strlen($_POST['password']) > 18 || strlen($_POST['password']) < 6) {//验证密码长度
			$this->error('密码应在6~18位之间。');
		}
		
		if (count($userInfo->where('id = '."'".$userId."'")->select) == 1) {
			$this->error('用户名已经存在。');
		}
		
		$userNumber = count($userInfo->select()) + 1 + 1000000000; //给userNumber赋值
		$userInfoArray = array(
				'number' => $userNumber,
				'id' => $_POST['userName'],
				'passwd' => $_POST['password'],
				'if_admin' => 0);
		$userInfo->add($userInfoArray);//往数据库里装信息
		$this->success('注册成功！','../Login/login');
	}
	
	
	//完善用户信息
	public function completeUserInfo(){
		$userInfo = M('user_info',null);
		
		$birthday = $_POST['birthday'];
		$school = $_POST['school'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$photo = $_POST['photo'];
		if ('' == $_POST['gender']) {
			$gender == '';
		}
		elseif ('male' == $_POST['gender']) {
			$gender = 'M';
		}
		elseif ('female' == $_POST['gender']) {
			$gender = 'F';
		}
		
		
		
		$userInfoArray = array(
				'birthday' => $birthday,
				'school' => $school,
				'name' => $name,
				'gender' => $gender,
				'phone_num' => $phone,
				'photo' => $photo);
		
		
		$_SESSION['UserNumber'] = '1000000003';
		$userNumber = $_SESSION['UserNumber'];
		
		$userInfo->where('number = '.$userNumber)->save($userInfoArray);//往数据库里装信息
	}
	
	
	//上传用户头像
	public function uploadAvatar(){
		import('@.ORG.Net.UploadFile');
		import('@.ORG.Net.Image');
		$uploadAvatar = new UploadFile();
		$uploadAvatar->maxSize = 4194304;//上传大小：4m
		$uploadAvatar->allowExts = array('jpg','gif','png','jpeg');//上传类型
		$uploadAvatar->allowTypes=array('image/png','image/jpg','image/jpeg','image/gif');//检测mime类型
		$uploadAvatar->savePath = './Public/Uploads/Avatars/'; //存储的地方
		$uploadAvatar->thumb = true; //生成缩略图
		$uploadAvatar->imageClassPath = '@.ORG.Net.Image';
		$uploadAvatar->thumbRemoveOrigin = false;// 不要删除原图
		//$uploadAvatar->thumbPrefix = 'thumb_'; //缩略图前缀
		$uploadAvatar->thumbMaxWidth = '280';//缩略图高
		$uploadAvatar->thumbMaxHeight = '280';//缩略图宽
		$uploadAvatar->thumbPath = './Public/Uploads/Avatars/';
		
		//$upload->saveRule = uniqid;
		if (empty($_FILES)) {
			echo 'empty';
		}
		//echo "174";
		if (!$uploadAvatar->upload()){
			//echo "175";
			$this->error($uploadAvatar->getErrorMsg());
			//echo "176";
		}else{
			$photoinfo = $uploadAvatar->getUploadFileInfo();//获取上传文件信息
		}
		
		$userInfo = M('user_info',null);
		$userInfoArray = array(
				'photo' => $photoinfo[0]['savepath'].$photoinfo[0]['savename']);
		echo $photoinfo[0]['savepath'].$photoinfo[0]['savename'];
		
		//缩略图加水印
		Image::water($photoinfo[0]['savepath'].'thumb_'.$photoinfo[0]['savename'], APP_PATH.'Tpl/Public/Image/logo.png');
 		
		$_SESSION['UserNumber'] = '1000000001';
 		$userNumber = $_SESSION['UserNumber'];
		
 		$userInfo->where('number = '.$userNumber)->save($userInfoArray);//往数据库里装信息
	
// 		import("@.ORG.Net.UploadFile");
// 		//导入上传类
// 		$upload = new UploadFile();
// 		//设置上传文件大小
// 		$upload->maxSize = 3292200;
// 		//设置上传文件类型
// 		$upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
// 		//设置附件上传目录
// 		$upload->savePath = './Public/Uploads/Avatars/';
// 		//设置需要生成缩略图，仅对图像文件有效
// 		$upload->thumb = true;
// 		// 设置引用图片类库包路径
// 		$upload->imageClassPath = '@.ORG.Net.Image';
// 		//设置需要生成缩略图的文件后缀
// 		$upload->thumbPrefix = 'm_,s_';  //生产2张缩略图
// 		//设置缩略图最大宽度
// 		$upload->thumbMaxWidth = '400,100';
// 		//设置缩略图最大高度
// 		$upload->thumbMaxHeight = '400,100';
// 		//设置上传文件规则
// 		$upload->saveRule = 'uniqid';
// 		//删除原图
// 		//upload->thumbRemoveOrigin = true;
// 		if (!$upload->upload()) {
// 			//捕获上传异常
// 			$this->error($upload->getErrorMsg());
// 		} else {
// 			//取得成功上传的文件信息
// 			$uploadList = $upload->getUploadFileInfo();
// 			import("@.ORG.Image");
// 			//给m_缩略图添加水印, Image::water('原文件名','水印图片地址')
// 			//echo $uploadList[0]['savepath'].$uploadList[0]['savename'];
// 			//echo APP_PATH.'Tpl/Public/Images/logo.png';
// 			Image::water($uploadList[0]['savepath'].$uploadList[0]['savename'], APP_PATH.'Tpl/Public/Images/logo.png');
// 		}
	
 		
	}
	
	
	//上传活动照片
	public function uploadActPhoto(){
		import('@.ORG.Net.UploadFile');
		import('@.ORG.Net.Image');
		$uploadAvatar = new UploadFile();
		$uploadAvatar->maxSize = 4194304;//上传大小：4m
		$uploadAvatar->allowExts = array('jpg','gif','png','jpeg');//上传类型
		$uploadAvatar->allowTypes=array('image/png','image/jpg','image/jpeg','image/gif');//检测mime类型
		$uploadAvatar->savePath = './Public/Uploads/ActPhotos/'; //存储的地方
		$uploadAvatar->thumb = true; //生成缩略图
		$uploadAvatar->imageClassPath = '@.ORG.Net.Image';
		$uploadAvatar->thumbRemoveOrigin = false;// 不要删除原图
		//$uploadAvatar->thumbPrefix = 'thumb_'; //缩略图前缀
		$uploadAvatar->thumbMaxWidth = '280';//缩略图高
		$uploadAvatar->thumbMaxHeight = '280';//缩略图宽
		$uploadAvatar->thumbPath = './Public/Uploads/ActPhotos/';
	
		//$upload->saveRule = uniqid;
		if (empty($_FILES)) {
			echo 'empty';
		}
		//echo "174";
		if (!$uploadAvatar->upload()){
			//echo "175";
			$this->error($uploadAvatar->getErrorMsg());
			//echo "176";
		}else{
			$photoinfo = $uploadAvatar->getUploadFileInfo();//获取上传文件信息
		}
	
		$userInfo = M('activity',null);
		$userInfoArray = array(
				'photo' => $photoinfo[0]['savepath'].$photoinfo[0]['savename']);
		echo $photoinfo[0]['savepath'].$photoinfo[0]['savename'];
	
		//缩略图加水印
		Image::water($photoinfo[0]['savepath'].'thumb_'.$photoinfo[0]['savename'], APP_PATH.'Tpl/Public/Image/logo.png');
			
		$_SESSION['ActNumber'] = '2000000001';
		$actNumber = $_SESSION['ActNumber'];
	
		$userInfo->where('number = '.$actNumber)->save($userInfoArray);//往数据库里装信息
	}
	
	//关键字搜索
	public function keyWordsSearch(){
		
		//$_GET['key_words'] = 't'; //test
		
		$keyWords = $_GET['key_words'];
		if (!count($keyWords)){//if key words is empty
			$this->error("请输入关键词。");
		}
		//echo $keyWords;
		$activity = M('activity',null);
		$actArray = $activity
					->where('act_name LIKE "%'.$keyWords.'%"'. // %key_words%
							' OR act_name LIKE "'.$keyWords.'%"'. // key_words%
							' OR act_name LIKE "%'.$keyWords.'"'. // %key_words
							' OR act_name LIKE "'.$keyWords.'"') // key_words 
					->field('act_name')->select();
	
		$i = 0;
		while ($i < count($actArray)) {
			//echo $i.'activityName:'.$actNum[$i]['act_num'].' ';
			$actName = $actArray[$i]['act_name'];
			
			echo $actName."</br>";
			$i++;
	}
}


	
}