<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\User_model; 
use App\Models\Post_Model;

class Dashboard {

	public function main() {
		$data['pagetitle'] = 'Main Dashboard';
		// GET POSTS
		$viewmodel = new Post_Model();
		$data['posts'] = $viewmodel->getPosts() ;

		// GET USERS
		$viewmodel = new User_model() ;
		$data['users'] = $viewmodel->getUsers() ;

		View::renderAdminTemplate($data, "App/Views/admin/maindashboard.php") ;

	}
 
}


