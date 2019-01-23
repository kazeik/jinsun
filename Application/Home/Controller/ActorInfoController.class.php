<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/25
 * Time: 14:32
 */

namespace Home\Controller;


use Think\Controller;

class ActorInfoController extends Controller
{
    function index()
    {
        $actorId = I("uid");
        $actorInfo = M('actor')->where(array('id' => $actorId))->find();
        $imgarr = M('img')->where(array('atid' => $actorId))->select();
        $videoArr = M('video')->where(array('atid' => $actorId))->select();
        $dataArr = array(
            'info' => $actorInfo,
            'imgs' => $imgarr,
            'videos' => $videoArr
        );
        $this->assign("data", $dataArr)->display();
    }

}