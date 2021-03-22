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
    echo "query = " . $query;
    
    $sql = "SELECT Beginner, Experienced FROM " . $table . "WHERE Question='" . $query . "'" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $return = "";
        while ($row = $result->fetch_assoc()){
            $return += $row['Beginner'] . '~' . $row['Experienced'] . '~';
        }
        echo $return;
    }
    else {
        echo null;
    }
    

