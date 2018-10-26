<?php

   $connect = new mysqli('localhost','root', '','ieee2');

   if($connect->connect_error){
       echo "Error";
//        die('Error'.('.$mysqli->errno.'))'.$mysqli->connect_error');
   } else {
//        echo "Connected to database";
   }

   // This part to obtain all data from table videos

   $sql1 = "SELECT * FROM videos";

   // This part to obtain the result

   $result1 = mysqli_query($connect,$sql1);

   // This part is for parsing data into json format

    $json_array_1 = array();

    while($row1 = mysqli_fetch_assoc($result1))
    {
        $json_array_1[] = $row1;
    }


    echo json_encode($json_array_1);

?>