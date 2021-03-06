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
	<title>千百炼装饰-首页</title>
    <meta content="西安装修公司排名,西安装修公司,西安十大装修公司,西安品牌装修公司,西安家庭装修,西安室内装修,西安装饰公司,西安装修公司哪家好,西安千百炼装饰公司,西安千百炼装修公司,西安千百炼装饰,千百炼装修,千百炼装饰" name="keywords">
    <meta content="千百炼家装集团，是一家专注于整体家装服务的集团化公司，旨在为业主提供家装一站服务的完美解决方案。装修热线：400-029-1986" name="description">
    <script src="/mobile/static/js/flexible.js"></script>
    <link rel="stylesheet" href="/mobile/static/css/common.css">
    <link rel="stylesheet" href="/mobile/static/css/swiper-3.4.2.min.css">
    <link rel="stylesheet" href="/mobile/static/css/style.css">
</head>
<body ontouchstart>
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
    <!-- banner区 begin -->
    <section class="banner">
        <div class="swiper-container" id="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/mobile/activity/index.html">
                        <img src="/mobile/static/images/ban04.png" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/mobile/product/index.html">
                        <img src="/mobile/static/images/ban01.gif" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/mobile/quote/index.html">
                        <img src="/mobile/static/images/ban02.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/mobile/design/index.html">
                        <img src="/mobile/static/images/ban03.gif" alt="">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- banner区 end -->
    <!-- 抢3000优惠券 begin -->
    <section class="coupon">
        <h3 class="cp-title"> 
            <span></span>抢<i>3000元</i>装修优惠券
        </h3>
        <form id="old-phone1" class="form-top" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
            <input type=hidden name=ecmsfrom value="/mobile/index.html"> 
            <input name='enews' type='hidden' value='AddFeedback'>
            <input name='title' type='hidden' value='首页上部表单'> 
            <input type=hidden name=bid value=1> 
            <input type=hidden name=laiyuan id=laiyuan>                   
            <input type=hidden name=chuangyi id=chuangyi>
            <!-- 有效表单 begin -->
            <input type="tel" name="mycall" id="phone" class="phone phone-top tel" placeholder="请输入您的手机号码">
            <input type="submit" value="发送到手机" class="send-btn">
        </form>
    </section>
    <!-- 抢3000优惠券 end -->
    <!-- 导航区 begin -->
    <nav class="swiper-container3 navbox">
        <div class="swiper-wrapper">
          <div class="swiper-slide nav-show">
                <a href="/mobile/design/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon06.png')"></span>
                    量房设计
                </a>
                <i class="hot">火热</i>
          </div>
          <div class="swiper-slide nav-show">
                <a href="/mobile/product/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon02.png')"></span>
                  整装产品
                </a>
          </div>
          <div class="swiper-slide nav-show">
                <a href="/mobile/loans/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon03.png')"></span>
                    装修贷款
                </a>
               
          </div>
          <div class="swiper-slide nav-show">
                <a href="/mobile/quote/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon04.png')"></span>
                    装修报价
                </a>
          </div>
          <div class="swiper-slide nav-show">
                <a href="/mobile/activity/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon05.png')"></span>
                    最新优惠
                </a>
          </div>
          <div class="swiper-slide nav-show">
                <a href="/mobile/drops/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon07.png')"></span>
                    滴滴接驾
                </a>
          </div>
          <div class="swiper-slide nav-show">
                <a href="tel:400-029-1986">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon09.png')"></span>
                    电话咨询
                </a>
          </div>
          <div class="swiper-slide nav-show">
                <a href="/mobile/stores_nav/index.html">
                    <span class="nav_tu" style="background-image:url('/mobile/static/images/navicon08.png')"></span>
                    门店导航
                </a>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination nav-dot"></div>
    </nav>
    <!-- 导航区 end -->
    <!-- VR展示 begin -->
    <section class="vr-show">
        <h2>720VR全景展示</h2>
        <p class="title-sm">未来的家，未来的期许，都在这里</p>
        <!--<video poster="/mobile/static/images/c2.png"  controls>
            <source src="/mobile/static/images/video.mp4" type="video/mp4">	
        </video> -->
        <a href="javascript:;"><img src="/mobile/static/images/c2.png" style="width:100%"></a>
        <form id="ceshi1" class="form-center all-form" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
            <input type=hidden name=ecmsfrom value="/mobile/index.html"> 
            <input name='enews' type='hidden' value='AddFeedback'>
            <input name='title' type='hidden' value='首页中部表单'> 
            <input type=hidden name=bid value=1> 
            <input type=hidden name=laiyuan id=laiyuan>                   
            <input type=hidden name=chuangyi id=chuangyi>
            <!-- 有效表单 begin -->
            <input type="text" name="name" id="nickname" class="nickname" placeholder="请输入您的称呼">
            <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
            <label class="all-mj"><input type="text" name="mianji" id="area" class="area" placeholder="请输入您的房屋面积"><i>㎡</i></label>
            <input type="submit" value="0元抢看未来的家" class="sub-btn" id="index-center-form">
        </form>
    </section>
    <!-- VR展示 end -->
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
        <form id="index-form2" class="form-center all-form" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
            <input type=hidden name=ecmsfrom value="/mobile/index.html"> 
            <input name='enews' type='hidden' value='AddFeedback'>
            <input name='title' type='hidden' value='首页底部表单'> 
            <input type=hidden name=bid value=1> 
            <input type=hidden name=laiyuan id=laiyuan>                   
            <input type=hidden name=chuangyi id=chuangyi>
            <!-- 有效表单 begin -->
            <input type="text" name="name" id="nickname" class="nickname" placeholder="请输入您的称呼">
            <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
            <label class="all-mj"><input type="text" name="mianji" id="area" class="area" placeholder="请输入您的房屋面积"><i>㎡</i></label>
            
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
            <form id="old-phone2" class="form-center" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
                <p class="yhq-title">设计优惠券</p>
                <img src="/mobile/static/images/close.png" alt="" class="close">
                <input type=hidden name=ecmsfrom value="/mobile/index.html"> 
                <input name='enews' type='hidden' value='AddFeedback'>
                <input name='title' type='hidden' value='首页设计500元优惠券表单'> 
                <input type=hidden name=bid value=1> 
                <input type=hidden name=laiyuan id=laiyuan>                   
                <input type=hidden name=chuangyi id=chuangyi>
                <!-- 有效表单 begin -->
                <input type="tel" name="mycall" id="tel" class="tel" placeholder="请输入您的手机号码">
                <input type="submit" value="立即领取优惠券" class="quan-btn">
            </form>
        </div>
        <div class="quan-form lf-quan">
            <form id="old-phone3" class="form-center" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
                <p class="yhq-title">量房优惠券</p>
                <img src="/mobile/static/images/close.png" alt="" class="close">
                <input type=hidden name=ecmsfrom value="/mobile/index.html"> 
                <input name='enews' type='hidden' value='AddFeedback'>
                <input name='title' type='hidden' value='首页量房800元优惠券表单'> 
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