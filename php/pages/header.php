<html>
	<head>
		<title>Appsvin Admin Panel</title>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="S Vinesh">
		
		<!-- Css -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<link href="../assets/css/style.css" rel="stylesheet" >

		<script src="../assets/js/jquery.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<!-- Start header -->
				<header>
					<div class="row">
						<div class="col-md-1 col-xs-2">
							<i class="fa fa-bars menu-toggle"></i>
						</div>
						
						
						<div class="col-md-11 col-xs-12">
							
						</div>
					</div>
				</header>
			<!-- End header -->

			<!-- Start side menu -->
				<div class="side-menu">
					<!-- Start logo block -->
						<div class="logo-block">
							<div class="logo-image-holder"> 
								<img class="logo-image" src="../assets/img/profile_pic.png">
							</div>
							<div class="logo-description">
								<div class="logo-description-main">S Vinesh</div>
								<div class="logo-description-sub">Javascript & PHP Developer</div>
							</div>
						</div>	 
					<!-- End logo block -->

					<!-- Start menu -->
						<div class="menu-heading">Navigation Menu</div>
			            <ul class="sidebar-nav" id="menu">
							
			                <li>
			                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
			                       <ul >
			                        	<li><a href="#">Dashboard 1</a></li>
			                        	<li><a href="#">Dashboard 2</a></li>
			                    	</ul>
			                </li>
			                <li class="<?php if($page=='forms') echo 'active'; ?>">
			                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-edit fa-stack-1x "></i></span> Forms </a>
			                       	<ul >
				                        <li class="<?php if($page=='forms') echo 'active'; ?>"><a href="index.php?page=forms"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>General</a></li>
				                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Advanced</a></li>
				                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Editors</a></li>
			                    	</ul>
			                </li>
			                <li>
			                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-folder fa-stack-1x "></i></span> Pages </a>
			                    <ul>
			                        <li><a href="#" ><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Login</a></li>
			                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Register</a></li>
			                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Locked</a></li>
			                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Contact</a></li>
			                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-circle-o fa-stack-1x "></i></span>Change Password</a></li>
			 
			                    </ul>
			                </li>
			                <li class="<?php if($page=='tables') echo 'active'; ?>">
			                    <a href="index.php?page=tables"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-table fa-stack-1x "></i></span>Tables</a>
			                </li>
			                <li  class="<?php if($page=='curd') echo 'active'; ?>">
			                    <a href="index.php?page=curd"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>CURD Module</a>
			                </li>
			                <li>
			                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
			                </li>
			                <li>
			                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
			                </li>
			                <li>
			                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
			                </li>
			            </ul>
					<!-- End menu -->
				</div>
			<!-- End side menu -->