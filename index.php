<?php
include_once'header.php';
?>
    <h1>hello! <?php 
    if(isset($_SESSION["username"])){
        echo $_SESSION["username"] . ' ! ';
    } else { 
        echo 'User !';
    }
?></h1>
    <p>welcome to shashi shope</p>
<?php
include_once'footer.php'
?>