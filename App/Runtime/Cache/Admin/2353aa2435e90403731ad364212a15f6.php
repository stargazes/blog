<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="/App/Admin/View/Public/Css/public.css" />
</head>
<body>
	<form action="<?php echo U(MODULE_NAME.'/Attribute/runAddAttr');?>" method="post">
		<table class="table">
			<tr>
				<th colspan="2">添加属性</th>
			</tr>
			<tr>
				<td>属性名称</td>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td>颜色</td>
				<td><input type="text" name="color" value=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="保存添加">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>