<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        // $actortyps = M("actortype")->select();
        // $sqlstr = "SELECT dh_actor.id, dh_actor.actorname,dh_actor.actorinfo, dh_actor.country, dh_actor.avatar, dh_actortype.type FROM dh_actor, dh_actortype
        // where dh_actor.typeid = dh_actortype.id limit 0,6";
        // $actors = M('actor')->query($sqlstr);
        // $news = M('news')->page(0, 6)->select();
        // $adData = M('ad')->page(0,5)->select();
        // $dataArr = array(
        //     'actors' => $actors,
        //     'actortypes' => $actortyps,
        //     'news' => $news,
        //     'ad'=>$adData
        // );
        // $this->assign('data', $dataArr)->display();

        $this->display();
    }
}