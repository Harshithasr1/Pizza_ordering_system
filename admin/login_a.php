<?php

if($_POST){
$user = "root";
$host="localhost";
$pass = "";
$db = "pizzeria";
$table = "a_login";

$con = mysqli_connect($host, $user, $pass) or die( 'Connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_errno());
$dbcon=mysqli_select_db($con, $db) or die ( 'Connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_errno());


$username = $_POST['uname'];
$password = $_POST['pwd'];
$sql="insert ignore into $table values ('$username','$password')";
$result = mysqli_query($con, $sql) or die(" insert error :".mysqli_error($con));

if($result) {

          header("Location: ingredient.php");
          echo '<script> alert("Login Successful"); </script>';

}else{ echo "Not Successful"; }
}

?>

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
        
        label {
                display: inline-block;
                width: 150px;
                text-align: right;
                margin-left:28%;	
            }
        button1{
                display: flex;
                height: 1vh;
                align-items: flex-start;
                background-color: black;
                color: aquamarine;
                padding: 12px;
                border-radius: 10px;
               position: absolute;
               margin-left: 3em;
               cursor: pointer;    
            }

	</style>

    <meta charset="UTF-8">     
    <h1 style = "text-align: center; color:red; font-size:350%; font-family:chiller;">PIZZERIA</h1>
    <link rel="stylesheet" href="../css/customer.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
	
    <div class="wrapper">      
    
    <button1 type="submit" onclick="window.location.href = '../admin/back.php';">&laquo; Back to login</button1>
    <br><br>
        <p style="color:black; font-size:190%; font-family:pristina; text-align: center">Admin Login</p>
        
        <form action="login_a.php" method = "POST">
        
            <br><br><label>Username: </label>

            <input type="text" name="uname"><br><br>

            <label>Password: </label>

            <input type="password" name="pwd"><br><br> 

            <button style="background-color:powderblue; border-color:blue; color:black; margin-left:55.2%" 
            type="submit">Login</button><br><br>
            
            <button style="background-color:powderblue; border-color:blue; color:black;margin-left:46.2%" 
                type="submit" onclick="window.location.href = '../admin/register_a.php';">Click here to Register!</button>
            <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
        </form>
    </div>

    <div class = "footer">		
	    <p>Copyright &copy;2021 All rights reserved, Pizzeria.</p>		
    </div>

</html>