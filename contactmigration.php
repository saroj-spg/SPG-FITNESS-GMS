<?php
include "./connect.php";
$sql="CREATE TABLE contact(
    contact_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    contact_name VARCHAR(32) NOT NULL,
    contact_email VARCHAR(32)NOT NULL,
    contact_message TEXT NOT NULL
   )"; 
    if($conn->query($sql)===TRUE){
        echo "table created sucessfully";
    }
    else 
    echo "error";
    ?>