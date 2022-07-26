<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $topic = $_POST['topic'];
     $words = $_POST['words'];
     $instruction = $_POST['instruction'];


     $count = 0;

   if ($words > 1000) {

      echo '<script type="text/javascript">';
      echo 'alert("Error!!! Maximum allowed words are 1000 only!")';
      echo '</script>';


      echo "<body style='background-color: #142d4c;'>

            <h1 style='color: #f95959; font: italic bold 40px Georgia, Serif; text-shadow: -12px 6px 0 #0a0e27; margin-top: 20%; margin-bottom: 20%; '><center>ERROR!!! 'Maximum allowed words are 1000 only!'</center></h1>

            </body>";

      $count++;
   }


  if($count == 0)
   {
 
      $c = 0;
      for($i=0; $i<7; $i++){

         $dates2 = date_create(date('Y-m-d'));
         $new_date3 = date_add($dates2, date_interval_create_from_date_string("$i days"));
         $new_date4 = date_format($new_date3, "Y-m-d");
         
         $sum = mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(Words) From client_form WHERE Delivery_Date = '$new_date4'"));

         if ((1000 - $sum[0]) >= $words){
            break;
         }
         else {
            $c++;
         }
      }

      $dates = date_create(date('Y-m-d'));
      $new_date = date_add($dates, date_interval_create_from_date_string("$c days"));
      $new_date2 = date_format($new_date, "Y-m-d");

      $sql = "INSERT INTO client_form (delivery_date, topic, words, instructions)
         VALUES ('$new_date2','$topic','$words','$instruction')";
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
