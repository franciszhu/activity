<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>select data</title>
</head>
<body>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["number"]); ?>--<?php echo ($vo["intro"]); ?>--<?php echo ($vo["act_name"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>