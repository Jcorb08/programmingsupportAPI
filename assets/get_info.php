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
    // get result
    $result = $conn->query($IDsql);
    if ($result->num_rows > 0){
        // fetch the linked database's data given the id retrieved from the first table
        $sql = "SELECT Header, Text, Images FROM Answers WHERE ID = '" . $result-> fetch_array(MYSQLI_NUM)[0] . "'";
        // close connection to first database
        $result->close();
        // get result
        $result2 = $conn->query($sql);
        if ($result2->num_rows > 0){
            $row = $result2->fetch_assoc();
            // echo the header text and images back to php file
            echo $row['Header'] . ' ' . $row['Text'] . ' ' . $row['Images'];
            // close connection
            $result2->close();
        }
        else{
            // return error
           echo "num_rows <= 0 answer"; 
           $result2->close();
        }
    }
    else {
        // return error
        echo "num_rows <= 0 query";
        $result->close();
    }
    

