<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Activity/Tpl/ActivityInfo/ActivityInfo.css" type="text/css" rel="stylesheet"/>
<title>无标题文档</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="float_index.js"></script>
</head>
<body>
  <div class="top-bar">
  	<a href="/"><img alt="活动记" class="top-logo" src="http://cdn.chanyouji.cn/assets/top-logo-57dbfef8097d9d3bd900eef5bd23b123.png" /></a>
    <div class="login" id="top-bar-login"> <a href="//login's url">登录</a> </div>
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
          <li><a href="/" class="over">首页</a></li>
          <li><a href="http://hd.xunkoo.com/activityList/0/0" class="">同城活动</a></li>
          <li><a href="http://hd.xunkoo.com/activityList/0/1" class="">线上活动</a></li>
          <li><a href="http://hd.xunkoo.com/activityList/0/3" class="">福利活动</a></li>
          <li><a href="">本校活动</a></li>
        </ul>
      </div>
      <div class="xkhd_dh_xg_1_right">
        <div class="xkhd_dh_xg_1_right_1">
          <form class="key-words-search" action="/" method="get">
            <input name="" type="text" value="输入活动标题" class="xkhd_dh_xg_1_right_2">
            <input name="submit" type="submit" value="确认">
          </form>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="index-content-left">
          <div class="index-nav">
              <div class="index1">
                  <a href="/">演出/晚会</a>
              </div>
              <div class="index2">
                  <a href="/">体育竞技</a>
              </div>
              <div class="index1">
                  <a href="/">讲座沙龙</a>
              </div>
              <div class="index1">
                  <a href="/">旅行户外</a>
              </div>
              <div class="index1">
                  <a href="/">生活聚会</a>
              </div>
              <div class="index1">
                  <a href="/">福利活动</a>
              </div>
          </div>
      </div>
      <div class="content-right">
          <div class="content-right-up">
              	<div class="activity-info">
                	<div class="activity-info-photo">
                    	<img alt="活动缩略图片" src="C:\Users\包子剑客\Pictures\1250.jpg">
                    </div>
                    <div class="activity-info-content">
                    	<div class="activity-info-title">
                        <h2><?php echo ($data["act_name"]); ?></h2>
                        </div>
                        <div class="activity-info-time">
                        <p>时间：<?php echo ($startYear); ?>年<?php echo ($startMonth); ?>月<?php echo ($startDay); ?>日<?php echo ($startHour); ?>:<?php echo ($startMinute); ?>至 <?php echo ($endYear); ?>年<?php echo ($endMonth); ?>月<?php echo ($endDay); ?>日<?php echo ($endHour); ?>:<?php echo ($endMinute); ?></p>
                        </div>
                        <div class="activity-info-cost">
                        <p>费用：<?php echo ($data["cost"]); ?></p>
                        </div>
                        <div class="activity-info-place">
                        <p>地点: <?php echo ($data["place"]); ?></p>
                        </div>
                        <div class="activity-info-belong">
                        <p>来自于 个人：<a href="/"><?php echo ($belongName["name"]); ?></a></p>
                        </div>
                        <div class="activity-info-attention">
                        <p><span><?php echo ($attentionCount); ?>人关注</span>
                        <span><?php echo ($participateCount); ?>人参加</span></p>
                        </div>
                    </div>
                </div>
            <div class="activity-info-detail">
              <p>活动详情</p>
              <p><?php echo ($data["intro"]); ?></p>
              </div>
              <div class="activity-info-partner">
              <p>活动参与者</p>
              <?php
 for ($i=0; $i<count($userName);$i++){ echo '<p>'.($i+1).'.'.'<span><a href="/">'.$userName['user'.$i].'</a></span></p>'; } ?>
              <p><a href="/">更多…</a></p>
              <p></p>
              </div>
              
          </div>

      </div>
    </div>
  </div>
</body>
</html>