<!DOCTYPE html>
<html>
    <head>
        <title>Employee Page</title>
        <style>

            body{
                background-color:#c3cfe6;
                font-size: 14px;
                text-align:center;
            }

            .parent{
                justify-content:center;
                align-items:center;
                margin:auto;
                position: absolute;
                width:40%;
                top: 56%;
                transform: translate(-50%, -50%);
                left: 50%;
                background-color:#b6c7e0;
                border-style:groove;
                border-radius:10px;
                text-align: right;
                padding:30px;
                font-family: sans-serif;
            }
            
            input{
                border-style:none;
                background-color:lavender;
                border-radius:5px;
                align-items:right;
                width:250px;
                height:20px;
            }

            .grid{
                display:grid;
                grid-template-columns:auto auto;
                gap:40px;
                padding:10px;
            }
        </style>
    </head>
    <body>
    <table width="100%" height="60" border="0" cellspacing="4" cellpadding="2" bgcolor="black">
	<tr>
		<td>
			<table width="500" border="0" align="center" cellpadding="1" cellspacing="3">
				<td width="80"> <a href="emp.php"><font face="Verdana, Geneva, sans-serif" color="white">
					<h3>Home</h3></font></a>
				</td>

                <td width="80"> <font face="Verdana, Geneva, sans-serif" color="white">
					<h3>View Report</h3> </font>
				</td>
			</table>
		</td>
	</tr>
    </table>

    <div class="parent">
            <h2 align="center">New User Registration</h2>
            <div class="grid">
            <form action="newreg.php" method="post">
                <label> User Name <input type = "Text" name = "name" size="30"/> </label><br><br>
                <label> Password <input type = "password" name ="pwd" size="30"/> </label><br><br>
                <label> Confirm Password <input type = "password" name ="cpwd" size="30"/> </label><br><br>
                <label> Date of Birth <input type = "Text" name ="dob" size="30"/> </label><br><br>
                <div style="text-align:left">
                <input type="radio" name = "gen" value = "Male" style="text-align:left" /> Male 
                <input type="radio" name = "gen" value = "Female" style="text-align:left"/> Female 
                <input type="radio" name = "gen" value = "Not Defined" style="text-align:left"/> Rather Not Say 
                </div>
                <label> email-id <input type = "text" name ="email" size="30"/> </label><br><br>
                <label> Department <input type = "text" name ="dep" size="30"/> </label><br><br>  
            </div>
            <div style="text-align:center">
                <input type="submit" name="submit" value="Register New User" 
                style="background-color:green;color:white;border-style:groove;padding:10px;border-radius:7px;height:40px;left:50%;"/>
                <input type="reset" name="reset" value="Reset Form" 
                style="background-color:green;color:white;border-style:groove;padding:10px;border-radius:7px;height:40px;left:50%;"/>
            </div>
            </form>
            
    </div>
    </body>
</html>