<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="/App/Admin/View/Public/Css/public.css" />
</head>
<body>
	<form action="<?php echo U(MODULE_NAME.'/Links/runAddLink');?>" method="post">
		<table class="table">
			<tr>
				<th colspan="2">添加友情链接</th>
			</tr>
			<tr>
				<td>网站名称</td>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td>网址</td>
				<td><input type="text" name="url" value="http://"></td>
			</tr>
			<tr>
				<td>网站简介</td>
				<td><textarea name="about"></textarea>
			</tr>
			<tr>
				<td>备注</td>
				<td><textarea name="remarks"></textarea>
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