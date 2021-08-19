# ARMADILLO CUSTOM PHP FRAMEWORK V2.2

This is a custom PHP framework for personal web applications, it aims to be simple, lightweight and flexible, the code is for learning purposes and is not intended to be used "as is" in production environments.
A simple blog and user registration is integrated into this php custom framework.


### REQUIREMENTS
- PHP 5.3.x or greater, PDO

### Installation

The only requirements are to have a working Apache web server with PHP running at least v5.3<br>
Also a nginx file is provided:  [nginx_config.txt](https://github.com/jcadima/php-custom-framework-v2/blob/master/nginx_config.txt)

### Note for IIS servers: 
The following web.config file may work but its not guaranteed: [web.config](https://github.com/jcadima/php-custom-framework-v2/blob/master/web.config.txt)

### Project Details & Structure
- The main URL structure should be in this format: 
```bash
http://domain/controller/action/{params}
```
action and {params} are optional, if controller is not specified it will use a specified default home controller.

Routing system based on regular expressions:

```php
// match homepage
$router->add("@^$@i") ;

// matches: controller
$router->add("@^(?P<controller>[a-z-]+)$@i") ;

// matches: controller/action
$router->add("@^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)$@i") ;

// matches:  controller/method/{params}
$router->add("@^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/(?P<id>\d+)$@i") ;

// matches: admin/controller/method
$router->add("@^admin/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)$@i") ;
```

```php
// To call a view
```php
View::renderTemplate($data, "App/Views/blog/index.php") ;

// To call an admin view
View::renderAdminTemplate($data, "App/Views/admin/posts/index.php") ;
```

- Directories under /views share the same name of the controller class, for example a controller Home has a view called /views/home , and inside the folder name you would have and index and/or another file that would describe the action

- You are able to pass an data array with as many values as you like , and can also return objects from the model. i.e: 
```php
public function index() {
	$viewmodel = new Post_Model();

	$data['pagetitle'] = 'Blog';
	$data['text'] = 'Main Blog Heading';		
	$data['posts'] = $viewmodel->getPosts() ;	
    View::renderTemplate($data, "App/Views/blog/index.php") ;
}
```

- Print $data values
```php
<title><?php echo $pagetitle ;  ?></title>

<?php foreach($posts as $post) : ?>
	<div class="well">
		<h3><?php echo $post['title']; ?></h3>
		<small><?php echo $post['create_date']; ?></small>
		<hr />
		<p><?php echo substr( $post['body'] , 0 , 500) . "[...]" ; ?></p>
		<br />
		<a class="btn btn-default" href="<?php echo ROOT_PATH;  ?>blog/view/<?php echo $post['id']; ?>">Read More</a>
	</div>
<?php endforeach; ?>
```

- Set Session messages:
```php
Messages::setMsg('Incorrect Login', 'error');
```

### Database Tables Description
Posts:
```mysql
+-------------+--------------+------+-----+-------------------+----------------+
| Field       | Type         | Null | Key | Default           | Extra          |
+-------------+--------------+------+-----+-------------------+----------------+
| id          | int(11)      | NO   | PRI | NULL              | auto_increment |
| user_id     | int(11)      | NO   |     | NULL              |                |
| title       | varchar(255) | NO   |     | NULL              |                |
| body        | text         | NO   |     | NULL              |                |
| create_date | datetime     | NO   |     | CURRENT_TIMESTAMP |                |
+-------------+--------------+------+-----+-------------------+----------------+
```

Users:
```mysql
+---------------+--------------+------+-----+-------------------+----------------+
| Field         | Type         | Null | Key | Default           | Extra          |
+---------------+--------------+------+-----+-------------------+----------------+
| id            | int(11)      | NO   | PRI | NULL              | auto_increment |
| name          | varchar(255) | NO   |     | NULL              |                |
| email         | varchar(255) | NO   |     | NULL              |                |
| password      | varchar(255) | NO   |     | NULL              |                |
| register_date | datetime     | NO   |     | CURRENT_TIMESTAMP |                |
+---------------+--------------+------+-----+-------------------+----------------+
```




