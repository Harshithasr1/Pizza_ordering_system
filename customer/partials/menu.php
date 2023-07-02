<!DOCTYPE html>
<html lang="en">
  
<head>	
	<style>
		body{			
			background-image: url(../customer/partials/image5.jpg);		
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
 

	<div id= 'navbar'> 		
		<ul>
			<li>
				<a class = "btn active" aria-hidden ="true" href="index.php">&#x2302 Home</a><li>
			<li>
				<a class = "btn" aria-hidden ="true" href="custom.php">Customize Pizza</a><li>
			<li>
				<a class = "btn" aria-hidden ="true" href="sidedish.php">Side Dishes</a><li>
			<li>
				<a class = "btn" aria-hidden ="true" href="delivery.php">Delivery info</a><li>
			<li>
				<a class = "btn" aria-hidden ="true" href="login.php">Login/Register</a><li>
		</ul>		
	</div>

	<!-- <script>
		var btnContainer = document.getElementById("navbar");
		var btns = btnContainer.getElementsByClassName("btn");

		for (var index = 0; index < btns.length; index++) {
			btns[index].addEventListener('click', function()){
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace("active");
				this.className += " active";
			}
			
		}
	</script> -->

