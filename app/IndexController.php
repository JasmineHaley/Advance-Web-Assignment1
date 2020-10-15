<?php
class IndexController extends AbstractController{

	public function run(){

		if(!(empty($_GET))){
		
		if($_GET['controller']=='Login'){
			header('Location: login.php');
		}
		if($_GET['controller']=='SignUp'){
			header('Location: signup.php');
		}
		}
		$v = new View();
		$v->setTemplate(TPL_DIR. '/index.tpl.php');
		
		$m = new  IndexModel();
		$this->setModel($m);
		 $this->setView($v);
		
		
		$this->model->attach($this->view);
		$data=$this->model->getAll();

		$this->model->updateData($data);
		//tells the model to contact its observers
		$this->model->notify();

	}
}
?>