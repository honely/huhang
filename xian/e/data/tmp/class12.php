<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
    <meta content="telephone=no" name="format-detection" />
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>千百炼装饰-整装产品</title>
    <meta content="西安装修公司排名,西安装修公司,西安十大装修公司,西安品牌装修公司,西安家庭装修,西安室内装修,西安装饰公司,西安装修公司哪家好,西安千百炼装饰公司,西安千百炼装修公司,西安千百炼装饰,千百炼装修,千百炼装饰" name="keywords">
	<meta content="千百炼家装集团，是一家专注于整体家装服务的集团化公司，旨在为业主提供家装一站服务的完美解决方案。装修热线：400-029-1986" name="description">
    <script src="/mobile/static/js/flexible.js"></script>
    <link rel="stylesheet" href="/mobile/static/css/common.css">
    <link rel="stylesheet" href="/mobile/static/css/swiper-3.4.2.min.css">
    <link rel="stylesheet" href="/mobile/static/css/style.css">
    <link rel="stylesheet" href="/mobile/static/css/product.css">
    <style>
        .triangle-rt{
            border-left:0.24rem solid #c70000;
            border-top:0.24rem solid transparent; 
            border-bottom:0.24rem solid transparent;
            position: absolute;
            top:0.12rem;
            right:-0.2rem;
        }
        .triangle-lt{
            border-right:0.24rem solid #c70000;
            border-top:0.24rem solid transparent; 
            border-bottom:0.24rem solid transparent;
            position: absolute;
            top:0.12rem;
            left:-0.2rem;
        }
       
    </style>
