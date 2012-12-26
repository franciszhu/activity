<?php
class FormAction extends Action{
	public function insert(){
		$Form = D('Form');
		if($Form->create()){
			$result = $Form->add();
			if($result){
				$this->success('操作成功！');
			}
			else{
				$this->error('写入错误！');
			}
		}
		else{
			$this->error($Form->getError());
		}
	}
	
	public function read($id=0){	
		$Form = M('Form');
		$data = $Form->find($id);
// 		$title = $Form->where('id=1')->getField('title');
// 		$this->title = $title;
		if($data){
			$this->data = $data;
		}
		else{
			$this->error('数据错误');
		}
		$this->display();
	}
}