<!DOCTYPE html>
<html lang="en">
  
<head>	
	<style>
		body{			
			background-image: url(../admin/partials/image5.jpg);		
			background-size: cover;
			background-repeat: no-repeat;
			position: absolute;
		}
	</style>

    <meta charset="UTF-8">     
    <h1 style = "text-align: center; color:red; font-size:350%; font-family:chiller;">PIZZERIA</h1>
    <link rel="stylesheet" href="../css/customer.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
 
<body>	
	<div class = "login"> 
	<br><br>
	<br><br>
		<p style="color:black; font-size:190%; font-family:pristina; text-align: center">Select a mode to login </p>
		
		<button style="background-color:powderblue; border-color:blue; color:black;margin-left:46.2%" 
            type="submit" 
			onclick="window.location.href = '../admin/login_a.php';">Admin Login</button>
			<br><br>
		
		<button style="background-color:powderblue; border-color:blue; color:black;margin-left:46.2%" 
			type="submit" 
			onclick="window.location.href = '../employee/login_e.php';">Employee Login</button>
			<br><br>

		<button style="background-color:powderblue; border-color:blue; color:black;margin-left:46.2%" 
			type="submit" 
			onclick="window.location.href = '../customer/login.php';">User Login</button>
			<br><br>
			<br><br>
			<br><br>
			<br><br>
			<br><br>
			<br><br>
	
	</div>

	<div class = "footer">		
		<p>Copyright &copy;2021 All rights reserved, Pizzeria.</p>		
	</div>

</body>
</html>
