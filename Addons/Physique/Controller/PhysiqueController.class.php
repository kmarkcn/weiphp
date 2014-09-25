<?php

namespace Addons\Physique\Controller;
use Home\Controller\AddonsController;

class PhysiqueController extends AddonsController{

/*
 *  2014-09-17 by terry @kmark 调用模板函数  easy
 */
    public function gotoquestionary(){
       //直接加载模板
       $this->display();
    }


/*
 * 2014-09-22 by terry @kmark
 * 调用问卷页面
 */
    
    public function questionary(){
        $data = M('physique_question')->select();
        $ans = array();
        foreach ($data as $key=>$val){
            //echo($val['answer']);
            //首先将每个答案区分开
            $answer_array = explode('/',$val['answer']);
            foreach($answer_array as $va){
                $anw = array();
                $an = explode(':',$va);
                $anw = array();
                $anw['ggscore'] = $an[0];
                $anw['gganswer'] = $an[1];
                $ans[] = $anw;
            }
            $data[$key]['gogoda'] = $ans;
            $ans = array();
        }
         
        $this->assign('ques',$data);
        $this->display();
    }
/*
 * 2014-09-22 by terry @kmark 
 * 实现客户的资料入库
 */
    function member(){
    	//这里接收会员的值
    	//session_start();
        $data['name'] = $_GET['gg_user'];
    	$data['tel'] = $_GET['gg_phone'];
    	$data['score'] = $_GET['gg_score'];
    	$data['test_time'] = date('Y-m-d h:i:s');
    	//print_r($data);
    	
    	        if(M('gguser')->add($data)){
    	            $_SESSION['is_gg_user']=1;
    	            $this->assign('gg_user',$data['name']);
    	            $this->assign('gg_phone',$data['tel']);
    	            $this->assign('gg_score',$data['score']);
    	            $this->display();
    	        }
    	        
    	  
    	}
    	
   

    
/*
 * 2014-09-22 by terry @kmark 
 * 会员中心页面
 */    
    
   function membercenter(){
   	    $this->display('member');
   } 
    
/*
 * 2014-09-17 by terry @kmark 菜单栏目函数  very important!
 */
    function _initialize(){
        parent::_initialize();
        $res ['title'] = '问题列表';
        $res ['url'] = addons_url ( 'Physique://physique/lists');
        $res ['class'] = 'current';
        $nav [] = $res;
        
        $res ['title'] = '数据管理';
        $res ['url'] = addons_url ( 'Physique://gguser/lists');
        $res ['class'] = '';
        $nav [] = $res;
        //把标题栏加载到页面
        $this->assign ( 'nav', $nav );
    }
        
/*
 * 2014-09-17 by terry @kmark 加载数据列表页面 very important!
 */        
    function lists() {
	    // 获取模型信息
	    $model = $this->getModel ('physique_question');
	    $list_data = $this->_get_model_list ( $model );
	    $this->assign ( $list_data );
	    //print_r($list_data);
	    $this->display ( $model ['template_list'] );
	}
	     
/*
 * 2014-09-18 by terry @kmark 数据列表的删除操作 easy
 */
    function del(){
        $this->model = $this->getModel('physique_question');
        parent::common_del($this->model);  	
    }
    
/*
 * 2014-09-18 by terry @kmark 数据列表的编辑操作  easy
 */
    function edit(){
        $normal_tips = '答案格式如：<br/>0:男/<br/>1:女/<br/>2:保密';
        $this->assign ( 'normal_tips', $normal_tips );
    	$this->model = $this->getModel('physique_question');
    	parent::common_edit($this->model);
    }
      
/*
 * 2014-09-18 by terry @kmark 数据列表的添加操作 easy 
 */    
    
    function add(){
        //这个变量时提示变量
        $normal_tips = '答案格式如：<br/>0:男/<br/>1:女/<br/>2:保密';
        $this->assign ( 'normal_tips', $normal_tips );
        $this->model = $this->getModel('physique_question');
        parent::common_add($this->model);
    }
    
   

}
