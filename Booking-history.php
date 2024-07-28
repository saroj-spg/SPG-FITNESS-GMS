<?php
session_start();
include './connect.php'; // Ensure your database connection is properly included

// Check if the user is logged in (if needed)
if(strlen($_SESSION["uid"]) == 0) {   
    header('location:login.php');
    exit();
}

// Query to fetch booking history
$sql = "SELECT * FROM tblbooking ORDER BY booking_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <style>
        body {
            background-color: skyblue;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Booking History</h1>

    <?php
    if ($result->num_rows > 0) {
        echo '<table>
                <tr>
                    <th>ID</th>
                    <th>Package ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Booking Date</th>
                    <th>Package Name</th>
                    <th>Duration</th>
                    <th>Payment Type</th>
                    <th>Amount</th>
                </tr>';

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['package_id'] . '</td>
                    <td>' . $row['uname'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['booking_date'] . '</td>
                    <td>' . $row['package_name'] . '</td>
                    <td>' . $row['duration'] . '</td>
                    <td>' . $row['payment_type'] . '</td>
                    <td>' . $row['amount'] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo '<p class="no-data">No booking records found.</p>';
    }

    $conn->close();
    ?>

</div>

</body>
</html>
