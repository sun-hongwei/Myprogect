<?php
require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Adminer.php';
require_once APPLICATION_PATH.'/models/Book.php';
class IndexController extends BaseController
{
	public function indexAction()
	{
	
	
	}
	public function showAction(){
		$password=$this->getRequest()->getParam('password');
		$username=$this->getRequest()->getParam('username');
		if(md5($password)==b7a782741f667201b54880c925faec4b&$username==10000){
			$book=new Book();
			$res=$book->fetchAll()->toArray();
			$this->view->book=$res;
		}else {
			$this->render('index');
		}
	}
	public function shanchuAction(){
		$id=$this->getRequest()->getParam('id');
		$where="id=$id";
		$bookModel=new Book();
		$bookModel->delete($where);
		$this->render('shanchuok');
	}
}
