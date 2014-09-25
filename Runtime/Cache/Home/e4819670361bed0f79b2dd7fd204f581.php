<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo ADDON_PUBLIC_PATH;?>/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo ADDON_PUBLIC_PATH;?>/css/public.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo ADDON_PUBLIC_PATH;?>/css/lhgcalendar.css" />
<link href="<?php echo ADDON_PUBLIC_PATH;?>/css/membercenter.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/lhgcore.min.js"> </script>
<script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/lhgcalendar.min.js"> </script>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/public.js" type="text/javascript"></script>
<script src="<?php echo ADDON_PUBLIC_PATH;?>/js/membercenter.js" type="text/javascript"></script>
    <title>会员中心</title>
</head>
<body>
    <div class="mc">
        <!--以下头部-->
        <div class="mc_head">
            <div class="mc_head_top">
                <a href="questionary.html"><img class="mc_top_left left" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_01.png"></a>
                <img class="mc_top_bg"  src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_03.png">
                <a href="#"><img class="mc_top_right right" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_02.png"></a>
            </div>
            <img class="mc_head_bg" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_04.png">
            <img class="mc_user_img" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/user_img.jpg">
            <div class="mc_user_img_bg"></div>
            <img class="mc_head_health" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_05.png">

            <div class="mc_head_left">
                <span><span>10</span>天</span>
                <br>
                已食用
            </div>
            <div class="mc_head_right">
                <span><span>20</span>天</span>
                <br>
                还剩余
            </div>
            <!--
                class="mc_user_man" 表示为男性
                class="mc_user_woman" 表示为女性
            -->
            <div class="mc_user_man">果果哒</div>
        </div>
        <!--以上头部-->
        <div class="mc_middle">
            <ul class="mc_middle_ul">
                <li class="mc_middle_li mc_li_inset">
                    <h1><span class="mc_02_color"></span>体质</h1>
                    您的体质
                </li>
                <li class="mc_middle_li mc_li_shadow">
                    <h1>个人信息</h1>
                    关于您
                </li>
                <li class="mc_middle_li mc_li_shadow">
                    <h1>续费</h1>
                    充值
                </li>


            </ul>
            <div class="clear"></div>
        </div>

        <!--以下底部-->
        <div class="mc_foot">
            <!--默认-->
            <div class="mc_foot_01">
                <div class="mc_foot_head">
                    <img class="mc_foot_img" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_06.png">
                    <h1>历史购买记录</h1>
                </div>
                <div class="mc_foot_list">
                    <ul class="mc_list_ul">
                        <li>
                            <img  src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_07.png">
                            <h2>您于<span>10月25日</span>订购了一个月的果果哒</h2>
                            <p>时间<span>2014年10月26日</span>至<span>2014年11月26日</span></p>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <img src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_08.png">
                            <h2>您于<span>10月25日</span>订购了一个月的果果哒</h2>
                            <p>时间<span>2014年10月26日</span>至<span>2014年11月26日</span></p>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <img src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter_09.png">
                            <h2>您于<span>10月25日</span>订购了一个月的果果哒</h2>
                            <p>时间<span>2014年10月26日</span>至<span>2014年11月26日</span></p>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--体质-->
            <div class="mc_foot_02">
                <input class="mc_02_val" type="hidden">
                <h1 class="mc_02_h1">您的体质为<span class="mc_02_color mc_02_color_01"></span>体质</h1>
                <p class="mc_02_p1"></p>
                <p class="mc_02_p2"></p>
            </div>
            <!--信息-->
            <div class="mc_foot_03">
                <table class="mc_table">
                    <tr>
                        <td class="mc_td_01">昵称：</td>
                        <td class="mc_td_02"><span>果果哒</span></td>
                        <td class="mc_td_03"><img class="mc_btn_change" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter-personal_01.png"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">性别：</td>
                        <td class="mc_td_02"><span>男</span></td>
                        <td class="mc_td_03"><img class="mc_btn_change" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter-personal_01.png"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">邮箱：</td>
                        <td class="mc_td_02"><span class="mc_span_01">648267773@qq.com</span></td>
                        <td class="mc_td_03"><img class="mc_btn_change" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter-personal_01.png"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">电话：</td>
                        <td class="mc_td_02"><span class="mc_span_01">18380419339</span></td>
                        <td class="mc_td_03"><img class="mc_btn_change" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter-personal_01.png"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">地址：</td>
                        <td class="mc_td_02"><span class="mc_span_02">成都高新区益州大道北段布鲁明顿广场B座1025</span></td>
                        <td class="mc_td_03"><img class="mc_btn_change" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter-personal_01.png"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">截止时间：</td>
                        <td class="mc_td_02"><span class="mc_span_01">2014年12月30日</span></td>
                        <td class="mc_td_03"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">购买时间：</td>
                        <td class="mc_td_02"><span class="mc_span_01">2014年10月31日</span></td>
                        <td class="mc_td_03"></td>
                    </tr>
                    <tr>
                        <td class="mc_td_01">剩余时间：</td>
                        <td class="mc_td_02">60天</td>
                        <td class="mc_td_03"></td>
                    </tr>

                </table>
            </div>
            <!--充值-->
            <div class="mc_foot_04">
                <h1 class="mc_04_h1"><span class="mc_04_num">199</span>元</h1>
                
                <p class="mc_04_p1">
                    开始时间：
                    <input id="cal1" type="text" value="2014年9月19日">
                </p>
                <p class="mc_04_p2">至：<span>2014</span>年<span>12</span>月<span>30</span>日</p>
                <p class="mc_04_p3">
                    购买数量
                    <select>
                        <option>1个月</option>
                        <option>2个月</option>
                        <option>3个月</option>
                        <option>4个月</option>
                        <option>5个月</option>
                        <option>6个月</option>
                    </select>
                </p>
                <a href="#"><img class="mc_btn_buy" src="<?php echo ADDON_PUBLIC_PATH;?>/img/membercenter/membercenter-pay_02.png"></a>
            </div>
        </div>
        <!--以上底部-->
    </div>
<script>
alert($.cookie('p_scores'))
	//传值姓名和电话
	alert($.cookie('gg_user'));
	alert($.cookie('gg_phone'));
</script>
</body>
</html>