<?php

namespace Addons\Investigation\Controller;
use Home\Controller\AddonsController;

class InvestigationController extends AddonsController{

	public function show()
	{
		if(IS_POST)
		{
			$data['age'] = I('age');
			$res = M('investigation')->add($data);
			if($res)
				$this->success("增加成功");
			else
				$this->error("增加失败");
		}
		else
		{
			$this->display();
		}
		
	}
	
	
	
	
}
