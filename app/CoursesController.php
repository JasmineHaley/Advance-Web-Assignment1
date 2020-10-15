<?php
class CoursesController extends AbstractController{


	public function run(){
		SessionManager::create();
		$session = new SessionManager(); 

		$v = new View();
		$v->setTemplate(TPL_DIR.  '/courses.tpl.php');
		$this->setView($v);
		$this->setModel(new CoursesModel());
		$this->model->attach($this->view);

		if($session->accessible($user,'profile')){
			$this->view->addVar('courses_string',$this->viewCourses());
			$this->view->display();
		
	}else{
		$v->setTemplate(TPL_DIR. '/login.tpl.php');
		$v->display();
	}
		
		
	}
	public function viewCourses(){
		$records=$this->model->getAll();
		$length = count($records);
		var_dump($length);
		$li='';
		$li ='<li>';
		for($i=1;$i < $length;$i++){
				$li.='<div>
				<a href="#"><img src="images/'. $records[$i][2].'" alt="course image"></a>
				</div>
				<div>
				<a href="#"><span class="faculty-department">'.$records[$i][0].'</span>	
					<span class="course-title">'.$records[$i][1].'</span>
					<span class="instructor">'.$records[$i][3].'</span></a>
				</div>
				<div>
					<p>Get Curious.</p>
					<a href="#" class="startnow-button startnow-btn">Start Now!</a>
				</div>';
			
		}
		$li.='</li>';
		return $li;
	}
}
?>
