<?php
require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Book.php';
class AdminController extends BaseController
{
	public function indexAction()
	{
        
	}
	public function tianjiaAction(){
		$name=$this->getRequest()->getParam('����');
		$call=$this->getRequest()->getParam('�绰');
		$rel=$this->getRequest()->getParam('��ϵ�˹�ϵ');
		$bookModel=new Book();
		$data=array(
				'����'=>$name,
				'�绰'=>$call,
				'��ϵ�˹�ϵ'=>$rel
		);
		$bookModel->insert($data);
		$this->render('ok');
	}
}