<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href= "<?php echo base_url() . 'assets/css/student_dashboard.css'; ?>">

    <title>Dashboard</title>
  </head>
 
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation" style= "height: 200vh ">
                
                <div class="navi">
                    <ul>
                        <li class="active"><a href="<?php echo base_url(). 'Welcome/homeNavigation/homeScreen'?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/branches'?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Department</span></a></li>
                        <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/admission'?>"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Admission</span></a></li>
                        <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/facilities'?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Facilities</span></a></li>
                        <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/about'?>"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">About</span></a></li>
                        <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/student_login'?>"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Login</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
         
          <li class="nav-item dropdown" style="margin-left:1100px" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="margin-left:120px"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url(). 'Welcome/homeNavigation/homeScreen'?>"  action = "<?php base_url(). "Auth/logout"?>">Logout</a>
            </div>
          </li>
        </ul>
      
      </div>
    </nav>
    
    <div class="user-dashboard">
                    <h1>Hello, JS</h1>
</div>                
    
</body>
</html>
