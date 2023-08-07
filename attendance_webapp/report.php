<?php
session_start();
include "connect.php";

if (isset($_POST['sdate']) && isset($_POST['edate'])) {
    $name = $_SESSION['username'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];

    // Prepare the SQL query with the date range condition
    $query = "SELECT * FROM attendance WHERE username='$name' AND attDate >= '$sdate' AND attDate <= '$edate'";

    // Execute the query and fetch the results
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if there are any results
        if (mysqli_num_rows($result) > 0) {
            echo "<table rules='all'>";
            echo "<tr><th>Username</th><th>Attendance Date</th><th>Attendance Time</th></tr>";
            
            // Loop through the result set and print the details
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['attDate'] . "</td>";
                echo "<td>" . $row['attTime'] . "</td>";
                // ... (other columns and details)
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }
}
?>
