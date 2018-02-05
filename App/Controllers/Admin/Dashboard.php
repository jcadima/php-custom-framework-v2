<?php

namespace App\Controllers\Admin;

use Core\View;
use Core\Messages;
use App\Models\User_Model; 
use App\Models\Post_Model;

class Dashboard {

/*====================================================
	CONSTRUCTOR - check if logged in 
====================================================*/
	public function __construct() {
		Messages::isLoggedIn() ;
	}

/*====================================================
	DASHBOARD INDEX
====================================================*/
	public function index() {
		$data['pagetitle'] = 'Main Dashboard';
		// GET POSTS
		$viewmodel = new Post_Model();
		$data['posts'] = $viewmodel->getPosts() ;

		// GET USERS
		$viewmodel = new User_Model() ;
		$data['users'] = $viewmodel->getUsers() ;

		View::renderAdminTemplate($data, "App/Views/admin/maindashboard.php") ;
	}

 
}


