<?php
namespace Core;

class Router{
	private $url;
	private $controller ;
	private $namespace;
	private $params   = [] ;
	protected $routes = [];

/*====================================================
	CONSTRUCTOR - set url value 
====================================================*/
	public function __construct() {
	// Set URL if found in query string, else set to null
		$this->url =  ( isset($_GET['qs']) )  
			? filter_var( $_GET['qs'], FILTER_SANITIZE_URL)  
			: null  ;	
	}

/*====================================================
	ADD - add to routes array
====================================================*/
    public function add($route)  {
        $this->routes[] = $route;
    }

/*====================================================
	MATCH - return true if route matches the regex or return false
====================================================*/
	public function match($url) {
		foreach( $this->routes as $route ) {
			if( preg_match($route, $url, $matches) ) {
				// build route for dispatch method
				$this->setRoute( $url ) ;
				
				return true;
			}
	
		}
		return false; 
	}

/*==========================================================================
	SET ROUTE - get route and set controller, action, and params if provided 
===========================================================================*/
	public function setRoute($url) {
		$url = explode('/', $url);	

		// pass the first url parameter and set namespace
		$this->setNamespace( $url[0] ) ;

		// if url contains admin, remove it from array so that controller begins at index 0
		if ( $url[0] == 'admin' )
			array_shift($url);

		// Set controller, action and params
	    $this->controller = isset($url[0]) ? $url[0] : null;
	    $this->action     = isset($url[1]) ? $url[1] : 'index';
	    $this->params     = array_slice($url,2)  ;		
	}

/*====================================================
	GET ROUTES - return array of routes
====================================================*/
    public function getRoutes() {
        return $this->routes;
    }

/*==========================================================
	SET NAMESPACE - set default namespace or admin namespace
===========================================================*/
    protected function setNamespace($url) {
        // defaults to App/Controllers if it does not have a namespace specified already
        $this->namespace = 'App\Controllers\\';
        if ( $url == 'admin' ) {
            $this->namespace = 'App\Controllers\Admin\\';
        }
    }

/*====================================================
	GET NAMESPACE - get current namespace
====================================================*/
    protected function getNamespace() {
    	return $this->namespace;
    }


/*====================================================
	CREATE CONTROLLER - create controller
====================================================*/
	public function dispatch() {
		if ( $this->match($this->url) ) {
			$controller = $this->getNamespace() . $this->controller;

			if ( !$this->controller  )  {
				$home = new \App\Controllers\Home() ;
				$home->index() ;
			}

			elseif( class_exists( $controller )   ) {
				//$this->controller  = $this->getNamespace() . ucfirst( $this->controller ) ;
			
				//echo 'URL_ACTION: ' . $this->url_action . '<br>' ;
				$action = $this->action;
				$objcontroller = new $controller();  // NEW CONTROLLER

					if(method_exists( $controller  , $action )) {

						if ( !empty( $this->params && $this->params != "" ) ) {
				 			call_user_func_array( array( $objcontroller, $action ), $this->params ) ;
						}

						else {
							$objcontroller->{ $action  }() ;
						}
					} 
					else {
						echo "<h1>Method" . $action. " does not exist</h1>";
						return;
					}
			} 
		}

		else {
			echo "<h1>Controller " . $this->controller . " does not exist</h1>";
			return;
		}
	} // END createController




} // END CLASS
