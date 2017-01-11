<?php
namespace Home\Controller;
use Classlib\Category;

class ShowController extends CommonController {
    public function index(){
    	$id = $_GET['id'];
    	$field = array('id', 'title', 'time', 'click', 'content', 'cid');
    	$blogDb = M('blog');
    	$this->blog = $blogDb->field($field)->find($id);
    	$blogDb->where(array('id' => $id))->setInc('click');
    	
    	$cid = $this->blog['cid'];
    	$cate = M('category')->order('sort')->select();
    	$this->parent = Category::getParents($cate, $cid);
    	$this->count = count($this->parent) - 1;
    	$this->display();
    }
    
    public function click(){
    	$id = $_GET['id'];
    	$blogDb = M('blog');
    	$blogDb->where(array('id' => $id))->setInc('click');
    	$click = $blogDb->where(array('id' => $id))->getField('click');
    	echo $click;
    }
}