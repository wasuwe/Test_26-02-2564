<?php
include "connect.php";

    $typeid = $_GET['typeid'];

    $name = $_GET['name'];
    $money = $_GET['money'];
    $payday = $_GET['payday'];     

    if(empty($_GET['recordday'])){
        $recordday = date('Y-m-j');
    }else{
        $editday = $_GET['recordday'];
    }

    if(empty($_GET['editday'])){
        $editday = date('Y-m-j');
    }else{
        $editday = $_GET['editday'];
    }

    


    $sql = "INSERT INTO record (name,money, payday, recordday,editday,typeid)
    VALUES ('$name', '$money', '$payday','$recordday','$editday','$typeid')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header( "location: index.php" );
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

    
?>