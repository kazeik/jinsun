<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/24
 * Time: 08:50
 */

namespace Api\Controller;


use Think\Controller;

class ActorController extends Controller
{
    /**
     * 获取所有分类
     */
    function getActorTypes()
    {
        jsondata(M('actortype')->select());
    }

    /**
     * 获取艺人详情
     * @param $actorid 艺人id
     */
    function getActorInfo($actorid)
    {
        $info = M('actor')->where("id='" . $actorid . "'")->find();
        $imgData = M('img')->where("id='" . $actorid . "'")->select();
        $videoData = M('video')->where("id='" . $actorid . "'")->select();
        $data = array(
            'info' => $info,
            'imgData' => $imgData,
            'video' => $videoData
        );
        jsondata($data);
    }

    /**
     * 获取所有艺人列表
     */
    function getActors()
    {
        $sqlstr = "SELECT dh_actor.id, dh_actor.actorname,dh_actor.actorinfo, dh_actor.country, dh_actor.avatar, dh_actortype.type FROM dh_actor, dh_actortype where dh_actor.id = dh_actortype.id";
        jsondata(M('actor')->query($sqlstr));
    }

    /**
     * @param $page 页码
     * @param $pageSize 每页数量
     */
    function getActorsByPage(){
        $page = I('page');
        $pageSize = I('pageSize');
        $sqlstr = "SELECT dh_actor.id, dh_actor.actorname,dh_actor.actorinfo, dh_actor.country, dh_actor.avatar, dh_actortype.type FROM dh_actor, dh_actortype
        where dh_actor.id = dh_actortype.id limit ".($page*$pageSize).",".$pageSize;
        jsondata(M('actor')->query($sqlstr));
    }

    /**
     * 根据艺人所属类型获取艺人
     * @param $typeId 艺人所属类型
     */
    function getActorByTypeId($typeId)
    {
        jsondata(M('actor')->where("type='" . $typeId . "'")->select());
    }

    /**
     * 根据艺人名称模糊查询
     * @param $name 艺人名称
     */
    function getActorByName($name)
    {
        $where['actorname'] = array('like', '%' . $name . '%');
        jsondata(M('actor')->where($where)->find());
    }
}