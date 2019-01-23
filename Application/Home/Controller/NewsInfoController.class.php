<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/25
 * Time: 19:31
 */

namespace Home\Controller;


use Think\Controller;

class NewsInfoController extends Controller
{
    function index(){
        $newsId = I('id');
        $data = M('news')->where(array('id'=>$newsId))->find();
        $this->assign('data',$data)->display();
    }
}