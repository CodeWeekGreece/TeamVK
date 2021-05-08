<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Planner | Your solution to time management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,600i,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <link rel="stylesheet" href="css/reset.css">
    <script src="js/script.js"></script>

    <style>
        body {
            background-color: #333333;
          }

        .wrapper {
          width: 40px;
          margin: 0 auto;
          background-color: #000000;
        }

        .wrapper1 {
          width: 1500px;
          margin: 0 auto;
          background-color: #000000;
        }

        h1, h2, h3, h4, h5, h6, p {
          font-family: 'Roboto', sans-serif;
          color: #111;
          line-height: 24px;
        }

        h1 {
          font-weight: 600;
          font-size: 32px;
          padding: 20px 0;
          text-align: center;
        }

        h2 {
          font-weight: 500;
          font-size: 24px;
          padding: 20px 0;
          text-align: center;
        }

        h3 {
          font-weight: 500;
          font-size: 16px;
        }

        p {
          font-weight: 400;
          font-size: 16px;
        }

        nav {
          width: 100%;
          height: 60px;
          background-color: #111111;
        }

        nav .wrapper {
          height: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

        nav img {
          width: 60px;
        }

        nav ul {

        }

        nav ul li {
          list-style: none;
          float: left;
        }

        nav ul li a footer {
          font-family: 'Roboto', sans-serif;
          font-weight: bold;
          font-size: 14px;
          color: #ffffff;
          text-decoration: none;
          padding: 0 16px;
          text-transform: uppercase;
        }

        nav ul li a:hover {
          color: #31a6ff;
        }

        section {
          background-color: #fff;
          width: 94%;
          padding: 20px 3%;
        }

        .index-intro p {
            text-align: center;
        }

        .index-intro h1 {
            background-color: black;
            text-align: left;
        }

        .index-categories-list {
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

        .index-categories-list div {
          width: 24%;
          height: 200px;
          background-color: #ccc;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        /* sign up */

        .signup-form-form {
          display: flex;
          justify-content: center;
        }

        .signup-form p {
          text-align: center;
          padding-bottom: 40px;
          color: #007ecc;
        }

        .signup-form form {
          width: 30%;
        }

        .signup-form form input {
          width: calc(100% - 16px);
          padding: 6px;
          margin-bottom: 4px;
        }

        .signup-form form button {
          display: block;
          padding: 10px 20px;
          margin: 10px auto;
          cursor: pointer;
        }

        .carousel {
          width: 300px;
        }

        .carousel-control.right { 
          opacity:1 !important;
          color:red;
        }

        .display-1 {
          color:white;
        }

        a.nav-link:link
        {
          color: #ffffff;
          text-decoration: none;
        }
        a.nav-link:visited
        {
          color: #ffffff;
          text-decoration: none;
        }
        a.nav-link:hover
        {
          color: #8c4dce;
          text-decoration: none;
        }
        a.nav-link:active
        {
          color: #ffffff;
          text-decoration: none;
        }
        /* footer section styling */
        footer{
            background: #111;
            padding: 15px 23px;
            color: #fff;
            text-align: center;
        }
        footer span a{
            color: crimson;
            text-decoration: none;
        }
        footer span a:hover{
            text-decoration: underline;
        }
  </style>
  </head>
  <body>
  <div style="background-image: url('img/eixame.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; height: 945px; ">
    <nav class="navbar navbar-expand-lg">
    <div class="container"> <a style="margin-left:-390px; margin-bottom:-15px;" href="/eixame"> <img src="img/mainlogo.png" alt="logo"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="fa fa-bars"></i></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="margin-left:675px!important; margin-bottom:-03px">
          <li class="nav-item"> <a class="nav-link active" href="/eixame" data-scroll-nav="0"> <i style="color:#ff2e2e" class="fas fa-home"></i> Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="./about"><i style="color:#ff2e2e" class="fas fa-info-circle"></i> About Us</a> </li>
          <li class="nav-item"> <a class="nav-link" href="./store" style="color:#ffd22e;text-shadow:0 0 7px;animation:bounce 1.5s infinite"><i style="color:#ff4b15;text-shadow: 0 0 0px" class="fa fa-shopping-bag"></i> Shop</a> </li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo '<li class="nav-item"> <a class="nav-link" href="./profile.php"><i style="color:#ff2e2e" class="fa fa-drivers-license"></i> My Profile</a> </li>';
              echo '<li class="nav-item"> <a class="nav-link" href="./logout.php"><i style="color:#ff2e2e" class="fa fa-key"></i> Logout</a> </li>';
            }
            else {
              echo '<li class="nav-item"> <a class="nav-link" href="./login.php"><i style="color:#ff2e2e" class="fab fa-expeditedssl"></i> Login</a> </li>';
              echo '<li class="nav-item"> <a class="nav-link" href="./signup.php"><i style="color:#ff2e2e" class="fas fa-edit"></i> Register</a> </li>';
            }
          ?>
        </ul>
      </div>
    </div>
</nav>

