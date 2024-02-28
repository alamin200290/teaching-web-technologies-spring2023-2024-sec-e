<?php
    session_start();
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "Null username/password";
    }else if($username == $password) {
        $_SESSION['flag'] = 'true'; 
        header('location: home.php');
    }else{
        echo "invalid user";
    }

?>