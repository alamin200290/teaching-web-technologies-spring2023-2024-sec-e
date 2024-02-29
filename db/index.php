<?php

    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($con){
    //     echo "Success";
    // }else{
    //     echo "DB connection Error";
    // }
    // $sql = "select * from users";
    // $result = mysqli_query($con, $sql);
    // //print_r($result);

    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }

    $sql= "insert into users values('', 'xyz', 'xyz@aiub.edu', '212')";
    if(mysqli_query($con, $sql)){
        echo "Inserted";
    }else{
        echo "Error";
    }
?>