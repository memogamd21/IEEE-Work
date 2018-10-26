<?php

   $connect = new mysqli('localhost','root', '','ieee');

   if($mysqli->connect_error){die('Error'.('.$mysqli->errno.'))'.$mysqli->connect_error');
   }else {
        echo "Connected to database"
        }

   // This part to obtain all data from both tables videos and work

   $sql1 = "SELECT * FROM tbl_work";
   $sql2 = "SELECT * FROM tbl_videos";

   // This part to obtain the result

   $result1 = mysqli_query($connect,$sql1);
   $result2 = mysqli_query($connect,$sql2);

   // This part is for parsing data into json format

    $json_array_1 = array();
    $json_array_2 = array();

    while($row1 = mysqli_fetch_assoc($result1))
    {
        $json_array_1[] = $row1;
    }

    while($row2 = mysqli_fetch_assoc($result2))
    {
            $json_array_2[] = $row2;
    }

    echo json_encode($json_array_1);
    echo json_encode($json_array_2);

    echo' <pre> ';
    print_r($json_array_1);
    print_r($json_array_2);
    echo' </pre> ';
    
?>