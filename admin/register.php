<?php  
   session_start();  
   if(isset($_SESSION["user"]))  
   {  
        header("location:home.php");  
   }  
   ?>
<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Register</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div id="clouds">
         <div class="cloud x1"></div>
         <div class="cloud x2"></div>
         <div class="cloud x3"></div>
         <div class="cloud x4"></div>
         <div class="cloud x5"></div>
      </div>
      <div class="container">
         <div id="login">
            <form method="post">
               <fieldset class="clearfix">
                  <p><span class="fontawesome-user"></span><input type="text"       name="fullname" value="Full Name" onBlur="if(this.value == '') this.value = 'fullname'" onFocus="if(this.value == 'fullname') this.value = ''" required></p>
                  <p><span class="fontawesome-user"></span><input type="text"       name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p>
                  <p><span class="fontawesome-user"></span><input type="text"       name="email" value="E-Mail" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p>
                  <p><span class="fontawesome-user"></span><input type="text"       name="age" value="Age" onBlur="if(this.value == '') this.value = 'Age'" onFocus="if(this.value == 'Age') this.value = ''" required></p>
                  <p><span class="fontawesome-lock"></span><input type="password"   name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
                  <p><span class="fontawesome-lock"></span><input type="password"   name="pass2"  value="Re Type Password" onBlur="if(this.value == '') this.value = 'Password2'" onFocus="if(this.value == 'Password2') this.value = ''" required></p>
                  <p><input type="submit" name="sub"  value="Login"></p>
               </fieldset>
            </form>
         </div>
      </div>
      <div class="bottom">
         <h3><a href="../index.php">Return To Home Page</a></h3>
      </div>
   </body>
</html>


<?php
   include('db.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['user'];
      $fullName = $_POST['fullname'];
      $email    = $_POST['email'];
      $age      = $_POST['age'];
      $pass     = $_POST['pass'];
      $pass2    = $_POST['pass2'];

      $sql = "INSERT INTO login (usname, pass, fullname, email, age) VALUES (?, ?, ?, ?, ?);";

      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../admin/register.php");
          exit();
      }
  
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
  
      mysqli_stmt_bind_param($username, $hashedPwd, $fullName, $email, $age);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($con);
      header("location: https://planner.vkatranas.eu/");
      exit();
   }
?>