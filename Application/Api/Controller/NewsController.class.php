<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/24
 * Time: 09:06
 */

namespace Api\Controller;

use Think\Controller\RestController;

class NewsController extends RestController
{
    /**
     * 分页本找新闻
     * @param $page 页码
     * @param $pageSize 每页数量
     */
    function index($page,$pageSize)
    {
        if (empty($page)) {
            $page = 0;
        }
        jsondata(M('news')->limit($page * $pageSize, $pageSize)->select());
    }

    /**
     *
     */
    function getAllNews(){
        jsondata(M('news')->select());
    }

    /**
     * 依据id获取新闻详情
     * @param $id 新闻id
     */
    function getNewById($id)
    {
        jsondata(M('news')->where("id='" . $id . "'"))->find();
    }
}