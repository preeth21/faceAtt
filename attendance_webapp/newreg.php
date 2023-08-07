<?php
include "connect.php";
if(isset($_POST['submit'])){ 
    $name = $_POST['name'];
    $pass = $_POST['pwd'];
    $conpass = $_POST['cpwd'];
    $dob = $_POST['dob'];
    $gen = $_POST['gen'];
    $email = $_POST['email'];
    $dep = $_POST['dep'];

    if($name !='' || $email !='') {
        //Insert Query of SQL
        if($pass === $conpass) {
            // Check if username already exists
            $stmt = $conn->prepare("SELECT COUNT(username) FROM employee WHERE username = ?");
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();

            if ($count === 1) {
                echo '<script type="text/javascript">';
                echo ' alert("Select different username... Username already exists...!!!")';
                echo '</script>';
            } else {
                $stmt->close();

                // Insert the new employee record using prepared statement
                $stmt = $conn->prepare("INSERT INTO employee (username, userPassword, DOB, gender, email, dept) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $name, $pass, $dob, $gen, $email, $dep);
                if ($stmt->execute()) {
                    echo "Record inserted successfully";
                } else {
                    echo "Error inserting record: " . $stmt->error;
                }
                $stmt->close();
            }
        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Password fields do not match...!!!")';
            echo '</script>';
            exit();
        }
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Insertion Failed...Some Fields are Blank....!!!")';
        echo '</script>';
    }
}
?>
