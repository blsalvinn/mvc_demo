<?php 
	// include_once 'config/session.php';
	// include_once 'config/router.php';
	// include_once 'Model/model_product.php';
	class control_us
	{
		private $model;
		private $data;
		private $menu;
		function __construct()
		{
			if (isset($_SESSION['login']) && $_SESSION['login'][0]['level'] == "1") {
			header('location: ?action=index');
			}
		
			if(!isset($_SESSION['login'])){
				header('location: ?action=page');
			}			
		}
		public function Show()
		{
			
		}		
	}

 ?>