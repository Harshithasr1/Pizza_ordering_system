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

        <p style="color:black; font-size:140%;font-family:verdona; text-align: center">Order log info</p>
		
		<label>Order Id: </label>

        <input type="varchar" name="order id"><br><br>
				
		<label>Pizza Id: </label>

        <input type="varchar" name="employee id"><br><br>
		
		<label>Customer Id: </label>

        <input type="varchar" name="employee id"><br><br>
		
		<label>Employee Id: </label>

        <input type="varchar" name="employee id"><br><br>
		
		<label>Order Status: </label>
		
        <input type="varchar" name="order status"><br><br>
		
		<label>Delivery Date: </label>
		
        <input type="varchar" name="order status"><br><br>
		
		<label>Amount Paid: </label>
		
        <input type="varchar" name="order status"><br><br>
		
		<label>Payment Mode: </label>
		
        <input type="varchar" name="order status"><br><br>
				       
        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:51.2%" type="submit">Add order</button><br><br>

        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:49.3%" type="submit">Remove order</button>
    </div>

<?php include('partials/footer_a.php'); ?>