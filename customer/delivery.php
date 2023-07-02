<?php include('partials/menu.php'); ?>

<style>

    label {
        display: inline-block;
        width: 150px;
        text-align: right;
		 margin-left:32%;	
      }
    </style>

<div class="delivery">		
    <div class="wrapper">
		<p style="color:black; font-size:160%; font-family:pristina; text-align: center">Customer Info..</p>    

		<label>Customer Id: </label>

        <input type="varchar" name="c_fname"><br><br>
		
		<label>Street: </label>

        <input type="varchar" name="address"><br><br>
		
		<label>City: </label>

        <input type="int" name="address"><br><br>
		
		<label>State: </label>

        <input type="int" name="address"><br><br>

        <label>Zip Code: </label>

        <input type="varchar" name="address"><br><br>
		
		<label>Email Id: </label>

        <input type="varchar" name="email"><br><br>
		
		<label>Phone: </label>

        <input type="varchar" name="phone"><br><br>
		
		<label for="category">Payment mode:</label>
		<select name="category" id="category">
			<option>--- Select mode ---</option>
			<option>Cash on Delivery</option>
			<option>Debit/Credit</option>			
		</select><br><br>
				
       <br><br>
        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:45%" type="submit">Checkout</button><br><br>

    </div>
</div>

<?php include('partials/footer.php'); ?>