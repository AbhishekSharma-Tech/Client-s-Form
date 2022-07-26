<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "main_form";    //Database_Name
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
