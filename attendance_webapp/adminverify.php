<?php 
session_start(); 
include "connect.php";

if (isset($_POST['un']) && isset($_POST['pwd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;  
	}

	$uname = validate($_POST['un']);
	$pass = validate($_POST['pwd']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT username, userPassword FROM admin WHERE username='$uname' AND userPassword='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['userPassword'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['userPassword'] = $row['userPassword'];
            	header("Location: admin.php");
            }else{
				echo '<script type="text/javascript">';
                echo ' alert("Incorrect Username or Password...!!!")';  
                echo '</script>';
		        exit();
			}
		}else{
			echo '<script type="text/javascript">';
            echo ' alert("Incorrect Username or Password...!!!")';  
            echo '</script>';
	        exit();
		}
	}
	
}else{
	header("Location: adminlogin.php");
	exit();
}
?>