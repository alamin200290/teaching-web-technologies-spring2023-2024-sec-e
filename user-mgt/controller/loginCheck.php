<?php
    //session_start();
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "Null username/password";
    }else {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "select * from users where name='{$username}' and password='{$password}'";
        //echo $sql;

        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1) {
            ///$_SESSION['flag'] = 'true'; 
            setcookie('flag', 'true', time()+3600, '/');
            header('location: ../view/home.php');
        }else{
            echo "invalid user";
        }
    }

?>