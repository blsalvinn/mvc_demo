<?php 
	// include_once 'config.php';
	// include_once 'Controller/control_us.php';
	class router
	{
		function __construct()
		{
			include_once "Controller/control_us.php";
			$clas = 'control_us';
			$clas = new $clas();
			$clas->Show();
		}
		// static function Prase_Url()
		// {
			
		// 	include_once url."_".$_GET['action'].".php";
		// 	$clas = 'Control_'.$_GET['action'];
		// 	$clas=new $clas();
		// 	$clas->Show();
		// 		//return $clas;
		// }
		// static function Model()
		// {
		// 	if (isset($_GET['view'])) {
		// 		if (file_exists(url_model."_".$_GET['view'].".php"))
		// 		{
		// 			include_once url_model."_".$_GET['view'].".php";
		// 			$function = 'Model_'.$_GET['view'];
		// 			$function=new $function();
		// 			// //echo $function;
		// 			// exit();
		// 			return $function;
		// 		}
				
		// 	}
		// }
		// static function View_admin($data,$menu)
		// {
		// 	if (isset($_GET['view'])) {
		// 		if (file_exists(url_admin.$_GET['view'].".php"))
		// 		{
		// 			include_once  url_admin.$_GET['view'].".php";
		// 		}else{
		// 			include_once url_admin.'404.php';
		// 		}
		// 	}else
		// 	{
		// 		include_once url_admin.'catalog.php';
		// 	}
		// }

	}

	?>