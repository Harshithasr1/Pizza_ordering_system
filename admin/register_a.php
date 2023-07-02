<?php include('partials/menu.php'); ?>

<style>	
      label {
        display: inline-block;
        width: 150px;
        text-align: right;
		 margin-left:32%;	
      }
</style>
    
 
    <div class="wrapper">      
     
        <p style="color:black; font-size:160%; font-family:pristina; text-align:center">New User Registration</p>
    		  
		<label>Employee Id: </label>

        <input type="varchar" name="employee id"><br><br>
		
		<label>FirstName: </label>

        <input type="text" name="firstname"><br><br>
		
		<label>LastName: </label>

        <input type="text" name="lastname"><br><br>
				
		<label>Email Id: </label>

        <input type="varchar" name="email"><br><br>
		
		<label>Phone: </label>

        <input type="varchar" name="phone"><br><br>

        <label>Username: </label>

        <input type="text" name="username"><br><br>

        <label>Password: </label>

        <input type="password" name="password"><br><br>
		
		<label>Street: </label>

        <input type="text" name="street"><br><br>
		
		<label>State: </label>

        <input type="int" name="address"><br><br>

        <label>Zip Code: </label>

        <input type="varchar" name="address"><br><br>

        <button style="background-color:powderblue; border-color:blue; color:black; margin-left:51.9%" type="submit">Register</button>

    </div>

<?php include('partials/footer.php'); ?>