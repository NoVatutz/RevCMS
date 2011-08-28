<?php

define('A', 'app/');
define('I', 'interfaces/');
define('M', 'management/');
define('T', 'tpl/');
define('TH', 'thehabbos_api/');


//REVOLUTION

use Revolution as Rev;


	//INTERFACES
	
		require_once A . I . 'interface.core.php';
		
		require_once A . I . 'interface.engine.php';
	
		require_once A . I . 'interface.users.php';
	
		require_once A . I . 'interface.template.php';
		
		//TPL
		
			require_once A . T . I . 'interface.forms.php';
			
			//HTML
			
				require_once A . T . I . 'interface.html.php';
				
			//CSS
				
				require_once A . T . I . 'interface.css.php';
				
			//JS
				
				require_once A . T . I . 'interface.js.php';
				
	
	//CLASSES
	
		require_once A . 'class.core.php';
		
		require_once A . 'class.engine.php';
		
		require_once A . 'class.users.php';
		
		require_once A . 'class.template.php';
		
		//MANAGEMENT
		
			include(A . M . 'config.php');
			
			require_once A . M . 'recaptchalib.php';
			
			//THEHABBOS API MANAGEMENT
		
				require_once A . M . TH . 'core.lang.php';
				
				require_once A . M . TH . 'class.validate.php';
				
				require_once A . M . TH . 'class.template.php';
				
		//TPL
		
			require_once A . T . 'class.forms.php';
			
			//HTML
				
				require_once A . T . 'class.html.php';
				
			//CSS
				
				require_once A . T . 'class.css.php';
				
			//JS
				
				require_once A . T . 'class.js.php'; 
		
		
	//OBJ
	
	$core = new Rev\core();
		
	$engine = new Rev\engine();	
		
	$users = new Rev\users();
		
	$template = new Rev\template();
		
	$template->form = new Rev\forms();
		
	$template->html = new Rev\html();
		
	$template->css = new Rev\css();
		
	$template->js = new Rev\js();
		
	//START	
	
	session_start();
	
	$engine->Initiate();
	
	$template->Initiate();
	
	// 1 Special Function needed for ZapASE - yay
	
	function filter($var)
	{
		return mysql_real_escape_string(stripslashes(htmlspecialchars($var)));
	}
	
?>