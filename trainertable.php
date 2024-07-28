<?php
include "./connect.php";
$sql="CREATE TABLE trainer(
    trainer_id INT(11) NOT NULL PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    dob VARCHAR(32) NOT NULL,
    experience varchar(32)NOT NULL
    )";
    if($conn->query($sql)===TRUE){
        echo "table created sucessfully";
    }
    else 
    echo "error";
    ?>

