<?php
        	
namespace Addons\Investigation\Model;
use Home\Model\WeixinModel;
        	
/**
 * Investigation的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		//$config = getAddonConfig ( 'Investigation' ); // 获取后台插件的配置参数	
		//dump($config);
		$param['token'] = get_token();
		$param['openid'] = get_openid();
		$url = addons_url('Investigation://Investigation/show',$param);
		
		$art[0] = array(
			"Title" => "调研",
			"Description" => "关于年龄的调研",
			"PicUrl" => "http://pica.nipic.com/2007-11-09.2007119124513598 2.jpg",
			"Url" => $url
		);
		
		$this->replyNews($art);
	} 

	// 关注公众号事件
	public function subscribe() {
		return true;
	}
	
	// 取消关注公众号事件
	public function unsubscribe() {
		return true;
	}
	
	// 扫描带参数二维码事件
	public function scan() {
		return true;
	}
	
	// 上报地理位置事件
	public function location() {
		return true;
	}
	
	// 自定义菜单事件
	public function click() {
		return true;
	}	
}
        	