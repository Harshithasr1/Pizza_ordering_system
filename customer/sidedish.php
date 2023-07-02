<?php include('partials/menu.php'); ?>

<style>

    label {
        display: inline-block;
        width: 150px;
        text-align: right;
		margin-left:32%;	
      }
    </style>

<div class="sidedish">		
    <div class="wrapper">			
		<p style="color:black; font-size:160%; font-family:pristina; text-align: center">Menu..</p>    
							
		<label for="category">Non Pizza Items:</label>
		<select name="category" id="category">
			<option>--- Choose an item ---</option>
			<option>Spaghetti........................$3.23</option>
			<option>Lasagna.........................$2.34</option>
			<option>Macroni & Cheese.........$5.12</option>
			<option>Apple Pies......................$10.12</option>
			<option>Cinnamon Sticks.............$7.12</option>			
			<option>Choclate Brownie.............$2.12</option>
			<option>Pepsi................................$5.12</option>
			<option>Mountain Dew..................$4.54</option>
			<option>Mist Twist.........................$3.12</option>			
		</select><br><br>
		      		
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
		<br><br>
		<br><br>
		<br><br>
		<br><br>
	</div>
</div>

<?php include('partials/footer.php'); ?>