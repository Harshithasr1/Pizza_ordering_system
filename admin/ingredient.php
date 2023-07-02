<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
if($_POST){
	$user = "root";
	$host="localhost";
	$pass = "";
	$db = "pizzeria";
	$table = "ingredient";

	$con = mysqli_connect($host, $user, $pass) or die('Connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_errno());
	$dbcon = mysqli_select_db($con, $db) or die ('Connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_errno());

	$i = $_POST['i_id'];
	$n = $_POST['iname'];
	$m = $_POST['customcuts'];
	$p  = $_POST['price'];
	$c = $_POST['category'];	

	// Check connection

	if($con->connect_error) 
	{
		die("Connection failed:" . $con->connect_error);
	}		

	$sql = "INSERT INTO ingredient(i_id, iname, customcuts, price, category) VALUES ('$i', '".$n."', '$m', '$p', '$c')";

	if ($con->query($sql) === TRUE) 
	{
		echo '<script> alert("Ingredient added successfully"); </script>';
	} 
	else{
	echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}
}
?>

<?php include('partials/menu_a.php'); ?>

	<style>
		
	label {
	display: inline-block;
	width: 150px;
	text-align: right;
	margin-left: 25%;	
	}
	
    </style>
     
    <div class="wrapper">
           
        <p style="color:black; font-size:160%; font-family:pristina; margin-left:-6%; text-align: center">Admin Management</p>
        <p style="color:black; font-size:140%; font-family:verdona; margin-left:-6%; text-align: center">Ingredient Info</p>

		<form action="ingredient.php" method = "POST">

		<label>Ingredient Id: </label>
        <input type="int" name="i_id"><br><br>
		
		<label for="category">Ingredient Name:</label>
		<select name="iname">
			<option>--- Choose ingredient ---</option>
			<option>Mushrooms............$2.00</option>
			<option>Pepperoni..............$2.50</option>
			<option>Green Peppers......$2.50</option>
			<option>Onions...................$2.00</option>
			<option>Chicken.................$2.00</option>						
			<option>Black Olives..........$1.85</option>			
			<option>Jalapenos.............$0.82</option>
			<option>Pineapple..............$1.5</option>
		</select><br><br>	
		<input type="submit"/>
		
		<label for="category">Customcuts: </label>
		<select name="customcuts">
			<option>--- Choose customcuts ---</option>
			<option>Brunoise Dice</option>
			<option>Paysanne cut</option>
			<option>Ground</option>
			<option>Sliced</option>
		</select><br><br>	
		<input type="submit"/>
		
		<label>Price: </label>
        <input type="varchar" name="price"><br><br>

        <label>Category: </label>
        <input type="varchar" name="category"><br><br>
       <br>
        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:47%" type="submit">Add ingredient</button><br><br>

        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:45%" type="submit">Remove ingredient</button>
		<br><br>
		</form>
    </div>

<?php include('partials/footer_a.php'); ?>