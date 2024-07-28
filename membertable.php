<?php
include "./connect.php";
$sql="CREATE TABLE member(
    member_id INT(11) NOT NULL PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    join_date VARCHAR(32) NOT NULL,
    dob VARCHAR(32) NOT NULL,
    phone INT(20) NOT NULL,
    email VARCHAR(32) NOT NULL
    )";
    if($conn->query($sql)===TRUE){
        echo "table created sucessfully";
    }
    else 
    echo "error";
    ?>