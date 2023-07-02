<?php include('partials/menu.php'); ?>

<style>

    label {
        display: inline-block;
        width: 150px;
        text-align: right;
		margin-left:32%;	
      }
    </style>

<div class="customize">		
    <div class="wrapper">		
		<p style="color:black; font-size:160%; font-family:pristina; text-align: center">Menu...</p>    
		
		<p style="color:black; font-size:120%; font-family:verdona; text-align: center">Base Pizza.........Small: $10, Medium: $12, X-Large: $18</p>    
		
		<p style="color:black; font-size:120%; font-family:verdona; text-align: center">Extra Toppings.... $1.75</p>    

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
		
		<label for="category">Pizza ingredients:</label>
		<select name="category" id="category">
			<option>--- Choose a topping ---</option>
			<option>Mushrooms........................$2.00/option>
			<option>Pepperoni........................$2.50</option>
			<option>Green Peppers........................$2.50</option>
			<option>Onions........................$2.00</option>
			<option>Beef........................$2.00</option>						
			<option>Black Olives........................$</option>			
			<option>Jalapenos........................$0.82</option>
			<option>Pineapple........................$1.5</option>

		</select><br><br>
		
        <label for="cuts">Custom cuts:</label>
		<select name="cuts" id="cuts">
			<option>--- Choose type of cut ---</option>
			<option>Paysanne cut</option>
			<option>Brunoise Dice</option>			
		</select><br><br>
		
		<label>Pizza status: </label>

        <input type="varchar" name="ingredientid"><br><br>
		
		<label for="category">Quantity:</label>
		<select name="category" id="category">
			<option>--- Select quantity ---</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>			
		</select><br><br>
		<br><br>
	    <button style="background-color:lightgray; border-color:blue; color:black; margin-left:45%" type="submit">Add to cart</button>
	</div>
</div>

<?php include('partials/footer.php'); ?>
