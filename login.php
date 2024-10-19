<?php
include_once'header.php';
?>
    <div class = "form"> 
      <h1>shashi shope</h1>
  <form action ="includes/login.inc.php"method ="post">

        <input type="text" id="fname" name="Uid" placeholder="Email/Username">

        <input type="text" id="lname" name="Pwd" placeholder="Password">

        <button name ="submit"type="submit">login</button>

    </form>   <?php
   if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo '<p class="error">Fill in all fields!</p>';
    }
   
    elseif($_GET["error"] == "stmtfailed"){
        echo '<p class="error">Something went wrong, please try again!</p>';
    }
   }
   ?>
      <P>new here <a href= "signup.php">register </a></P>


</div>


<?php
include_once'footer.php';
?>