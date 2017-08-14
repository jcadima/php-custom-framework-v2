<?php
namespace Core;

class View {

	public static function renderTemplate($viewData, $viewPath ) {
		extract($viewData) ;		
		require('../App/Views/main.php');
	}	

	public static function renderAdminTemplate( $viewData, $viewPath) {
		extract($viewData) ;
		require('../App/Views/adminMain.php') ;
	}
	
}


