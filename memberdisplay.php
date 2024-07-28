<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        
            table,tr,th,td{
                border:2px solid black;
                border-collapse: collapse;
                padding:10px;
            }
        
    </style>
</head>
<body>
    <h1>Member List</h2>
<button><a href="member.php">ADD+</a></button><br><br>
<table>
    <tr>
        <th>Member_id</th>
        <th>Name</th>
        <th>Join_Date</th>
        <th>DOB</th>
        <th>Phone</th>
        <th>Email</th>    
        <th>Action</th>
    </tr>
<?php
include './connect.php';
$sql="SELECT * FROM member";
$result=$conn->query($sql);
if($result->num_rows>0){ 
while($row=mysqli_fetch_assoc($result))
{
    $member_id=$row['member_id'];
    $name=$row['name'];
    $join_date=$row['join_date'];
    $dob=$row['dob'];
    $phone=$row['phone'];
    $email=$row['email'];
echo"<tr>
<td>".$member_id."</td>
<td>".$name."</td>
<td>".$join_date."</td>
<td>".$dob."</td>
<td>".$phone."</td>
<td>".$email."</td>
<td>
<a href=memberupdate.php?updateid=$member_id'><button>UPDATE</button></a>
<a href='memberdelete.php?mid=$member_id'><button>DELETE</button></a>
</td>
</tr>";
}
}
?>

</table>
</body>
</html>