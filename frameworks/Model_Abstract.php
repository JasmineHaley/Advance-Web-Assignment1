
<?php

	abstract class Model_Abstract {
		 
		 protected $files = array(
		'courses'=>"data/courses.json",
		'faculty_dept_courses'=>"data/faculty_dept_courses.json",
		'instructor'=>"data/instructors.json",
		'faculty_department'=>"data/faculty_department.json",
		'users'=>"data/users.json",
		'course_instructor'=>"data/course_instructor.json",
		'hashedUsers'=>"data/hashedUsers.json");

		abstract public function getAll():array;
		abstract public function getRecord(string $id):array;

		public function loadData($key){
			return file_get_contents($this->files[$key]);
	}
	}
?>