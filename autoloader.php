<?php
spl_autoload_register(function($class_name){
	
	if(!defined('APP_DIR')){
		define ('ROOT_DIR','/Applications/XAMPP/xamppfiles/htdocs/Web2/assignment1_01');
		define ('APP_DIR',ROOT_DIR.'/app');
		define ('FRAMEWORK_DIR',ROOT_DIR.'/frameworks');
		define ('TPL_DIR',ROOT_DIR.'/templates');
		define ('DATA_DIR',ROOT_DIR.'/data');
	}
	if (file_exists(FRAMEWORK_DIR.'/'.$class_name.'.php')){
		require FRAMEWORK_DIR .'/'. $class_name.'.php';
	}
	elseif(file_exists(APP_DIR.'/'.$class_name.'.php')){
		require APP_DIR .'/'. $class_name.'.php';
	}
	/*elseif(file_exists(TPL_DIR.'/'.$class_name)){
		require TPL_DIR .'/'. $class_name;
	}*/
	elseif(file_exists(APP_DIR .'/'.$class_name.'.php')){
		require APP_DIR .'/'. $class_name.'.php';
	}
	elseif(file_exists(DATA_DIR .'/'.$class_name.'.php')){
		require DATA_DIR .'/'. $class_name.'.php';
	}
	else{
		trigger_error('Cannot find class/interface/abstract class: '. $class_name, E_USER_WARNING);
		debug_print_backtrace();
	}
});

?>