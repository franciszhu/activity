<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>show attention</title>
</head>
<body>
	<?php if(is_array($myattention)): $i = 0; $__LIST__ = $myattention;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["user_num"]); ?>--<?php echo ($vo["act_num"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>
	
	<?php echo ($attentionCount); ?></br>
	
	
</body>
</html>