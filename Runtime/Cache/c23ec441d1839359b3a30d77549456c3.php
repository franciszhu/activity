<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>测试页面</title>
</head>
<body>
	<form action="confirmInput" method='post'>
                    	<span class="activity-info">活动名称</span><input class="activity-info-input" type="text" name="info-name"><br/>
                        <span class="activity-info">开始时间</span>
                        <input class="activity-info-input" type="text" name="info-start-year">年
                        <input class="activity-info-input" type="text" name="info-start-month">月
                        <input class="activity-info-input" type="text" name="info-start-day">日
                        <input class="activity-info-input" type="text" name="info-start-hour">：
                        <input class="activity-info-input" type="text" name="info-start-minute"><br/>
                        <span class="activity-info">结束时间</span>
                        <input class="activity-info-input" type="text" name="info-end-year">年
                        <input class="activity-info-input" type="text" name="info-end-month">月
                        <input class="activity-info-input" type="text" name="info-end-day">日
                        <input class="activity-info-input" type="text" name="info-end-hour">：
                        <input class="activity-info-input" type="text" name="info-end-minute"><br/>
                        <span class="activity-info">活动地点</span><input class="activity-info-input" type="text" name="info-place"><br/>
                        <span class="activity-info">花费</span><input class="activity-info-input" type="text" name="info-cost"><br/>
                        <span class="activity-info">活动介绍</span><input class="activity-info-input" type="text" name="info-introduce"><br/>                        <input type="submit" value="保存">
	</form>
</body>
</html>