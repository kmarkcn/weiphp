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
    <title>果果哒体质测试</title>
	<script>
        var _global = {};
	</script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <!--
    <meta name="viewport" content=" user-scalable=no, target-densitydpi=device-dpi">

    <meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
   -->
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary/bootstrap1.css" rel="stylesheet">
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary/2222.css" rel="stylesheet">
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary/1111.css" rel="stylesheet"> 
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/phone/phone-public.css" rel="stylesheet">	
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/public.css" rel="stylesheet">
    <link href="<?php echo ADDON_PUBLIC_PATH;?>/css/questionary.css" rel="stylesheet">
	<!--
    <link href='http://www.youziku.com/webfont/CSS/f910eec20b9247d44309c04a4311056b' rel='stylesheet' type='text/css'/>
	-->
    
    <link href='http://www.youziku.com/webfont/CSS/fb07cbad8d8f0ac0d6f29d4ea5398529' rel='stylesheet' type='text/css'/>
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
                    <!--时间轴-->
                    <style type="text/css">
                        .q-time{ z-index: 50;}
                        .q-time-body{ z-index: 55;}

                    </style>

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
//首先判断答题是否完成，再通过结果弹出
function gg_count(){
	var arr_count = new Array(),                        //申明一个新数组
		index = $('.swiper-slide').length;				//获取总题数
	$('.q-ul').children('li').has('.q-li-bg').each(function(){          //判断存在条件并遍历值
		//判断取值
		//$(this).has('.q-li-bg');
		arr_count.push($(this).attr('ggscore'));        //将值添加到数组
	});

	if(arr_count.length == index)						//完成答题
	{
		var scores = 0;                                 //申明一个值为0的参数
		for(var i=0 ; i<arr_count.length;i++){          //循环取到数组值
			scores += parseInt(arr_count[i]);           //将数组值转化为整数，并取得总和
		}
		//判断体质类型
		if(scores<-5)									//寒性体质
		{
			$('.q_val').val(0);
		}
		if(-5<=scores&&scores<=5)                         //平和体质
		{
			$('.q_val').val(1);
		}
		if(scores>5)                                    //阳性体质
		{
			$('.q_val').val(2);
		}
		var p_scores = 'p_scores';                       //定义一个变量，给它赋值；赋的值没有限制，但一定要有值；
		$.cookie('p_scores',p_scores);                   //存储cookie名字
		//alert($.cookie("p_scores"));                   //弹出结果  curious------取得该cookie的name
		//alert($.cookie(p_scores));                     //这个，得到的是 null
		$.cookie(p_scores,$(".q_val").val());            //存储cookie数据
		function gogogo(){ 
			//构造超链接访问方法
			var gg_user = $.cookie('gg_user');
			var gg_phone = $.cookie('gg_phone');
			var gg_score = $.cookie('p_scores');
			window.location="index.php?s=addon/Physique/Physique/member/gg_user/"+gg_user+"/gg_phone/"+gg_phone+"/gg_score/"+gg_score;
		}
		setTimeout(gogogo,1000);   //延迟一秒跳转页面
	}
	else                                                 //为完成答题
	{
		var number = index - arr_count.length,			 //得到未作答的题数
			q_father = $('.swiper-wrapper');

		q_father.children('.swiper-slide').css({         //重置框架的其他元素位置
			'transform':'translate3d(0px, 0px, 0px)',
			'-webkit-transform':'translate3d(0px, -0px, 0px)',
			'transition-duration':'.8s'
		});
		
		$('.swiper-slide').addClass('q_select');        //答题页面添加标记类
		//答题后的页面移除标记类
		$('.q-ul').children('li').has('.q-li-bg').parents('.swiper-slide').removeClass('q_select');
		var q_number = new Array();
		q_father.children('.q_select').each(function(){ //遍历没有答题的页面
			q_number.push($(this).index());             //将没答题的页面index传入数组

		});
		var q_height = $('.swiper-slide').height() * q_number[0];  //定义并获取验证答题页面高度，通过每次查找数组的第一位

		//alert(q_number[0]);
		q_father.css({
			'transform':'translate3d(0px, -' + q_height + 'px, 0px)',
			'-webkit-transform':'translate3d(0px, -' + q_height + 'px, 0px)',
			'transition-duration':'.8s'
		});
	}
}
</script>
</body></html>