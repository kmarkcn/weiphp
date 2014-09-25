<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0071)http://wapshop.wugehuozhan.com:93/invitation?anchor=slide_first#slide_4 -->
<html class="no-js ui-viewport-640" lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="utf-8">
    <meta name="keywords" content="果果哒">
    <meta name="description" content="果果哒">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="cleartype" content="on">
    <title>果果健康问卷调查</title>
	<script>
        var _global = {};
	</script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <!--
    <meta name="viewport" content=" user-scalable=no, target-densitydpi=device-dpi">

    <meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
   -->
    <link href='http://www.youziku.com/webfont/CSS/f910eec20b9247d44309c04a4311056b' rel='stylesheet' type='text/css'/>
	<link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary/bootstrap1.css" rel="stylesheet">
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary/2222.css" rel="stylesheet">
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary/1111.css" rel="stylesheet"> 
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/phone/phone-public.css" rel="stylesheet">	
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/public.css" rel="stylesheet">
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary.css" rel="stylesheet">
</head>

<body>

<div class="container ">
    <div class="content js-mini-height">
        <div class="content-body">
            <div class="ui-loading" id="js-loading" style="display: none;">
                <div class="loading-animate"></div>
            </div>
            <div class="tpl-scroll js-tpl-scroll-container" style="background-image:url(undefined);-webkit-background-size: initial;-moz-background-size: initial;background-size: initial; background-color: #fff; visibility: visible;">
                <div class="swiper-container js-tpl-scroll" data-loop="false">
                    <div class="swiper-wrapper">
                    	<!--以下为主要内容-->

                        <?php if(is_array($ques)): $i = 0; $__LIST__ = $ques;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                           <div class="q-content">
                                <h1 class="q-h1"><?php echo ($vo["title"]); ?></h1>
                                <ul class="q-ul">
                                	<?php if(is_array($vo["gogoda"])): $i = 0; $__LIST__ = $vo["gogoda"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$an): $mod = ($i % 2 );++$i;?><li class="q-li-03" ggscore=<?php echo ($an["ggscore"]); ?>><span><?php echo ($an["gganswer"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>	
                               	</ul>
                        	</div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <input class="q_val" type="hidden" >

                        <!--以上为主要内容-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="js-fuck-taobao" class="fullscreen-guide fuck-taobao hide">
        <span class="js-close-taobao guide-close">×</span>
        <span class="guide-arrow"></span>
        <div class="guide-inner">
            <div class="step step-1"></div>
            <div class="js-step-2 step"></div>
        </div>
    </div>
</div>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/questionary/jquery-2.0.3.min.js" onerror="_cdnFallback(this)"></script>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/questionary/idangerous.swiper.2.6.1.min.js" onerror="_cdnFallback(this)"></script>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/jquery.cookie.js"></script>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/questionary/scroll_99ac61944f.js" onerror="_cdnFallback(this)"></script>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/questionary.js"></script>
<script>
//定义头部，时间轴，底部。
var varswiper_slide =  $('.swiper-slide'),
p_head = $('<div class="q-top"><img class="q-top-img" src="<?php echo ADDON_PUBLIC_PATH;?>/img/questionary/questionary_01.png"><a href="#"><img class="q-top-return" src="<?php echo ADDON_PUBLIC_PATH;?>/img/questionary/questionary_04.png"></a></div>')
p_time = $('<div class="q-time"><p>总题数</p><div class="q-time-top"></div><div class="q-time-body"></div><div class="q-time-bottom"></div></div>'),
p_foot = $('<div class="q-foot"><img class="q-foot-img" src="<?php echo ADDON_PUBLIC_PATH;?>/img/questionary/questionary_02.png"></div>');
varswiper_slide.children('.q-content').before(p_head);
varswiper_slide.append(p_time).append(p_foot);
</script>
</body></html>