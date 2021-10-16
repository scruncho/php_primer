<?php 
$title = "Index";
include 'includes/header.php'
?>
    <!-- Basic HTML -->
    <h1>
        Hello HTML - PHP Primer
    </h1>
    <?php
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';
       
    ?>
    <?php
        // declare variable
        $name = 'Omar Reid';
        $age = '31';
        //echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        //echo using double quotation marks
        echo "<h1>My Name Is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
  <?php require 'includes/footer.php'?>