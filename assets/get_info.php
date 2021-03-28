<?php

    include_once "getConn.php";
    $conn = getConnection();
    //GET CONNECTION DATA
    
    // GET LEVEL REQUIRED
    $level = $_GET["l"];
    
    // GET QUERY_STRING
    $query = $_GET["q"];
    //SELECT ANSWER FROM DATABASE
    $IDsql = "SELECT " . $level . "ID FROM Queries WHERE Question = '" . $query . "'";
    $result = $conn->query($IDsql);
    if ($result->num_rows > 0){
        $sql = "SELECT Header, Text, Images FROM Answers WHERE ID = '" . $result-> fetch_array(MYSQLI_NUM)[0] . "'";
        $result->close();
        $result2 = $conn->query($sql);
        if ($result2->num_rows > 0){
            $row = $result2->fetch_assoc();
            echo $row['Header'] . ' ' . $row['Text'] . ' ' . $row['Images'];
            $result2->close();
        }
        else{
           echo "num_rows <= 0 answer"; 
           $result2->close();
        }
    }
    else {
        echo "num_rows <= 0 query";
        $result->close();
    }
    