</head>
<body style="z-index:1;" ontouchstart>
    <!-- 顶部变量模板 -->
           <nav class="nav-ul-index">
        <i></i>
        <ul>
            <li>
                <a href="/mobile/index.html">
                    <img src="/mobile/static/images/navicon01.png" />
                    <p>网站首页</p>
                </a>
            </li>
            <li>
                <a href="/mobile/design/index.html">
                    <img src="/mobile/static/images/navicon06.png" />
                    <p>量房设计</p>
                </a>
            </li>
            <li>
                <a href="/mobile/product/index.html">
                    <img src="/mobile/static/images/navicon02.png" />
                    <p>整装产品</p>
                </a>
            </li>
            <li>
                <a href="/mobile/quote/index.html">
                    <img src="/mobile/static/images/navicon04.png" />
                    <p>装修报价</p>
                </a>
            </li>
            <li>
                <a href="tel:400-029-1986">
                    <img src="/mobile/static/images/navicon09.png" />
                    <p>电话咨询</p>
                </a>
            </li>
            <li>
                <a href="/mobile/loans/index.html">
                    <img src="/mobile/static/images/navicon03.png" />
                    <p>装修贷款</p>
                </a>
            </li>
            <li>
                <a href="/mobile/activity/index.html">
                    <img src="/mobile/static/images/navicon05.png" />
                    <p>最新优惠</p>
                </a>
            </li>
            <li>
                <a href="/mobile/drops/index.html">
                    <img src="/mobile/static/images/navicon07.png" />
                    <p>滴滴接驾</p>
                </a>
            </li>
            <li>
                <a href="/mobile/stores_nav/index.html">
                    <img src="/mobile/static/images/navicon08.png" />
                    <p>门店导航</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- 导航 end -->
     <!-- 头部 begin -->
    <header class="header">
        <!-- logo begin -->
        <div class="logo">
            <a href="/mobile/index.html">
                <img src="/mobile/static/images/logo.png" alt="">
            </a>
        </div>
        <!-- logo end -->
        <!-- 城市分区 begin -->
        <div class="city">
            <div class="head-city">
                <a href="javascript:;" class="cityshow">
                    西安
                </a>
                <i class="xiala"></i>
            </div>
            <ul class="city-list">
                <li><h3>选择城市</h3></li>
                <li class="citys"><a href="xian.qblzs.com.cn">西安</a></li>
                <li class="citys"><a href="wuhan.qblzs.com.cn">武汉</a></li>
                <li class="citys"><a href="kunming.qblzs.com.cn">昆明</a></li>
                <li class="citys"><a href="baoji.qblzs.com.cn">宝鸡</a></li>
                <li class="citys"><a href="guiyang.qblzs.com.cn">贵阳</a></li>
            </ul>
        </div>
        <!-- 城市分区 end -->
        <i class="nav-icon"></i>
    </header>

    <section class="banner product-banner">
        <img src="/mobile/static/images/banner02.jpg">
    </section>
    <!-- banner区 end -->
    <!-- 获取装修报价 begin -->
    <section class="product-form">
       <p class="title">
           今日已有
           <font><i>2</i></font>
           <font><i>5</i></font>
           <font><i>6</i></font>户用户获取装修报价
       </p>
       <form id="product-form1" class="form-top all-form" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
            <input type=hidden name=ecmsfrom value="/mobile/product/index.html"> 
            <input name='enews' type='hidden' value='AddFeedback'>
            <input name='title' type='hidden' value='整装产品头部'> 
            <input type=hidden name=bid value=1> 
            <input type=hidden name=laiyuan id=laiyuan>                   
            <input type=hidden name=chuangyi id=chuangyi>
            <!-- 有效表单 begin -->
            <label style="margin-left:0" class="all-mj"><input type="text" name="mianji" id="area" class="area" placeholder="请输入您的房屋面积"><i>㎡</i></label>
             
            <label>
                <p class="p-select">
                    <select name="weishengjian">
                        <option value="1个卫生间">1个卫生间</option>
                        <option value="2个卫生间">2个卫生间</option>
                        <option value="3个卫生间">3个卫生间</option>
                    </select>
                    <span>
                        <img src="/mobile/static/images/ic1.png"/>
                    </span>
                </p>
                <p class="p-select">
                    <select name="yangtai">
                        <option value="1个阳台">1个阳台</option>
                        <option value="2个阳台">2个阳台</option>
                        <option value="3个阳台">3个阳台</option>
                    </select>
                    <span>
                        <img src="/mobile/static/images/ic1.png"/>
                    </span>
                </p>
            </label>
            
            <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
            <input type="submit" value="0元抢看未来的家" class="sub-btn">
        </form>
    </section>
    <!-- 获取装修报价 end -->
     
    <!--预约成功-->
    <section class="reservations">
        <i class="fl">
            <img src="/mobile/static/images/s14.png" />
        </i>
        <div class="swiper-container swiper-no-swiping" id="product-yy"  >
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <span class="">2分钟前</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">15分钟前</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">10分钟</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">5分钟前</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">2分钟前</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">15分钟前</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">10分钟</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
                <div class="swiper-slide">
                    <span class="">5分钟前</span>
                    <span class="">119㎡</span>
                    <span class="">159****1266</span>
                </div>
            </div>
        </div>
        
    </section>
    <!--预约成功 end-->
    
    <!--量房3部曲-->
    <section class="amoun-room">
        <ul>
           
            <li>
                <img src="/mobile/static/images/s11.png"/>
                <p>
                    <h5>1</h5>
                    <font>在线预约</font>
                    <font>免费设计</font>
                </p>
            </li>
           
            <li>
                <img src="/mobile/static/images/s12.png"/>
                <p>
                    <h5>2</h5>
                    <font>上门测量</font>
                    <font>沟通需求</font>
                </p>
            </li>
            <li>
                <img src="/mobile/static/images/s13.png"/>
                <p>
                    <h5>3</h5>
                    <font>720°全景</font>
                    <font>免费出图</font>
                </p>
            </li>
            <div style="clear:both"></div>
            <span class="sp1"></span>
            <span class="sp2"></span>
        </ul>
    </section>
    <!--量房3部曲 end-->
    
    <!-- 整装定制 begin -->
    <section class="zhengz-pro">
            <div id="show">
                <h2>全屋定制品质整装</h2>
                <p class="title-sm">实现所见即所得的装修效果</p>
            </div>
            <div id="list-index">
                <ul class="list1">
                    <li class="cur">客厅</li>
                    <li>餐厅</li>
                    <li>阳台</li>
                    <li>卧室</li>
                    <li>厨房</li>
                    <li>卫生间</li>
                </ul>
                <div class="div-all">
                    <div class="img1">
                        <img  src="/mobile/static/images/k1.jpg" alt="">
                    </div>
                    <div class="img1">
                        <img  src="/mobile/static/images/k8.jpg" alt="">
                    </div>
                    <div class="img1">
                        <img  src="/mobile/static/images/k6.jpg" alt="">
                    </div>
                    <div class="img1">
                        <img  src="/mobile/static/images/k3.jpg" alt="">
                    </div>
                    <div class="img1">
                        <img  src="/mobile/static/images/k4.jpg" alt="">
                    </div>
                    <div class="img1">
                        <img  src="/mobile/static/images/k5.jpg" alt="">
                    </div>
                </div>	
            </div>
        </section>
    <!-- 五星整装 begin -->
    <section class="wx-equipped">
        <h2>五星整装</h2>
        <p class="title-sm">千百炼什么都有，就是没有后顾之忧</p>
        <ul class="serve-menu">
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s3.png" alt=""><br/>
                    包设计
                </span>
                <span class="serve-norm">全屋定制<br>个性设计</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s2.png" alt=""><br/>
                    包材料
                </span>
                <span class="serve-norm">全球采集<br>厂家直供</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s4.png" alt=""><br/>
                    包人工
                </span>
                <span class="serve-norm">专人专项<br>标准服务</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s8.png" alt=""><br/>
                    包水电
                </span>
                <span class="serve-norm">固定点位<br>水电全包</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s7.png" alt=""><br/>
                    包灯具
                </span>
                <span class="serve-norm">智享奢雅<br>多不胜数</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s1.png" alt=""><br/>
                    包家具
                </span>
                <span class="serve-norm">定制家居<br>千样人生</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s6.png" alt=""><br/>
                    包家电
                </span>
                <span class="serve-norm">一线品牌<br>免费安装</span>
            </li>
            <li>
                <span class="serve-list">
                    <img src="/mobile/static/images/s5.png" alt=""><br/>
                    包售后
                </span>
                <span class="serve-norm">平安保险<br>全程护航</span>
            </li>
        </ul>
    </section>
    <!-- 施工工期 begin -->
    <section class="duration">
        <h2>从毛坯到精装，只需75天</h2>
        <p class="title-sm">千百炼什么都有，就是没有后顾之忧</p>
        <ul class="dt-plan">
            <li class="bz-li cur">前期施工</li>
            <li class="dt-line"></li>
            <li class="bz-li">中期施工</li>
            <li class="dt-line"></li>
            <li class="bz-li">后期验收</li>
        </ul>
        <div class="dt-flow">
            <div class="dt-box dt-box1">
                <ul class="dt-left">
                    <li class="dt-lt">第1天</li>
                    <li class="dt-rt"><div class="triangle-rt"></div>全房拆改</li>
                    <li class="dt-lt">第05-10天</li>
                    <li class="dt-rt"><div class="triangle-rt"></div>防水施工</li>
                    <li class="dt-lt">第14-35天</li>
                </ul>
                <div class="dt-center">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                    <span class="dot dot4"></span>
                    <span class="dot dot5"></span>
                    <i class="center-line"></i>
                </div>
                <ul class="dt-right" >
                    <li class="dt-rt"><div class="triangle-lt"></div>首次交底</li>
                    <li class="dt-lt">第02-04天</li>
                    <li class="dt-rt"><div class="triangle-lt"></div>水电施工</li>
                    <li class="dt-lt">第11-13天</li>
                    <li class="dt-rt"><div class="triangle-lt"></div>泥木施工</li>
                </ul>
            </div>
            <div class="dt-box dt-box2">
                 <ul class="dt-left">
                    <li class="dt-lt">第36-37天</li>
                    <li class="dt-rt"><div class="triangle-rt"></div>油漆施工</li>
                    <li class="dt-lt">第49-65天</li>
                    <li class="dt-rt"><div class="triangle-rt"></div>保洁</li>
                    <li class="dt-lt">第68天</li>
                </ul>
                <div class="dt-center">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                    <span class="dot dot4"></span>
                    <span class="dot dot5"></span>
                    <i class="center-line"></i>
                </div>
                <ul class="dt-right" >
                    <li class="dt-rt"><div class="triangle-lt"></div>中期交款</li>
                    <li class="dt-lt">第38-48天</li>
                    <li class="dt-rt"><div class="triangle-lt"></div>成品安装</li>
                    <li class="dt-lt">第66-67天</li>
                    <li class="dt-rt"><div class="triangle-lt"></div>自检验收</li>
                </ul>
            </div>
            <div class="dt-box dt-box3"   >
                <ul class="dt-left">
                    <li class="dt-lt">第69天</li>
                    <li class="dt-rt"><div class="triangle-rt"></div>家具工程</li>
                    <li class="dt-lt">第73-74天</li>
                    <li class="dt-rt"><div class="triangle-rt"></div>办理竣工</li>
                </ul>
                <div class="dt-center">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                    <span class="dot dot4"></span>
                    <i class="center-line3"></i>
                </div>
                <ul class="dt-right">
                    <li class="dt-rt"><div class="triangle-lt"></div>竣工验收</li>
                    <li class="dt-lt" >第70-72天</li>
                    <li class="dt-rt"><div class="triangle-lt"></div>家电工程</li>
                    <li class="dt-lt" >第75天</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- 施工工期 end -->

    <!--服务保障-->
    <section class="guarantee">
        <h2>服务保障</h2>
        <p class="title-sm">千百炼什么都有，就是没有后顾之忧</p>
        <div class="swiper-container" id="product-guar">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sl7.jpg" />
                    <div class="text">
                        <h3>0 1</h3>
                        <h3>专业展示</h3>
                        <p>所有展示均实行分类、分套、实景展示</p>
                        <p>让客户亲身体验不同效果，让客户选择产品更方便、更直观</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sl8.png" />
                    <div class="text">
                        <h3>0 2</h3>
                        <h3>专业审核</h3>
                        <p>审查所有配套产品质量，工厂信誉</p>
                        <p>工厂服务质量，为客户严格把关</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sl9.jpg" />
                    <div class="text">
                        <h3>0 3</h3>
                        <h3>统一采购</h3>
                        <p>所有配套产品均实施统一采购，品类</p>
                        <p>保障，为客户想的更多</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sl10.png" />
                    <div class="text">
                        <h3>0 4</h3>
                        <h3>统一售后</h3>
                        <p>所有配套产品，由千百炼装饰实行统一售后协调</p>
                        <p>为客户装修提供工期保障，同时还免去了客户的后顾之忧</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sl12.png" />
                    <div class="text">
                        <h3>0 5</h3>
                        <h3>统一管理</h3>
                        <p>对配套产品的搭配、展示均实行统一管理</p>
                        <p>极大化满足客户需求，为顾客做的更好</p>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--服务保障end-->

    <!--12大德系工艺-->
    <section class="process">
        <h2>12大德系工艺</h2>
        <p class="title-sm">德标工程，环保承诺，打造高品质整装服务</p>
        <div class="swiper-container" id="product-process">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf1.jpg"/>
                    <p>墙面防潮抗霉工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf2.jpg"/>
                    <p>墙体基层生态墙衬处理工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf3.jpg"/>
                    <p>德国WAGO接线端子</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf4.jpg"/>
                    <p>石膏板吊顶转角L型工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf5.jpg"/>
                    <p>轻钢龙骨施工工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf6.jpg"/>
                    <p>阴阳角护角工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf7.jpg"/>
                    <p>地漏“砖套砖”工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf8.jpg"/>
                    <p>防水工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf10.jpg"/>
                    <p>镜前灯“鹰嘴”工艺</p>
                </div>   
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf11.jpg"/>
                    <p>厨卫门套“套压石”工艺</p>
                </div>  
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf12.jpg"/>
                    <p>管道热熔连接工艺</p>
                </div>
                <div class="swiper-slide">
                    <img src="/mobile/static/images/sf13.jpg"/>
                    <p>地面固化防尘工艺</p>
                </div>     
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--12大德系工艺-->

    <!-- 全球采集 begin -->
    <section class="global">
        <h2>全球集采</h2>
        <p class="title-sm">1000：1的选材比，精选全球大牌尖货</p>
        <ul class="brand">
            <li><img src="/mobile/static/images/glb01.jpg" alt=""></li>
            <li><img src="/mobile/static/images/glb02.png" alt=""></li>
            <li><img src="/mobile/static/images/glb03.png" alt=""></li>
            <li><img src="/mobile/static/images/glb04.png" alt=""></li>
            <li><img src="/mobile/static/images/glb05.png" alt=""></li>
            <li><img src="/mobile/static/images/glb06.png" alt=""></li>
            <li><img src="/mobile/static/images/glb07.png" alt=""></li>
            <li><img src="/mobile/static/images/glb08.png" alt=""></li>
        </ul>
        <div class="fa">
            <img src="/mobile/static/images/fa.png" alt="">
        </div>
        <form id="product-form2"  class="form-center all-form" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
            <input type=hidden name=ecmsfrom value="/mobile/product/index.html"> 
            <input name='enews' type='hidden' value='AddFeedback'>
            <input name='title' type='hidden' value='整装产品底部'> 
            <input type=hidden name=bid value=1> 
            <input type=hidden name=laiyuan id=laiyuan>                   
            <input type=hidden name=chuangyi id=chuangyi>
            <!-- 有效表单 begin -->
            <input type="text" name="name" id="nickname" class="nickname" placeholder="请输入您的称呼">
            <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
            <label class="all-mj"><input type="tel" name="mianji" id="area" class="area" placeholder="请输入您的房屋面积"><i>㎡</i></label>
           
            <input type="submit" value="立即抢0元报价" class="sub-btn">
        </form>
        <ul class="ticket">
                <li class="sjbtn">
                    <div class="quan-box">
                        <p class="q-price">500</p>
                        <p class="q-unit">￥</p>
                        <p class="q-line"></p>
                        <p class="q-rule">定金满5000可用</p>
                        <p class="q-type">设计券</p>
                        <p class="q-btn">立即领取</p>
                        <p class="q-num">已领<strong class="nums">51</strong>张</p>
                    </div>
                </li>
                <li class="lfbtn">
                    <div class="quan-box">
                            <p class="q-price">800</p>
                            <p class="q-unit">￥</p>
                            <p class="q-line"></p>
                            <p class="q-rule">活动期间可用</p>
                            <p class="q-type">量房券</p>
                            <p class="q-btn">立即领取</p>
                            <p class="q-num">已领<strong class="nums">189</strong>张</p>
                        </div>
                </li>
            </ul>
            
            <div class="quan-form sj-quan">
                <form id="product-q1" class="form-center" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
                    <p class="yhq-title">设计优惠券</p>
                    <img src="/mobile/static/images/close.png" alt="" class="close">
                    <input type=hidden name=ecmsfrom value="/mobile/product/index.html"> 
                    <input name='enews' type='hidden' value='AddFeedback'>
                    <input name='title' type='hidden' value='设计劵500元'> 
                    <input type=hidden name=bid value=1> 
                    <input type=hidden name=laiyuan id=laiyuan>                   
                    <input type=hidden name=chuangyi id=chuangyi>
                    <!-- 有效表单 begin -->
                    <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
                    <input type="submit" value="立即领取优惠券" class="quan-btn">
                </form>
            </div>
            <div class="quan-form lf-quan">
                <form id="product-q2" class="form-center" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
                    <p class="yhq-title">量房优惠券</p>
                    <img src="/mobile/static/images/close.png" alt="" class="close">
                    <input type=hidden name=ecmsfrom value="/mobile/product/index.html"> 
                    <input name='enews' type='hidden' value='AddFeedback'>
                    <input name='title' type='hidden' value='量房券800元'> 
                    <input type=hidden name=bid value=1> 
                    <input type=hidden name=laiyuan id=laiyuan>                   
                    <input type=hidden name=chuangyi id=chuangyi>
                    <!-- 有效表单 begin -->
                    <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
                    <input type="submit" value="立即领取优惠券" class="quan-btn">
                </form>
            </div>
    </section>
    <!-- 底部变量模板 -->
        <section class="quote-price">
        <a href="tel:400-029-1986" class="zx">免费咨询</a><a href="/mobile/quote/index.html" class="bj">快速报价</a>
    </section>
    <!-- 底部 begin -->
    <footer>
        <h3>装修不到千百炼   要花不少冤枉钱</h3>
        <p>千百炼@Copyright版权所有</p>
        <p>陕ICP备17003733号</p>
    </footer>

    <script src="/mobile/static/js/jquery-1.8.3.min.js"></script>
    <script src="/mobile/static/js/swiper-3.4.2.min.js"></script>
    <script src="/mobile/static/js/common.js"></script>
    <script src="/mobile/static/js/index.js"></script>
    <script>
        if (window.devicePixelRatio && devicePixelRatio >= 2) {
            document.querySelector('body').classList.add('hairlines')
        }
    </script>
	<!-- 来源_分析 -->
	    <script>  
        function getUrlParms(name){  
            var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");  
            var r = window.location.search.substr(1).match(reg);  
            if(r!=null)  
                return unescape(r[2]);  
                return null;  
        }  
        document.getElementById("laiyuan").value=getUrlParms("laiyuan");  
        document.getElementById("chuangyi").value=getUrlParms("chuangyi");  
    </script>  
	<!-- 获取号码 -->
	[!--temp.zhuaqu--]
	<!-- 统计_客服 -->
       <!--53客服-->
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10151974/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
   <!--站长统计-->
   <script src="https://s13.cnzz.com/z_stat.php?id=1273005258&web_id=1273005258" language="JavaScript"></script>
   <!--百度统计-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?2cb05ffa737ee9115d5021bdd41be3f1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script> 
</body>
</html>