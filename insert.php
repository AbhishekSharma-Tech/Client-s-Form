<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $topic = $_POST['topic'];
     $words = $_POST['words'];
     $description = $_POST['description'];


     $count = 0;

   if ($words > 1000) {

      echo '<script type="text/javascript">';
      echo 'alert("Error!!! No. of Word is > 1000")';
      echo '</script>';


      echo "<body style='background-color: #142d4c;'>

            <h1 style='color: #f95959; font: italic bold 40px Georgia, Serif; text-shadow: -12px 6px 0 #0a0e27; margin-top: 20%; margin-bottom: 20%; '><center>ERROR!!! 'No. of Words should be <= 1000'</center></h1>

            </body>";

      $count++;
   }


  if($count == 0)
   {
 
      $c = 0;
      for($i=0; $i<7; $i++){
         
         $sum = mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(Words) From projects WHERE Delivery_Date = CURDATE() + $i"));

         if ((1000 - $sum[0]) >= $words){
            break;
         }
         else {
            $c++;
         }
      }

      $sql = "INSERT INTO projects (topic, words, descriptions, dates, delivery_date)
         VALUES ('$topic','$words','$description', CURDATE(), CURDATE() + $c)";
      if (mysqli_query($conn, $sql)) {
         echo "<body style='background-color: #142d4c;'>

                  <h1 style='color: #ececec; font: italic bold 50px Georgia, Serif; text-shadow: -14px 7px 0 #0a0e27; margin-top: 20%; margin-bottom: 20%; '><center>New Project has been Added Successfully!!!</center></h1>
        
                  </body>";
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }

      mysqli_close($conn);
   }
}
?>
