// JavaScript Document



$(function(){
/*
	//平台、设备和操作系统
	var system ={
		win : false,
		mac : false,
		xll : false
	};
	//检测平台
	var p = navigator.platform;
	system.win = p.indexOf("Win") == 0;
	system.mac = p.indexOf("Mac") == 0;
	system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
    //跳转语句
	if(system.win||system.mac||system.xll){

		alert("PC访问请使用微信登陆");
		//$('html').remove();

	}else{
		alert("非PC访问");
	}
*/





	$('.q-ul li').click(function(){
		var div = $('<div class="q-li-bg"></div>'),
			width = $('.swiper-slide').width() * 0.2,
			height = width * 1.26;
		//$(this).parent().addClass('q-li-bg').siblings('li').removeClass('q-li-bg');
		$(this).append(div).siblings().children('.q-li-bg').remove();
		$('.q-li-bg').css({
			'width':width,
			'height':height,
			'margin':'-'+ height/2 + 'px -' + width/2 + 'px'
		});
		//$(this).parent().sibling().children('.q-li-bg').remove();

	})
	

	 //遍历题数，显示进度条，进度条的显示基于CSS3。
	$('.swiper-slide').each(function(){
		var index = $(this).index(),								//遍历元素的索引
			number = 12,											    //总题数
																	//获取进度条中间的百分比
			percent = (1 - index / (number - 2)) * 100 +'%',
			color_bg = 'white',										//背景颜色
			color_show = '#d30469',									//填充颜色
			t_top = $(this).find('.q-time-top'),					//进度条顶部
			t_body = $(this).find('.q-time-body'),					//进度条中间
			t_bottom = $(this).find('.q-time-bottom');				//进度条底部

		var z_index = index + 20;                                   //与进度条无关，定义z-index
		$(this).css('z-index',z_index);                             //添加z-index
		//底部永远是有颜色的；
		t_bottom.css('background-color',color_show);
		if(index==0)                                                //第一题
		{

			t_top.css('background-color',color_bg);
			t_body.css('background-color',color_bg);

		}
		if(0 < index && index < number-1)                           //中间
		{
			
			//基于CSS3的渐变达到效果
			t_top.css('background-color',color_bg);
			t_body.css({
						//这里存在一个问题： CSS3要写多套兼容浏览器，但是这里只能读取最后一套的效果
						'background': '-moz-linear-gradient(top, white 0, white '+ percent +','+ color_show +' ' + percent + ', '+ color_show +' 100%)',
						'background': '-webkit-gradient(linear, 0 0, 0 100%,color-stop(0,white),color-stop('+ percent +',white),color-stop('+ percent +','+ color_show +'),color-stop(100%,'+ color_show +'))'
				//'background':'-webkit-gradient(linear, 0 0, 100% 0,color-stop(0,white),color-stop(45%,white),color-stop(45%,red),color-stop(55%,red),color-stop(55%,white),color-stop(100%,white))'
			});
		}
		if(index == number-1)                                       //最后一题
		{
			t_top.css('background-color',color_show);
			t_body.css('background-color',color_show);
		}

	})

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
				//alert('您为寒性体质');
			}
			if(-5<scores&&scores<5)                                   //平和体质
			{
				$('.q_val').val(1);
				//alert('您为平和体质');
			}
			if(scores>5)                                    //阳性体质
			{
				$('.q_val').val(2);
				//alert('您为阳性体质');
			}
			var p_scores = 'p_scores';                       //定义一个变量，给它赋值；赋的值没有限制，但一定要有值；
			$.cookie('p_scores',p_scores);                   //存储cookie名字
			//alert($.cookie("p_scores"));                   //弹出结果  curious------取得该cookie的name
			//alert($.cookie(p_scores));                     //这个，得到的是 null
			$.cookie(p_scores,$(".q_val").val());            //存储cookie数据
			window.location="http://www.kmark.cn/weiphp/index.php?s=/addon/Survey/Survey/physique.html";                 //跳转页面
		}			
		else                                                 //为完成答题
		{
			var number = index - arr_count.length;			 //得到未作答的题数
			alert('亲，您还有 '+number+' 道题未作答，请完善！');
		}
		
		
		
	}


	//最后一题添加判断事件
	$('.swiper-slide').last().find('li').click(function(){
		gg_count();
		$(this).removeClass('move_down');
	})


	//点击下滑
	$('.q-ul').children().addClass('move_down');
	$('.swiper-slide').last().find('li').removeClass('move_down');
	$('.move_down').click(function(){
		var s_height = $('.swiper-slide').height(),
			father = $(this).parents('.swiper-slide'),
			index_02 = father.index() + 1 ,
			move_height = index_02 * s_height;

		father.parent().css({
								'transform':'translate3d(0px, -' + move_height + 'px, 0px)',
							    '-webkit-transform':'translate3d(0px, -' + move_height + 'px, 0px)',
								'transition-duration':'.8s'
	    });

		/*
		$('.swiper-slide').each(function(){
			var index_02 = $(this).index() + 1,
				move_height = index_02 * s_height;

			$(this).parent().css();
			alert(index_02)
		})
		*/

	});


})