  <?php
include_once'header.php';
?>
    <div class = "form">
      <h1>shashi shope</h1>
  <form action ="includes/signup.inc.php"method ="post">

        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="lname" name="email" placeholder="Email">
        <input type="text" id="lname" name="uid" placeholder="Username">
        <input type="text" id="lname" name="pwd" placeholder="Password">
        <input type="text" id="lname" name="pwdrepeat" placeholder="Repeat Password">


        <button name ="submit"type="submit">Register</button>

    </form>
   <?php
   if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo '<p class="error">Fill in all fields!</p>';
    }
    elseif($_GET["error"] == "invaliduid"){
        echo '<p class="error">Invalid username!</p>';
    }
    elseif($_GET["error"] == "invalidemail"){
        echo '<p class="error">Invalid email!</p>';
    }
    elseif($_GET["error"] == "pwdmatch"){
        echo '<p class="error">Passwords do not match!</p>';
    }
    elseif($_GET["error"] == "stmtfailed"){
        echo '<p class="error">Something went wrong, please try again!</p>';
    }
    elseif($_GET["error"] == "usertaken"){
        echo '<p class="error">Username or email already taken!</p>';
    }
   }
   ?>
     <P>Already have a an account?<a href= "login.php">login </a></P>

</div>


<?php
include_once'footer.php';
?>