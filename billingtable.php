<?php
include "./connect.php";
$sql="CREATE TABLE billing(
    member_id INT(11) NOT NULL PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    bill_date VARCHAR(32) NOT NULL,
    dob VARCHAR(32) NOT NULL,
    amount INT(20) NOT NULL
    )";
    if($conn->query($sql)===TRUE){
        echo "table created sucessfully";
    }
    else 
    echo "error";
    ?>