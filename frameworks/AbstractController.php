<?php
abstract class AbstractController{
	protected $model = null;
	protected $view = null;
	protected function setModel(Observable_Model $model){
		$this->model = $model;
	}
	protected function setView(View $view) {
		$this->view = $view;
	}
	
	abstract public function run();
	

}
?>
