<?php

// Ensure there is a User with only select permissions

function getConnectionData(){
    $file = fopen('../assets/Data.txt', "r") or die("File unavailable!");
    $server = preg_replace('/\s+/', '', fgets($file));
    $db = preg_replace('/\s+/', '', fgets($file));
    $user = preg_replace('/\s+/', '', fgets($file));
    $pass = preg_replace('/\s+/', '', fgets($file));

    return array($server, $db, $user, $pass);
}

function getConnection(){
    $Data = getConnectionData();
    //echo $Data[0] . $Data[1] . $Data[2] .$Data[3] .$Data[4];
    $connect = new mysqli($Data[0], $Data[2], $Data[3], $Data[1]);
    //new mysqli($host, $username, $passwd, $dbname)
    //check connection
    if ($connect->connect_error){
        die("Connection Failed! -> " . $connect->connect_error);
    }
    return $connect;
}

