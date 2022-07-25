<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $topic = $_POST['topic'];
     $words = $_POST['words'];
     $description = $_POST['description'];


     $count = 0;

   if ($words > 1000) {
      echo "Error";
      $count++;
   }

  if($count == 0)
   {

      



      $sum = mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(Words) From projects WHERE Date = CURDATE()"));
      // $res = number_format($sum) + number_format($words);
      if ((1000 - $sum[0]) < $words){
      // mysqli_query($conn,"SELECT CURDATE(), DATE_ADD(CURDATE(), INTERVAL 1 DAY) as Delivery_Date");
      // mysqli_query($conn,"INSERT INTO projects(delivery_date) VALUES (CURDATE() + 1)");
      $sql = "INSERT INTO projects (topic,words,descriptions, date, delivery_date)
         VALUES ('$topic','$words','$description', CURDATE(), CURDATE()+1)";
         if (mysqli_query($conn, $sql)) {
         echo "New Project has been added successfully !";
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      }


      else {
         $sql = "INSERT INTO projects (topic,words,descriptions, date, delivery_date)
         VALUES ('$topic','$words','$description', CURDATE(), CURDATE())";
         if (mysqli_query($conn, $sql)) {
         echo "New Project has been added successfully !";
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      }
      
      mysqli_close($conn);
   }
}
?>


