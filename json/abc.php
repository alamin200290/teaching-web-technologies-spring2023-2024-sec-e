<?php

    $data = $_REQUEST['data'];
    //$user = json_decode($data);
    $user = ['id'=>1, 'username'=> 'alamin', 'email'=> 'alamin@aiub.edu'];
    $json = json_encode($user);
    echo $json;

?>