<?php  
   session_start();  
   if(!isset($_SESSION["user"]))
   {
    header("location:index.php");
   }
   ?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Planner | Online Booking</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <link href="assets/css/custom-styles.css" rel="stylesheet" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   </head>
   <body>
      <div id="wrapper">
      <nav class="navbar navbar-default top-navbar" role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
         </div>
         <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
               <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-user">
                  <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                  </li>
                  <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
      <nav class="navbar-default navbar-side" role="navigation">
         <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
            <li>
               <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
            </li>
            <li>
               <a class="active-menu" href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
            </li>
            <li>
               <a href="roombook.php"><i class="fa fa-bar-chart-o"></i>Room Booking</a>
            </li>
            <li>
               <a href="Payment.php"><i class="fa fa-qrcode"></i> Payment</a>
            </li>
            <li>
               <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
            </li>
            <li>
               <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
         </div>
      </nav>
      <div id="page-wrapper" >
      <div id="page-inner">
      <div class="row">
         <div class="col-md-12">
            <h1 class="page-header">
               News letters<small> panel</small>
            </h1>
         </div>
      </div>
      <?php
         include('db.php');
         $mail = "SELECT * FROM `contact`";
         $rew = mysqli_query($con,$mail);
         
           ?>
      <div class="row">
      <div class="col-md-12">
      <div class="jumbotron">
      <h3>Send The News Letters to Followers</h3>
      <?php
         while($rows = mysqli_fetch_array($rew))
         {
         		$app=$rows['approval'];
         		if($app=="Allowed")
         		{
         			
         		}
         }
         ?>
      <p></p>
      <p>
      <div class="panel-body">
      <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
      Send New News Letters
      </button>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
         <h4 class="modal-title" id="myModalLabel">Compose News Letter</h4>
      </div>
      <form method="post">
      <div class="modal-body">
         <div class="form-group">
            <label>Title</label>
            <input name="title" class="form-control" placeholder="Enter Title">
         </div>
      </div>
      <div class="modal-body">
         <div class="form-group">
            <label>Subject</label>
            <input name="subject" class="form-control" placeholder="Enter Subject">
         </div>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="comment">News</label>
      <textarea name="news" class="form-control" rows="5" id="comment">