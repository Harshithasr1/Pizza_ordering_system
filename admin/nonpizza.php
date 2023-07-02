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

        <p style="color:black; font-size:140%;font-family:verdona; text-align: center">Non-Pizza product info</p>

    		
		<label>Product Id: </label>

        <input type="varchar" name="employee id"><br><br>
				
		<label>Product Name: </label>
		
        <input type="varchar" name="item name"><br><br>
		
		<label>Price: </label>

        <input type="varchar" name="item id"><br><br>		

        <label>Description: </label>

        <input type="varchar" name="description"><br><br>
       
        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:51.8%" type="submit">Add item</button><br><br>

        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:50%" type="submit">Remove item</button>
        <br><br><br><br>
    </div>
<?php include('partials/footer_a.php'); ?>