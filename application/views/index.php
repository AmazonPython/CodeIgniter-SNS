<!DOCTYPE html>
<!-- saved from url=(0021)http://feei.top/zxdx/ -->
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=750,target-densitydpi=340,user-scalable=no">
    <title>Nova Mobile SNS</title>
    <meta name="keywords" content="Nova Mobile SNS" />
    <meta name="description" content="Nova Mobile SNS。" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/public.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/swiper.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <script src="<?php echo base_url();?>js/jquery-1.8.3.js"></script>
    <script src="<?php echo base_url();?>js/swiper.js"></script>
</head>
<body id="body_bg">
<div class="homepage">
    <div class="set" id="toggle-sidebar" style="width: 136.364px; float:left">
        <img src="<?php echo base_url();?>img/a1.png" />
    </div>
    <div class="swiper-container  ws0701_tab_top" id="swiper-container2" style="background:#FD4C5B; position:fixed;top:0px;right:0px; width:100%; z-index:10;">
        <!--------------功能列表-------------->
        <div class="swiper-wrapper" style="float:right; width:80%;">
            <div class="swiper-slide active-nav" style="width: 136.364px;">
                <span>消息</span>
            </div>
            <div class="swiper-slide" style="width: 136.364px;">
                <span>好友</span>
            </div>
            <div class="swiper-slide" style="width: 136.364px;">
                <span>空间</span>
            </div>
            <div class="swiper-slide" style="width: 136.364px;">
                <span>写说说</span>
            </div>
        </div>
    </div>
    <div class="ws0701_container" style="margin-top:120px;">
        <div class="swiper-container" id="swiper-container3" style="width:100%;">
            <div class="swiper-wrapper" style="height: 488px; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                <!--------------消息-------------->
                <div class="swiper-slide news" style="width:750px;height:900px; overflow:auto">
                    <ul>
                        <li>
                            <div class="lf">
                                <img src="<?php echo base_url();?>img/a1.png" />
                                <h1>奔波儿灞</h1>
                                <span>15</span>
                            </div>
                            <div class="rt">
                                <span>上午10:58</span>
                            </div>
                        </li>
                        <li>
                            <div class="lf">
                                <img src="<?php echo base_url();?>img/a1.png" />
                                <h1>霸波尔奔</h1>
                                <span>15</span>
                            </div>
                            <div class="rt">
                                <span>上午10:58</span>
                            </div>
                        </li>
                        <li>
                            <div class="lf">
                                <img src="<?php echo base_url();?>img/a1.png" />
                                <h1>幽谷草</h1>
                                <span>15</span>
                            </div>
                            <div class="rt">
                                <span>上午10:58</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--------------好友-------------->
                <div class="swiper-slide" style="width: 750px;height:900px;overflow:auto">
                    <?php if (isset($rows)) { foreach ($rows as $row):?>
                    <div class="group news">
                        <div class="group_tit">
                            <h1><?php echo $row['groups'];?></h1>
                        </div>
                        <ul>
                            <li>
                                <div class="lf">
                                    <img src="<?php echo base_url();?>img/a1.png" />
                                    <h1><?php echo $row['name'];?></h1>
                                </div>
                                <div class="rt">
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div><?php endforeach;}?>
                </div>
                <!--------------空间-------------->
                <div class="swiper-slide" style="width: 750px;height:900px;overflow:auto; background:#ECECEC">
                    <div class="space news">
                        <ul>
                            <li>
                                <div class="lf">
                                    <img src="<?php echo base_url();?>img/a1.png" />
                                    <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                    <span>上午10:58</span>
                                </div>
                                <div style="clear:both"></div>
                                <p class="say">
                                    东风夜放花千树，更吹落、星如雨。宝马雕车香满路。凤箫声动，玉壶光转，一夜鱼龙舞。
                                    　　蛾儿雪柳黄金缕，笑语盈盈暗香去。众里寻他千百度。蓦然回首，那人却在，灯火阑珊处。
                                </p>
                                <div class="carry">
                                    <div class="carry_lf">
                                        共浏览11次
                                    </div>
                                    <div class="carry_rt">
                                        <span style="background:url(../img/a5.jpg)"></span>
                                        <span style="background:url(..//img/a6.jpg)"></span>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="comment">
                                    <div class="zan">
                                        <h1>
                                            <span>吃瓜</span>、
                                            <span>群众</span>
                                        </h1>
                                    </div>
                                    <h2>
                                        <span>吃瓜：</span>
                                        此地无银三百两
                                    </h2>
                                    <h2>
                                        <span>群众：</span>
                                        隔壁王二不曾偷
                                    </h2>
                                </div>
                                <div class="inpt">
                                    <input type="text" />
                                </div>
                            </li>
                            <li>
                                <div class="lf">
                                    <img src="<?php echo base_url();?>img/a1.png" />
                                    <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                    <span>上午10:58</span>
                                </div>
                                <div style="clear:both"></div>
                                <p class="say">
                                    东风夜放花千树，更吹落、星如雨。宝马雕车香满路。凤箫声动，玉壶光转，一夜鱼龙舞。
                                    　　蛾儿雪柳黄金缕，笑语盈盈暗香去。众里寻他千百度。蓦然回首，那人却在，灯火阑珊处。
                                </p>
                                <div class="carry">
                                    <div class="carry_lf">
                                        共浏览11次
                                    </div>
                                    <div class="carry_rt">
                                        <span style="background:url(../img/a5.jpg)"></span>
                                        <span style="background:url(../img/a6.jpg)"></span>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="comment">
                                    <div class="zan">
                                        <h1>
                                            <span>吃瓜</span>、
                                            <span>群众</span>
                                        </h1>
                                    </div>
                                    <h2>
                                        <span>吃瓜：</span>
                                        此地无银三百两
                                    </h2>
                                    <h2>
                                        <span>群众：</span>
                                        隔壁王二不曾偷
                                    </h2>
                                </div>
                                <div class="inpt">
                                    <input type="text" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--------------写说说-------------->
                <div class="swiper-slide" style="width: 750px;height:900px;overflow:auto">
                    <div class="say_say">
                        <h3>有什么新鲜事想要告诉大家?</h3>
                        <textarea
                                value="说点什么吧..."
                                onfocus="if(this.value=='说点什么吧...'){this.value=''}"
                                onblur="if(this.value==''){this.value='说点什么吧...';}"
                        >说点什么吧...</textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" style="background:#F90">上传图片</button>
                        <button type="submit">发表</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------侧边栏导航------------------------>
