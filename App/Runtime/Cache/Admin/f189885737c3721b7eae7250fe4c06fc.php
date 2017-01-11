<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="/blog/App/Admin/View/Public/Css/public.css" />
</head>
<body>
	<?php if($blog != ''): ?><table class="table">
		<tr>
			<th>ID</th>
			<th>标题</th>
			<th>发布时间</th>
			<th>点击次数</th>
			<th>所属栏目</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
			<td width="5%"><?php echo ($v["id"]); ?></td>
			<td width="30%">
				<?php echo ($v["title"]); ?>
				<?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$val): ?><strong style="color:<?php echo ($val["color"]); ?>; margin:0 5px;">[<?php echo ($val["name"]); ?>]</strong><?php endforeach; endif; ?>
			</td>
			<td><?php echo (date('Y-m-d H:i:s', $v["time"])); ?></td>
			<td width="15%"><?php echo ($v["click"]); ?></td>
			<td><?php echo ($v["cate"]); ?></td>
			<td>
				<?php if(ACTION_NAME == 'index'): ?>[<a href="#">修改</a>]
				[<a href="<?php echo U(MODULE_NAME.'/Blog/toTrash', array('id' => $v['id'], 'type' => 1));?>" onclick="return confirm('你确定要删除？')">删除</a>]
				<?php else: ?>
				[<a href="<?php echo U(MODULE_NAME.'/Blog/toTrash', array('id' => $v['id'], 'type' => 0));?>">还原</a>]
				[<a href="<?php echo U(MODULE_NAME.'/Blog/delete', array('id' => $v['id']));?>" onclick="return confirm('你确定要彻底删除？')">彻底删除</a>]<?php endif; ?>
			</td>
		</tr><?php endforeach; endif; ?>
		<?php if(ACTION_NAME == 'trash'): ?><tr>
			<td colspan="6" align="center">
				<a href="<?php echo U(MODULE_NAME.'/Blog/emptyTrash');?>" onclick="return confirm('你确定要清空回收站？')">清空回收站</a>
			</td>
		</tr><?php endif; ?>
	</table><?php endif; ?>
	<div style="text-align:center; margin:10px 0;"><?php echo ($page); ?></div>
</body>
</html>