<?php include('partials/menu_a.php'); ?>

	<style>
	
      label {
        display: inline-block;
        width: 150px;
        text-align: right;
		 margin-left:32%;	
      }
	  
    </style>
    
 
    <div class="wrapper">
      		
		<p style="color:black; font-size:160%; font-family:pristina; text-align: center">Admin Management</p>

        <p style="color:black; font-size:140%; font-family:verdona; text-align: center">Pizza Info</p>
          
   
		<label>Pizza Id: </label>

        <input type="varchar" name="ingredientid"><br><br>
		
		<label for="category">Pizza name:</label>
		<select name="category" id="category">
			<option>--- Choose a pizza ---</option>
			<option>Margarita........................$20</option>
			<option>Pepperoni........................$34.5</option>
			<option>Vegetarian........................$42.5</option>
			<option>Tropicana........................$34.5</option>			
			<option>Mamma Mia........................$56.7</option>
			<option>Fantastico........................$42.5</option>
		</select><br><br>
		
<label>Pizza cost: </label>

        <input type="varchar" name="ingredientid"><br><br>
		
        <label for="cuts">Pizza Size:</label>
		<select name="cuts" id="cuts">
			<option>--- Choose size ---</option>
			<option>Small</option>
			<option>Medium</option>	
			<option>Large</option>	
		</select><br><br>
		
		<label for="category">Pizza status:</label>
		<select name="category" id="category">
			<option>--- Select  ---</option>
			<option>Available</option>
			<option>Out of stock</option>
				
		</select><br><br>
		<br><br><br>
	    <button style="background-color:lightgray; border-color:blue; color:black; margin-left:45%" type="submit">Add to cart</button>
		<br><br>
	</div>
<?php include('partials/footer_a.php'); ?>
