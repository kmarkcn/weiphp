/**
 * Created by Administrator on 14-9-15.
 */
//日期插件的调用
J(function(){
	J('#cal1').calendar({ format:'yyyy年MM月dd日' });
	J('#cal2').calendar({ format:'yyyy年MM月dd日' });
	J('#cal3').calendar({ format:'yyyy年MM月dd日' });
	J('#cal4').calendar({ format:'yyyy年MM月dd日' });
});

$(function(){
	//点击切换体质，信息，充值
	$('.mc_middle_li').click(function(){
		var index = $(this).index() + 1;
		$(this).removeClass('mc_li_shadow').addClass('mc_li_inset').siblings().removeClass('mc_li_inset').addClass('mc_li_shadow');
		$('.mc_foot').children()
					 .eq(index)
					 .show()
			         .siblings()
					 .hide();
	})

	//体质传值
	$('.mc_02_val').val($.cookie('p_scores'));
	
	
	var	p_val = parseInt($('.mc_02_val').val()),
		p_color = $('.mc_02_color'),
		p_p1 = $('.mc_02_p1'),
		p_p2 = $('.mc_02_p2'),
		p_one = '寒性',
		p_two = '平和',
		p_three = '热性',
		p_content_01 = '“寒体质”的人，产热能量较低，副交感神经兴奋，代谢率下降较快，由于体内产热量减少，怕冷，所以四肢较冷，容易乏力，天冷时发冷情况比较严重。脸色比一般人苍白，喜欢喝热饮，性格安静、温和。',
		p_content_02 = '[健康忠告]寒性体质的人体内阴气过盛，应当重点补阳气。中医认为肾主一身的阳气，脾主吸收营养，化生气血，是能量的源泉。所以改善体质应重点调补脾肾。多食用热量密度高、糖分高的温热性水果。这类水果可大量增加身体能量，达到温暖身体、活化身体生理机能的效果。',
		p_content_03 = '平和体质是一种以体态适中、面色红润、精力充沛、脏腑功能状态强健壮实为主要特征的一种体质状态。女性，年龄越大，平和体质的人越少。成因是先天的遗传条件良好，后天的饮食起居生活习惯适宜，即后天调养得当。',
		p_content_04 = '[健康忠告]平和体质者，平衡饮食是关键。应少吃高脂厚味及辛辣上火之物，多吃新鲜蔬菜瓜果。可根据自己的口味偏好，搭配选择寒、热性水果，以充分保证身体内营养的平衡。',
		p_content_05 = '“热体质”的人产热能量较高，交感神经较兴奋，身体较有热感，脸色红赤，怕热，喜欢喝冷饮，平时好动，心理比较急。如果体内营养物质不足，热性体质的人身体的滋养功能会减退，使身体处于“干燥”状态，出现如虚热、四肢温热、易口渴、头发、皮肤干枯起皱，尿少，便秘、情绪烦躁等特征。',
		p_content_06 = '[健康忠告]应该多补充寒凉性水果，这类水果热量密度低、富含纤维，但脂肪、糖分都很少，可以中和平衡人体内多余的热量，从而起到清凉调节的作用。';

	//添加默认显示平和体质，防止cookie传值错误
	p_color.text(p_two);
	p_p1.text(p_content_03);
	p_p2.text(p_content_04);

	function p_text(){

		switch(p_val)
		{
			case 0:
				p_color.text(p_one);
				p_p1.text(p_content_01);
				p_p2.text(p_content_02);
				break;

			case 1:
				p_color.text(p_two);
				p_p1.text(p_content_03);
				p_p2.text(p_content_04);
				break;

			case 2:
				p_color.text(p_three);
				p_p1.text(p_content_05);
				p_p2.text(p_content_06);
				break;

		}

	}
	p_text();
	var body = $('body');
	var body_height = body.height(),
		body_width = body.width();

	$('.mc_btn_change').click(function(){
		var body_bg = $('<div class="body_bg"></div>');
		body.append(body_bg);
		$('.body_bg').css({
			'position':'absolute',
			'top':'0',
			'left':'0',
			'z-index':'100',
			'width': body_width + 'px',
			'height': body_height + 'px',
			'background-color':'gray',
			'opacity':'0.3'
		});



		//alert(body_height)
		//alert(body_width)
	});


});

