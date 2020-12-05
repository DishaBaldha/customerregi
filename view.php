<html>
    <head>
        <title>View Customer</title>
    </head>
    <body>


    <center>
        <table  class="tb_view" cellpadding="5">
            <caption style="margin-bottom: 10px;">
                <div style="border-bottom: 3px solid #008080;text-align: center;">
                    <h1 style="color:#ff0000;font-variant: all-petite-caps;text-shadow: 0px 0px 1px #333;">Customer Details</h1>
                </div>
            </caption>
            <thead>
			
                <tr>
					
                    <th>Name</th>
					<th>Address</th>
					<th>City</th>
                    <th>Email</th> 
                    <th>Contact</th>
                    <th>DOB</th>
					<th>password</th>
					
                </tr>
				
            </thead>
            <tbody>
                <?php
                $host = 'customer.cmh94zidvyek.us-east-1.rds.amazonaws.com';
                $user = 'admin';
                $password = 'admin123';
                $database = 'customer';
                $port = 3306;

               
                $con = mysqli_connect($host, $user, $password, $database, $port);
                $query = "SELECT * FROM `user`";
                $result = mysqli_query($con, $query);

                $c = 0;
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $data['name']; ?></td>
						<td><?php echo $data['address']; ?></td>
						<td><?php echo $data['city']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['contact']; ?></td>
                        <td><?php echo $data['dob']; ?></td>
						<td><?php echo $data['password']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                <?php ?>
            </tbody>
        </table>

    </center>