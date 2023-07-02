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

        <p style="color:black; font-size:140%; font-family:verdona; text-align: center">Update Order Status</p>
		
		<label>Order Id: </label>

        <input type="varchar" name="order id"><br><br>
				
		<label>Order status: </label>
		
		&nbsp 
		<input type="radio" name="q1" value="1" />Out for delivery<br><br>
				
		&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp &nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp &nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp		&nbsp&nbsp	&nbsp		&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp 
		<input type="radio" name="q1" value="2" />Delivered<br><br>
				
		&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp &nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp &nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp		&nbsp&nbsp	&nbsp		&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp 
		<input type="radio" name="q1" value="3" />Delivery failed<br><br>
			<br><br>					            		
	    <button style="background-color:powderblue; border-color:blue; color:black; margin-left:46.5%" type="submit">Submit</button>
		<br><br><br><br>	
	</div>

<?php include('partials/footer_a.php'); ?>