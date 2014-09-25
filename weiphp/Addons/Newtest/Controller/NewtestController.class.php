<?php

namespace Addons\Newtest\Controller;
use Home\Controller\AddonsController;

class NewtestController extends AddonsController{

	function lists()
	{
		//获取模型信息
		$model = $this->getModel();
		
		//获取模型列表数据
		$list_data = $this->_get_model_list($model);
		
		//获取用户相关信息
		$uids = getSubByKey($list_data['list_data'],'uid');
		$uids = array_filter($uids);
		$uids = array_unique($uids);
		
		if(!empty($uids))
		{
			$map['uid'] = array(
				'in',
				$uids
			);
			$members = M('member')->where($map)->field('uid',nickname,truename,mobile)->select();
			foreach($members as $m)
			{
				!empty($m['truename'])||$m['truename']=$m['nickname'];
				$user[$m['uid']] = $m;
			}
			foreach($list_data ['list_data'] as &$vo)
			{
				$vo['mobile'] = $user[$vo['uid']['mobile']];
				$vo['uid'] = $user[$vo['uid']['truename']];
			}
			
			
			$this->assign($list_data);
			$this->display($model['template_list']);
		}
	}
	
	
	function newtest()
	{
		$config = getAddonConfig('Newtest');
		$this->assign($config);
		
		$data['uid'] = $this->mid;
		$user = M('member')->where($data)->find();
		$this->assign('user',$uesr);
		
		if(IS_POST)
		{
			$truename = I('turename');
			if($config['need_truename'] && !empty($truename))
			{
				$member['truename'] = $truename;
			}
			
			$mobile = I('mobile');
			if($config['need_mobile'] && !empty($mobile))
			{
				$member['mobile'] = $mobile;
			}
			
			if(!empty($member))
			{
				M('member')->where($data)->save($member);
			}
			
			//保存内容
			$data['cTime'] = time();
			$data['contenet'] = I('content');
			 
			$res = M('newtest')->add($data);
			if($res)
				$this->success('增加成功，谢谢你的反馈');
			else 
				$this->error('增加失败，请稍后在试');
			
			
			
			
		}
		else
		{
			$this->display();
		}
	}

}
