<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/blog/App/Home/View/Public/Css/common.css" />
	<script type="text/JavaScript" src='/blog/App/Home/View/Public/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='/blog/App/Home/View/Public/Js/common.js'></script>
	<link rel="stylesheet" href="/blog/App/Home/View/Public/Css/show.css" />
</head>
<body>
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.nicewen.com" target='_blank'>优文网</a></li>
				<li><a href="http://weibo.com/aabbxyx" target='_blank'>官方微博</a></li>
				<li><a href="http://www.aabbxyx.com" target='_blank'>娱乐中心</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.nicewen.com/lizhi/" target='_blank'>励志</a></li>
				<li><a href="http://www.nicewen.com/jingdianyulu/" target='_blank'>语录</a></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://www.nicewen.com" target='_blank' class='logo'>
				<img src="/blog/App/Home/View/Public/Images/logo.gif"/>
			</a>
			<div class='search-wrap'>
				<form action="<?php echo U(MODULE_NAME.'/Search/search');?>" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>


	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="/" class='top-cate'>博客首页</a>
			</li>
			
			<?php if(is_array($nav_cate)): foreach($nav_cate as $key=>$v): ?><li class='nav-lv1-li'>
				<a href="<?php echo U('/list-'.$v['id']);?>" class='top-cate'><?php echo ($v["name"]); ?></a>
				<?php if($v['child']): ?><ul>
					<?php if(is_array($v["child"])): foreach($v["child"] as $key=>$val): ?><li><a href="<?php echo U('/list-'.$val['id']);?>"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; ?>
				</ul><?php endif; ?>
			</li><?php endforeach; endif; ?>
		</ul>
	</div>

<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<div class='location'>
				<a href="/blog">首页</a>>
				<?php if(is_array($parent)): foreach($parent as $key=>$v): ?><a href="<?php echo U('/list-'.$v['id']);?>"><?php echo ($v["name"]); ?></a><?php if($key != $count): ?>&gt;<?php endif; endforeach; endif; ?>
			</div>
			<div class="title">
				<p><?php echo ($blog["title"]); ?></p>
				<div>
					<span class='fl'>发布于：<?php echo (date('Y年m月d日', $blog["time"])); ?></span>
					<span class='fr'>已被阅读<?php echo ($blog["click"]); ?>次</span>
					<!--
					<span class='fr' id="js_click" data-url="<?php echo U(MODULE_NAME.'/Show/click', array('id' => $blog['id']));?>">已被阅读<strong class="click_num"></strong>次</span>
					-->
				</div>
			</div>
			<div class='content'>
				<?php echo (htmlspecialchars_decode($blog["content"])); ?>
			</div>
		</div>
	<!--主体右侧-->
		<div class='main-right'>
			<dl>
				<dt>热门博文</dt>
				<?php if(is_array($hot_blog)): foreach($hot_blog as $key=>$v): ?><dd>
					<a href="<?php echo U('/show-'.$v['id']);?>"><?php echo ($v["title"]); ?></a>
					<span>(<?php echo ($v["click"]); ?>)</span>
				</dd><?php endforeach; endif; ?>
			</dl>

			<dl>
				<dt>最发布发</dt>
				<?php if(is_array($new_blog)): foreach($new_blog as $key=>$v): ?><dd>
					<a href="<?php echo U('/show-'.$v['id']);?>"><?php echo ($v["title"]); ?></a>
					<span>(<?php echo (date('m-d', $v["time"])); ?>)</span>
				</dd><?php endforeach; endif; ?>
			</dl>

			<dl>
				<dt>友情连接</dt>
				<?php if(is_array($links)): foreach($links as $key=>$v): ?><dd>
					<a href="<?php echo ($v["url"]); ?>" target="_blank"><?php echo ($v["name"]); ?></a>
				</dd><?php endforeach; endif; ?>
			</dl>
		</div>
	
	</div>


<!--�ײ�-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>