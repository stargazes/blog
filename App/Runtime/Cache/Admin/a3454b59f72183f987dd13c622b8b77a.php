<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="/blog/App/Admin/View/Public/Css/public.css" />
</head>
<body>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>属性名称</th>
			<th>颜色</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["name"]); ?></td>
			<td><div style="width:30px; height:30px; background:<?php echo ($v["color"]); ?>"></div></td>
			<td>
				[<a href="#">修改</a>]
				[<a href="<?php echo U(MODULE_NAME.'/Attribute/deleteAttr', array('id' => $v['id']));?>" onclick="return confirm('你确定要删除？')">删除</a>]
			</td>
		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>