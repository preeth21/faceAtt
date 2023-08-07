<!DOCTYPE html>
<html>
    <head>
        <title>Employee Page</title>
        <style>

            body{
                background-color:#debfb1;
                font-family: Times;
                color: white;
            }

            .parent{
                position: absolute;
                width:25%;
                top: 55%;
                transform: translate(-50%, -50%);
                left: 50%;
                background-color:#dcbaab;
                border-style:groove;
                border-radius:10px;
                padding:30px;
                color:black;
            }

            input{
                background-color: #debfb1;
                border-radius:5px;
                border-style:ridge;
            }

            th, td {
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <form action="report.php" method="post">
    <table width="100%" height="80" border="0" cellspacing="5" cellpadding="2" bgcolor="#90563b">
	<tr>
		<td width="110" color="white">
			<h2>View Report</h2>
		</td>
        <td width="90" color="white">
			<h4>Start Date</h4><input type="Text" name="sdate" placeholder="YYYY-MM-DD"/>
		</td>
        <td width="20" color="white">
			<h5>to</h5>
		</td>
        <td width="90" color="white">
			<h4>End Date</h4><input type="Text" name="edate" placeholder="YYYY-MM-DD"/>
		</td>
        <td width="70" color="white">
			<input type="submit" value="Go" 
            style="border-style:none;background-color:#90563b;color:white;font-family:Times;font-weight:900"/>
		</td>
		</td>
	</tr>
    </table>
    </form>
    
    <?php
    include "connect.php";
    session_start();
    
    $name = $_SESSION['username'];
    $val = "SELECT * from employee WHERE username = '$name'";
    $res = mysqli_query($conn, $val);
    $row = mysqli_fetch_assoc($res);
?>

    <div class="parent">
        <h2 align="center">EMPLOYEE PROFILE</h2>
        <table  align="center">
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><?php echo $row['username']; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><?php echo $row['userPassword']; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td><?php echo $row['DOB']; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?php echo $row['gender']; ?></td>
            </tr>
            <tr>
                <td>email-id</td>
                <td>:</td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <td>Department</td>
                <td>:</td>
                <td><?php echo $row['dept']; ?></td>
            </tr>
        </table>
    </div>
    </body>
</html>