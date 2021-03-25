<?php

    include_once "getConn.php";
    list($conn,$table) = getConnection();
    //GET CONNECTION DATA
    //SELECT ANSWER FROM DATABASE
    //TAKE ANSWER THAT IS WHAT DROPDOWN WANTS
    //IN FORM OF HTML
    //HTML THEN OUTPUTTED TO JS
    //JS THEN SELECTS AND EDITS CONTENT OF DIV TO CHANGE TO IT
    
    $query = $_GET["q"];
    $sql = "SELECT Beginner, Experienced FROM " . $table . " WHERE Question = '" . $query . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $row = $result->fetch_assoc(); 
        echo $row['Beginner'] . '~' . $row['Experienced'] . '~';
    }
    else {
        echo "num_rows <= 0";
    }
    $result->close();
    

