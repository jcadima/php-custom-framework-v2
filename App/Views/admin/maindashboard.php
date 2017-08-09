<!--  /App/Views/admin/maindashboard.php  -->

  <h1>ADMIN DASHBOARD PAGE</h1>

  <div class="col-md-6">
    <h3>Posts</h3>
  	       
  	<?php foreach($posts as $post) : ?>
  		<ul class="well">
  			<li><?php echo $post['title']; ?></li>
  		</ul>
  	<?php endforeach; ?>
  </div>

  <div class="col-md-6">
      <h3>Users</h3>
             
      <?php foreach($users as $user) : ?>
        <ul class="well">
          <li><?php echo $user['email']; ?></li>
        </ul>
      <?php endforeach; ?>
  </div>

