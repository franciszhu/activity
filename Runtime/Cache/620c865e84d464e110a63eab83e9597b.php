<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Activity/Tpl/MainPage/MainPage.css" type="text/css" rel="stylesheet"/>
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
          <div class="content-right-left">
              <div class="activity-recommend-list">
              	<div class="activity-recommend">
                推荐活动
                </div>
                <div class="activity-recommend-info">
                    <ul class="activity-recommend-info">
                        <li>
                            <div class="activity-recommend-pic1">
                                <img alt="活动缩略图片" src="C:\Users\包子剑客\Pictures\1250.jpg">
                            </div>
                            <div class="activity-recommend-name1">
                                活动1
                            </div>
                        </li>
                        <li>
                            <div class="activity-recommend2">
                                <img alt="活动缩略图片" src="C:\Users\包子剑客\Pictures\1250.jpg">
                            </div>
                            <div class="activity-recommend-name1">
                                活动2
                            </div>
                        </li>
                        <li>
                            <div class="activity-recommend3">
                                <img alt="活动缩略图片" src="C:\Users\包子剑客\Pictures\1250.jpg">
                            </div>
                            <div class="activity-recommend-name1">
                                活动3
                            </div>
                        </li>
                        <li>
                            <div class="activity-recommend4">
                                <img alt="活动缩略图片" src="C:\Users\包子剑客\Pictures\1250.jpg">
                            </div>
                            <div class="activity-recommend-name1">
                                活动4
                            </div>
                        </li>
                    </ul>
                </div>
              </div>
              <div class="activity-info-body">
              	<?php
for ($i=$activityMount-1; $i>=0; $i--){ $startYear=substr($activityInfoArray[$i]["time_start"],0,4); $startMonth=substr($activityInfoArray[$i]["time_start"],4,2); $startDay=substr($activityInfoArray[$i]["time_start"],6,2); $startHour=substr($activityInfoArray[$i]["time_start"],8,2); $startMinute=substr($activityInfoArray[$i]["time_start"],10,2); $startTime = $startYear.'年'.$startMonth.'月'.$startDay.'日'.$startHour.':'.$startMinute; $endYear=substr($activityInfoArray[$i]["time_end"],0,4); $endMonth=substr($activityInfoArray[$i]["time_end"],4,2); $endDay=substr($activityInfoArray[$i]["time_end"],6,2); $endHour=substr($activityInfoArray[$i]["time_end"],8,2); $endMinute=substr($activityInfoArray[$i]["time_end"],10,2); $endTime = $endYear.'年'.$endMonth.'月'.$endDay.'日'.$endHour.':'.$endMinute; $activityTime = $startTime.' 至 '.$endTime; $Origin = M('User_info'); $belongName = $Origin->find($activityInfoArray[$i]['belong_to']); $Attention = M('Attention'); $attentionCount = $Attention->where('act_num = '.$activityInfoArray[$i]['number'])->count(); $Participate = M('Participate'); $participateCount = $Participate->where('act_num = '.$activityInfoArray[$i]['number'])->count(); echo '<div class="activity-info-simple">
                	<div class="activity-info-simple-photo">
                    	<img alt="活动缩略图片" src="'.$activityInfoArray[$i]['photo'].'">
                    </div>
                    <div class="activity-info-simple-content">
                    	<div class="activity-info-simple-title">
                        <h2><a href="/activity/index.php/Detail/showDetail2/id/'.$activityInfoArray[$i]['number'].'">'.$activityInfoArray[$i]['act_name'].'</a></h2>
                        </div>
                        <div class="activity-info-simple-time">
                        <p>'.$activityTime.'</p>
                        </div>
                        <div class="activity-info-simple-place">
                        <p>'.$activityInfoArray[$i]['place'].'</p>
                        </div>
                        <div class="activity-info-simple-belong">
                        <a href="/">'.$belongName['name'].'</a>
                        </div>
                        <div class="activity-info-simple-attention">
                        <p><span>'.$attentionCount.'人<a href="/activity/index.php/Attention/addAttention/actNumber/'.$activityInfoArray[$i]['number'].'">关注</a></span>
                        <span>'.$participateCount.'人<a href="/activity/index.php/Participate/addParticipate/actNumber/'.$activityInfoArray[$i]['number'].'">参加</a></span></p>
                        </div>
                    </div>
                </div>'; } ?>
                <div class="activity-info-bottom">
                	<div class="next-page">
                	<?php
 if ($pageCount == 1) { ; }else{ if ($page != 1) { echo '<span><a href="'.($page-1).'">上一页</a></span>&nbsp;&nbsp;'; } for ($i=1; $i <= $pageCount; $i++){ if ($i == $page) { echo '<span>'.($i).'</span>&nbsp;&nbsp;'; }else { echo '<span><a href="'.$i.'">'.($i).'</a></span>&nbsp;&nbsp;'; } } if ($page == $pageCount) { }else{ echo '<a href="'.($page+1).'">下一页</a></span>'; } } ?>
                	</div>
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