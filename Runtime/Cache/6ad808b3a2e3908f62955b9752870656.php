<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>show activity detail</title>
</head>
<body>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["number"]); ?>--<?php echo ($vo["act_name"]); ?>--活动介绍：<?php echo ($vo["intro"]); ?>--时间<?php echo ($vo["time_start"]); ?>至<?php echo ($vo["time_end"]); ?>--地点：<?php echo ($vo["place"]); ?>--费用<?php echo ($vo["cost"]); ?>--来自于<?php echo ($vo["belong_to"]); ?>--<?php echo ($vo["photo"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>