<?php
require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Book.php';
class AdminController extends BaseController
{
	public function indexAction()
	{
        
	}
	public function tianjiaAction(){
		$name=$this->getRequest()->getParam('姓名');
		$call=$this->getRequest()->getParam('电话');
		$rel=$this->getRequest()->getParam('联系人关系');
		$bookModel=new Book();
		$data=array(
				'姓名'=>$name,
				'电话'=>$call,
				'联系人关系'=>$rel
		);
		$bookModel->insert($data);
		$this->render('ok');
	}
}