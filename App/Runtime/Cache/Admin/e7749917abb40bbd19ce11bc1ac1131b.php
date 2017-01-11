<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="/App/Admin/View/Public/Css/public.css" />
</head>
<body>
	<form action="<?php echo U(MODULE_NAME.'/Category/runSortCate');?>" method="post">
	<table class="table">
		<tr>
			<th>ID</th>
			<th>网站名称</th>
			<th>网址</th>
			<th>网站简介</th>
			<th>备注</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($links)): foreach($links as $key=>$v): ?><tr>
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["name"]); ?></td>
			<td><?php echo ($v["url"]); ?></td>
			<td><?php echo ($v["about"]); ?></td>
			<td><?php echo ($v["remarks"]); ?></td>
			<td>
				[<a href="<?php echo U(MODULE_NAME.'/Links/update', array('id' => $v['id']));?>">修改</a>]
				[<a href="<?php echo U(MODULE_NAME.'/Links/delete', array('id' => $v['id']));?>" onclick="return confirm('你确定要删除？')">删除</a>]
			</td>
		</tr><?php endforeach; endif; ?>
	</table>
	</form>
</body>
</html>