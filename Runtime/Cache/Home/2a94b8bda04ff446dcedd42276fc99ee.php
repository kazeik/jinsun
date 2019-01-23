<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>昕怡工艺品</title>
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<script src="/jinsun/Public/js/jquery.min.js"></script>-->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!---->
    <link rel="stylesheet" href="/jinsun/Public/css/index.css">
    <!---->
    <!--广告条自动滚动-->
    <script>
        $(function () {
            $('#myCarousel').carousel({ interval: 2000 });
        });

        function getActorsByName() {
            var name = document.getElementById("actorname").value;
            $.ajax({
                type: "get",
                data: {
                    name: name
                },
                url: "http://localhost/dunhai/index.php/api/actor/getActors",
                async: false,
                success: function (data) {
                    //                    alert(data)
                }
            });
        }
    </script>
</head>

<body>

    <div class="container-fluid">
        <!--首页标题-->
        <div class="row">
            <div class="container-fluid">
                <div class="navbar-header" style="margin: 10px;">
                    <a href="#">
                        <img class="lazyImg" src="/jinsun/Public/img/logo.png" data-original="/jinsun/Public/img/logo.png"
                            width="120" height="120" style="margin-left: 25px;"></a></div>
                <div class="nav navbar-nav navbar-right" id="bs-example-navbar-collapse-6" style="margin:20px;font-size: 18px;height: 100%">
                    <ul class="nav navbar-nav" style="height: 100px">
                        <li class="active" style="padding: 15px"><a href="<?php echo U('Index/index');?>">首页<span class="sr-only"
                                    style="background-size: 160px">(current)</span></a></li>
                        <li style="padding: 15px"><a href="<?php echo U('Actor/index');?>">产品中心</a></li>
                        <li style="padding: 15px"><a href="<?php echo U('News/index');?>">新闻资讯</a></li>
                        <li style="padding: 15px"><a href="<?php echo U('About/index');?>">关于我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--滚动广告条-->
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active" style="height:400px;">
                    <img src="http://040.youawangluo.com/news/UploadFile/image/20180627/20180627113843624362.jpeg" alt="Second slide"
                        width="100%">
                    <div class="carousel-caption" style="color: red">韩国DJ-Monster</div>
                </div>
                <div class="item" style="height:400px;">
                    <img src="http://040.youawangluo.com/news/UploadFile/image/20180507/20180507235973267326.jpeg" alt="Second slide"
                        width="100%">
                    <div class="carousel-caption" style="color: red">广东三美人</div>
                </div>
                <div class="item" style="height:400px;">
                    <img src="http://040.youawangluo.com/news/UploadFile/image/20180403/20180403001900077.jpg" alt="Third slide"
                        width="100%">
                    <div class="carousel-caption" style="color: red">光头女子组合Lucky Fox</div>
                </div>
                <!--</foreach>-->
            </div>
        </div>
        <div class="row" style="padding:10px">
            <!--搜索带按钮,居右-->
            <div class="col-md-3 .navbar-center">
                <div class="row">
                    <button type="submit" class="btn btn-default" id="actor_search" >工艺品提供商</button>
                </div>
            </div>
        </div>
        <!--艺人分类-->
        <!--九宫格的艺人列表,3*3-->
        <!-- <div class="row" id="actorlist">
                <?php if(is_array($data['actors'])): foreach($data['actors'] as $key=>$actor): ?><div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href=<?php echo U('ActorInfo/index',array('uid'=>$actor['id']));?>> <img src="/jinsun/Public/img/avatar/<?php echo ($actor['avatar']); ?>.jpg"
                                alt="..." width="400px" height="100px">
                                <div class="caption">
                                    <h4 class='text-center'><?php echo ($actor['actorname']); ?></h4>
                                    <p class='text-center'><?php echo ($actor['type']); ?></p>
                                </div>
                            </a>
                        </div>
                    </div><?php endforeach; endif; ?>
                <!--更多 居中显示-->
        <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="navbar-form navbar-right"> -->
        <!--<button type="submit" class="btn btn-primary"><a href="<?php echo U('Actor/index');?>">more</a></button>-->
        <!-- <button type="submit" class="btn btn-default navbar-btn"><a href="<?php echo U('Actor/index');?>">more</a></button>
                        </div>
                    </div>
                </div> -->

        <!-- </div> -->
        <!--新闻资讯及关于我们 7:3-->

        <!-- <div class="row">
                <div class="col-md-6">
                    <h2>新闻资讯</h2><br>
                    <ul id="newslist">
                        <?php if(is_array($data['news'])): foreach($data['news'] as $key=>$new): ?><li style='margin-top: 5px;margin-bottom: 5px;'><a href="<?php echo U('NewsInfo/index',array('id'=>$new['id']));?>"><?php echo ($new['newstitle']); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                    <div class="navbar-form navbar-right">
                        <button type="submit" class="btn btn-default btn-xs"><a href="<?php echo U('News/index');?>">more</a></button>
                    </div>
                </div> -->
        <!-- <div class="col-md-6"> -->
        <!-- <h2>关于我们</h2><br>
                    上海敦海文化传媒有限公司是经国家工商行政管理局注册，上海省文化厅批准成立的专业文化演艺演出经纪机构。整体机构实力雄厚并由多名资深的文化艺术精英及演出经纪人组成。
                    主要从事大型活动晚会策划、外籍艺人引进、开业庆典、礼仪活动策划、明星演出、明星代言、明星演唱会、艺人签约推广、企业品牌推广策划、等项目。并且在长期的实践中积累着丰富的
                    演艺经纪与活动策划组织能力，成功在全国各地策划多场大型演唱会、大型企业晚会、开业庆典、礼仪活动等。与国内多家卫视综艺栏目保持着良好的合作关系。<br>
                    敦海公司由经纪人丁永丰先生与陈子祺女士联合发起。与全国...
                    <br>
                    <div class="navbar-form navbar-right">
                        <button type="submit" class="btn btn-default btn-xs"><a href="<?php echo U('About/index');?>">more</a></button>
                    </div>
                </div> -->
        <!-- </div> -->
        <!--底部的版本及声明-->
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6">
                    <address>
                        <abbr title="Phone">联系电话:</abbr> (123) 456-7890<br>
                        <strong>Copyright © 上海敦海文化传媒有限公司 版权所有</strong>
                    </address>
                </div>
                <div class="col-md-6">
                    <address>
                        <strong>联系人:</strong><br>
                        陈子祺<br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>