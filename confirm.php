<!DOCTYPE html>

<html lang="en">
  
<head>
  
    <meta charset="UTF-8">
  
    <title>CREATE YOUR PIZZA</title>
	<style>
	 body{
	background-image: url("image5.jpg");	
	background-size: 110%;
	}
	label {
	display: inline-block;
	width: 150px;	
	text-align: right;	
	}
      
    </style>
    
</head>

<body>
 
    <div class="wrapper">
      
        <h1 style = "text-align:center; color:red; font-size:300%; font-family:chiller;" >CREATE YOUR PIZZA</h1>
          
     <form action="customsql.php" method="post">
        
        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

          <?php } ?>
		  
		<br><br>
		
		<p style="color:black; font-size:160%; font-family:pristina; text-align: center">ORDER CONFIRMATION...</p><br><br>   
		
		
		&nbsp &nbsp	&nbsp	&nbsp &nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp		&nbsp&nbsp	&nbsp		&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp 
		<label>Order Id: </label>
		<input type="varchar" name="orderid"><br><br>
    	&nbsp &nbsp	&nbsp	&nbsp &nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp		&nbsp&nbsp	&nbsp		&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp 
		
		<label>Order Total: </label>
		<input type="varchar" name="amountpaid"><br><br>
		<br><br><br>
			<button style="background-color:lightgray; border-color:blue; color:black; margin-left:45%" type="submit">Click to Place Order</button>
