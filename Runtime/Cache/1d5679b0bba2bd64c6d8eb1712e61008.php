<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>某活动</title>
</head>
<body>
<table>
<tr>
	<td><?php echo ($data["act_name"]); ?></td>
</tr>
<tr>
	<td>时间：</td>
	<td><?php echo ($startYear); ?>年<?php echo ($startMonth); ?>月<?php echo ($startDay); ?>日<?php echo ($startHour); ?>:<?php echo ($startMinute); ?> </td>
	<td>至</td>
	<td><?php echo ($endYear); ?>年<?php echo ($endMonth); ?>月<?php echo ($endDay); ?>日<?php echo ($endHour); ?>:<?php echo ($endMinute); ?></td>
</tr>
<tr>
	<td>地点：</td>
	<td><?php echo ($data["place"]); ?></td>
</tr>
<tr>
	<td>费用：</td>
	<td><?php echo ($data["cost"]); ?></td>
</tr>
<tr>
	<td>来自于：</td>
	<td><?php echo ($belongName["name"]); ?></td>
</tr>
<tr>
	<td><?php echo ($attentionCount); ?>人关注</td>
	<td><?php echo ($participateCount); ?>人参加</td>
</tr>
<tr>
	<td>活动详情：</td>
</tr>
<tr>
	<td><?php echo ($data["intro"]); ?></td>
</tr>
</table>
</body>
</html>