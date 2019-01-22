<?php

function login($username, $password){
    require_once('connect.php');
    //check if username exists

    //To Do: finish the following query
    //that counts how many entries from tbl_user
    //that has user_name match $username

    $check_exist_query = 'SELECT COUNT (*) FROM tbl_user WHERE user_name = '.$username;

    $user_set = $pdo->prepare($check_exist_query);

    if($user_set->fetchColumn()>0){
        echo 'User Exists!';
    }

}

?>