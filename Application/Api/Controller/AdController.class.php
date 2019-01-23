<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/24
 * Time: 08:47
 */

namespace Api\Controller;


use Think\Controller\RestController;

class AdController extends RestController
{
    function index()
    {
        jsondata(M('ad')->select());
    }
}