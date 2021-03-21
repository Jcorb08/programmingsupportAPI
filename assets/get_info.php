<?php

    include_once "getConn.php";
    list($conn,$table) = getConnection();
    //GET CONNECTION DATA
    //SELECT ANSWER FROM DATABASE
    //TAKE ANSWER THAT IS WHAT DROPDOWN WANTS
    //IN FORM OF HTML
    //HTML THEN OUTPUTTED TO JS
    //JS THEN SELECTS AND EDITS CONTENT OF DIV TO CHANGE TO IT
    
    $query =  $_SERVER['QUERY_STRING'];    // gets q? from skill
    echo $query;
    
    $sql = "SELECT Beginner, Experienced FROM " . $table;
    $result = $conn->query($sql);
    echo $result;

    

