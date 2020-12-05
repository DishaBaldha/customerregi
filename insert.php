<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
	
    <?php
    if (isset($_POST['add'])) {
        
        $host = 'customer.cmh94zidvyek.us-east-1.rds.amazonaws.com';
        $user = 'admin';
        $password = 'admin123';
        $database = 'customer';
        $port = 3306;

        $c_name = $_POST['c_name'];
		$c_address = $_POST['c_address'];
        $c_city = $_POST['c_city'];
		$c_email = $_POST['c_email'];
        $c_contact = $_POST['c_contact'];
        $c_dob = $_POST['c_dob'];
		$c_password = $_POST['c_password'];

        $conn = mysqli_connect($host, $user, $password, $database, $port);



        if ($conn) {
            
        } else {
            die("Database Connection Failed.");
        }

        $query = "INSERT INTO `user`(`name`, `address`,`city`, `email`, contact, dob,password) VALUES 
		('" . $c_name . "','" . $c_address . "','" . $c_city . "','" . $c_email . "','" . $c_contact . "','" . $c_dob . "','" . $c_password . "')";
		
		
        $res = mysqli_query($conn, $query);

        if ($res > 0) {
            header('location:view.php');
        }
    }
    ?>
    <body>
    <center>
	<h1 style="color:#ff0000;font-variant: all-petite-caps;text-shadow: 0px 0px 1px #333;">Customer Registration form</h1>
        <form  border="5" method = "post">
            <table width = "400" border = "0" cellspacing = "1" 
                   cellpadding = "2">

                <tr>
                    <td width = "100"><b>Name</b></td>
                    <td><input name = "c_name" type = "text" 
                               id = "c_name" placeholder="Name" required></td>
							   
                </tr>
				
				<tr>
                    <td width = "100"><b>Address</b></td>
                    <td><textarea input name = "c_address"  
                               id = "c_address" placeholder="Address" required></textarea></td>
							   
                </tr>
				
				<tr>
                    <td width = "100"><b>City</b></td>
                    <td><input name = "c_city" type = "text" 
                               id = "c_city" placeholder="City" required></td>
                </tr>

                <tr>
                    <td width = "100"><b>Email</b></td>
                    <td><input name = "c_email" type = "text" 
                               id = "c_email" placeholder="Email" required></td>
                </tr>

                
                <tr>
                    <td width = "100"><b>Contact</b></td>
                    <td><input name = "c_contact" type = "text" 
                               id = "c_contact" placeholder="Contact" required></td>
                </tr>
				
                <tr>
                    <td width = "100"><b>Dob</b></td>
                   <td><input name = "c_dob" type="date" 
                               id = "c_dob" placeholder="Date Of Birth" required><td>
                   
                </tr>
				
				<tr>
                    <td width = "100"><b>Password</b></td>
                    <td><input name = "c_password" type = "password" 
                               id = "c_password" placeholder="Password" required></td>
                </tr>

                <tr>
                    <td width = "100"> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td width = "100"> </td>
                    <td>
						<button name="add" type="submit" id = "add" class="registerbtn" value = "Add register"><b>Register</b></button>
						
                    </td>
                </tr>

            </table>
        </form>
        <a href="view.php"><button>View Customer Details</button></a>
    </center>
</body>
</html>











