<?php
  include_once 'header.php';
?>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>


  <h1 style="color: white; margin-bottom: -130px;">Sign Up</h1>

  <div class="signup-form-form" style="border: 4px solid white; border-radius: 25px; border-width: 03px; width: 600px; padding: 50px; margin-right: 130px; margin-top: 250px; margin-left: 650px;">
        <form action="includes/signup.inc.php" method="post">
          <div class="mb-3">
          <!-- Input FullName -->
          <label for="name" style="color: white;" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
          <!-- Input Email -->
          <label for="email" style="color: white;" class="form-label">E-Mail</label>
          <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
          <!-- Input Username -->
          <label for="uid" style="color: white;" class="form-label">Username</label>
          <input type="text" class="form-control" name="uid" aria-describedby="emailHelp">
          <!-- Input Password -->
          <label for="pwd" style="color: white;" class="form-label">Password</label>
          <input type="password" class="form-control" name="pwd" aria-describedby="emailHelp">
          <!-- Input Repeat Password -->
          <label for="pwdrepeat1" style="color: white;" class="form-label">Repeat Password</label>
          <input type="password" class="form-control" name="pwdrepeat" aria-describedby="emailHelp">
          </div>
          <button style="background-color:purple;" type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Fill in all fields!
                </div>
              </div>';
      }
      else if ($_GET["error"] == "invaliduid") {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Choose a proper username!
                </div>
              </div>';
      }
      else if ($_GET["error"] == "invalidemail") {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  Choose a proper email!
                </div>
              </div>';
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Passwords doesn\'t match!
                </div>
              </div>';
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  Something went wrong!
                </div>
              </div>';
      }
      else if ($_GET["error"] == "usernametaken") {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  Username already taken!
                </div>
              </div>';
      }
      else if ($_GET["error"] == "none") {
        echo '<div class="alert alert-success d-flex align-items-center" role="alert" style="margin-left: 750px; padding: 10px; margin-right: 940px; margin-top: -490px;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                You have signed up!
                </div>
              </div>';
      }
    }
  ?>

<?php
  include_once 'footer.php';
?>
