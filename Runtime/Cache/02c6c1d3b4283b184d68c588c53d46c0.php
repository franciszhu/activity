<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/activity/Tpl/StartActivity/StartActivity.css" type="text/css" rel="stylesheet"/>
<title>无标题文档</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="float_index.js"></script>
</head>
<body>
  <div class="top-bar">
  	<a href="/"><img alt="活动记" class="top-logo" src="http://cdn.chanyouji.cn/assets/top-logo-57dbfef8097d9d3bd900eef5bd23b123.png" /></a>
    <div class="login" id="top-bar-login"> <a href="/activity/index.php/Logout/logout">登出</a> </div>
    <div class="index-page" id="page-body">
      <div class="index-cover" id="index-cover">
     	 <img class="index-banner" src="http://m.chanyouji.cn/index-cover/14570-429968.jpg">
      </div>
    </div>
  </div>
  <div class="xkhd_body">
    <div class="xkhd_dh_xg_1">
      <div class="xkhd_dh_xg_1_left">
        <ul class="clearfix">
          <li><a href="/activity/index.php/Mainpage/listNewActivity" class="over">首页</a></li>
          <li><a href="/activity/index.php/NewActivity/launchActivity" class="">发起活动</a></li>
          <li><a href="/activity/index.php/MyActivity/myActivity" class="">我的活动</a></li>
          <li><a href="" class="">我的信息</a></li>
        </ul>
      </div>
      <div class="xkhd_dh_xg_1_right">
        <div class="xkhd_dh_xg_1_right_1">
          <form class="key-words-search" action="/activity/index.php/KeySearch/keySearch" method="POST">
            <input name="key_words" type="text" value="输入活动标题" class="xkhd_dh_xg_1_right_2">
            <input name="submit" type="submit" value="确认">
          </form>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="index-content-left">
          <div class="index-nav">
              <div class="index1">
                  <a href="/">发起活动</a>
              </div>
              <div class="index2">
                  <a href="/">我发起的活动</a>
              </div>
              <div class="index1">
                  <a href="/">我参加的活动</a>
              </div>
              <div class="index1">
                  <a href="/">我喜欢的活动</a>
              </div>
          </div>
      </div>
      <div class="content-right">
          <div class="content-right-left">
        
              <div class="activity-info-body">
				<div class="new-activity">
                	<form action="newActivity" method='post'>
                    	<span class="activity-info">活动名称</span><input class="activity-info-input" type="text" name="info-name"><br/>
                        <span class="activity-info">开始时间</span><input class="activity-info-input" type="text" name="info-start-time"><br/>
                        <span class="activity-info">结束时间</span><input class="activity-info-input" type="text" name="info-end-time"><br/>
                        <span class="activity-info">活动地点</span><input class="activity-info-input" type="text" name="info-place"><br/>
                        <span class="activity-info">花费</span><input class="activity-info-input" type="text" name="info-cost"><br/>
                        <span class="activity-info">活动介绍</span><input class="activity-info-input" type="text" name="info-introduce"><br/>                        <input type="submit" value="保存">
                    </form>
                </div>
              </div>
          </div>
          <div class="content-right-right" name="hot-activity">
          热门活动
          </div>
      </div>
    </div>
  </div>
</body>
</html>