<div id="dowebok">
    <ul class="nav">
        <li class="nav_li" >
            <img src="<?php echo base_url();?>img/a1.png" style=" display:block;margin:auto" />
            <p class="nickname">幽谷草</p>
            <p class="mood">今天天气不错，挺风和日丽的。我们下午没有课。。。</p>

        </li>
        <li><a href="<?php echo base_url('demo/data');?>" style="background:url(../img/70%20Basic%20Icons-all-05.svg) 75px 30px no-repeat;">个人资料</a></li>
        <li><a href="<?php echo base_url('demo/feedback');?>" style="background:url(../img/70%20Basic%20Icons-all-63.svg) 75px 30px no-repeat">意见反馈</a></li>
        <li><a href="<?php echo base_url('demo/about');?>" style="background:url(../img/70%20Basic%Icons-all-16.svg) 75px 30px no-repeat">关于我们</a></li>
        <li style=" padding-top:10px; height:90px; text-align:center"><button onclick="location.href='/demo/login';">退出登陆</button></li>
    </ul>
</div>
<script src="<?php echo base_url();?>js/simpler-sidebar.min.js"></script>
<script>
    $(".group_tit").click(function(){
        $(this).parent().toggleClass("cheg");
    })
    $(document).ready()
    $("#toggle-sidebar").click(function(){
        $("#dowebok").addClass("block");
    })
    $(function() {
        $('#dowebok').simplerSidebar({
            opener: '#toggle-sidebar',
            sidebar: {
                align: 'left',
                width: 500,
            }
        });
    });
</script>
<script>
    var mySwiper1 = new Swiper('.swiper1',{
        pagination : '.swiper-pagination',
        paginationType : 'fraction',
    })

    var mySwiper2 = new Swiper('#swiper-container2',{
        watchSlidesProgress : true,
        watchSlidesVisibility : true,
        slidesPerView : 5.5,
        onTap: function(){
            mySwiper3.slideTo( mySwiper2.clickedIndex)
        }
    })

    var mySwiper3 = new Swiper('#swiper-container3',{
        autoHeight: true,
        onSlideChangeStart: function(){
            updateNavPosition()
        }
    })

    function updateNavPosition(){
        $('#swiper-container2 .active-nav').removeClass('active-nav')
        var activeNav = $('#swiper-container2 .swiper-slide').eq(mySwiper3.activeIndex).addClass('active-nav');
        if (!activeNav.hasClass('swiper-slide-visible')) {
            if (activeNav.index()>mySwiper2.activeIndex) {
                var thumbsPerNav = Math.floor(mySwiper2.width/activeNav.width())-1
                mySwiper2.slideTo(activeNav.index()-thumbsPerNav)
            }
            else {
                mySwiper2.slideTo(activeNav.index())
            }
        }
    }
</script>
</body>
</html>