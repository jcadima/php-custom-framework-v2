
<ul id="nav" class="sidebar-menu">

  <!-- ########### DASHBOARD ###########  -->
  <li class="<?php echo  ( end($_GET) == "admin/dashboard/main" ) ? 'active' : ''  ;  ?>">
    <a href="<?php echo ROOT_URL; ?>admin/dashboard/main">
      <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
    </a>
  </li>

  <!-- ########### POSTS  ############# -->
  <li class="treeview <?php echo  ( end($_GET) == "posts" ) ? 'active' : ''  ;  ?>">
      <a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> <span>Posts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>

      <ul class="treeview-menu">
        <li><a class="menu" href="<?php echo ROOT_URL; ?>admin/posts"><i class="fa fa-file-o" aria-hidden="true"></i> View All Posts</a></li>
      </ul>
    </li>

    <!-- ############ USERS  ############# -->
  <li class="treeview <?php echo  ( end($_GET) == "users" ) ? 'active' : ''  ;   ?>">
      <a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a class="menu" href="<?php echo ROOT_URL; ?>admin/users"><i class="fa fa-user" aria-hidden="true"></i> View All Users</a></li>
      </ul>
  </li>

 <!-- ############ PAGES  ############# -->
  <li class="treeview">
    <a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> <span>Pages</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-file" aria-hidden="true"></i> View All Pages</a></li>
    </ul>
  </li>


  <!-- ########### SETTINGS ###########  -->
  <li class="<?php echo  ( end($_GET) == "settings" ) ? 'active' : ''  ;  ?>">
    <a href="#">
      <i class="fa fa-address-card" aria-hidden="true"></i> <span>View Global Settings</span>
    </a>
  </li>




</ul>