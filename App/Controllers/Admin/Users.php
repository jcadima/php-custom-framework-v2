<?php

namespace App\Controllers\Admin;

use Core\Messages;
use Core\View;
use App\Models\User_Model;

class Users {

/*====================================================
	CONSTRUCTOR - check if logged in 
====================================================*/
	public function __construct() {
		Messages::isLoggedIn() ;
	}

/*====================================================
	USERS INDEX
====================================================*/
	public function index() {

		$data['pagetitle'] = 'Dashboard - Users';
		$viewmodel = new User_Model();
		$data['users'] = $viewmodel->getUsers() ;	// get list of posts

		View::renderAdminTemplate($data, "App/Views/admin/users/index.php") ;
	}
 
}