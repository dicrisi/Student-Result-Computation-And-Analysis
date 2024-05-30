<?php
include('header.php');
include('style.php');
include('config.php')
?>

<?php

if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `stureg` VALUES (null,'".$_POST['name']."','".$_POST['pwd']."','".$_POST['uimg']."','".$_POST['regno']."', '".$_POST['address']."' , '".$_POST['dept']."','".$_POST['email']."','".$_POST['mob']."' ,'".$_POST['pname']."','".$_POST['pmob']."','".$_POST['col']."','".$_POST['dob']."','".$_POST['sslc']."','".$_POST['psslc']."','".$_POST['phsc']."', '".$_POST['hsc']."','".$_POST['ug']."','".$_POST['pug']."', '".$_POST['batch']."','".$_POST['bloodgrp']."','".$_POST['community']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:userlogin.php");
//	exit;
 
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

   
  <style>
        body {
            background-image: url('cls.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: black;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 40%; /* Adjust the width as needed */
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 3px;
            text-align: left;
            font-size: 12px; /* Adjust the font size as needed */
        }

        label {
            display: block;
            margin-bottom: 3px;
        }

        input {
            width: calc(100% - 8px);
            padding: 3px;
            box-sizing: border-box;
        }
		  input[type="submit"] {
            width: auto; /* Set width to auto */
            padding: 5px 10px; /* Adjust padding as needed */
        }
    </style>
</head>

<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <h2>Students Registration</h2>

    <form method="post" action="">
        <table>
            <tr>
                <td><b>Name</b></td>
                <td><input type="text" name="name" required></td>
            </tr>
			 <tr>
                <td><b>Password</b></td>
                <td><input type="password" name="pwd" required></td>
            </tr>
				 <tr><td><b>Profile<b> </td>
                 <td><input type="file" name="uimg" required></td></tr>
			 <tr>
                <td><b>Registernumber</b></td>
                <td><input type="text" name="regno" required></td>
            </tr>
			 <tr>
                <td><b>Address</b></td>
                <td><input type="text" name="address" required></td>
            </tr>
			 <tr>
                <td><b>Department</b></td>
                <td><input type="text" name="dept" required></td>
            </tr>
			 <tr>
                <td><b>Email</b></td>
                <td><input type="email" name="email" required></td>
            </tr>
           
			 <tr>
                <td><b>Mobile</b></td>
                <td><input type="text" name="mob" required></td>
            </tr>
			 <tr>
                <td><b>ParentName</b></td>
                <td><input type="text" name="pname" required></td>
            </tr>
			 <tr>
                <td><b>ParentMblNum</b></td>
                <td><input type="text" name="pmob" required></td>
            </tr>
			 <tr>
  <td><b>Dayscholor/Hosteller</b></td>
  <td>
    <select name="col" required>
      <option value="dayscholor">Dayscholor</option>
      <option value="hosteller">Hosteller</option>
    </select>
  </td>
</tr>

              <tr>
                <td><b>DOB</b></td>
                <td><input type="date" name="dob" required></td>
            </tr>
			 <tr>
                <td><b>SSLC</b></td>
                <td><input type="text" name="sslc" required></td>
            </tr>
			 <tr>
                <td><b> SSLC School</b></td>
                <td><input type="text" name="psslc" required></td>
            </tr>
			 <tr>
                <td><b>HSC</b></td>
                <td><input type="text" name="hsc" required></td>
            </tr>
			 <tr>
                <td><b>HSC School</b></td>
                <td><input type="text" name="phsc" required></td>
            </tr>
		 <tr>
                <td><b>UG</b></td>
                <td><input type="text" name="ug" required></td>
            </tr>
			 <tr>
                <td><b>UG College</b></td>
                <td><input type="text" name="pug" required></td>
            </tr>

					 <tr>
  <td><b>Batch</b></td>
  <td>
    <select name="batch" required>
      <option value="2018-2020">2018-2020</option>
      <option value="2020-2022">2019-2021</option> 
	  <option value="2022-2024">2020-2022</option>
      <option value="2024-2026">2021-2023</option>
	    <option value="2024-2026">2022-2024</option>
    </select>
  </td>
</tr>

		     <tr>
                <td><b> BloodGroup</b></td>
                <td><input type="text" name="bloodgrp" required></td>
            </tr>
			 <tr>
                <td><b>Community</b></td>
                <td><input type="text" name="community" required></td>
            </tr>
           
        </table>
		 

        <br>

        <input type="submit" name="register" value="Register" style="color: #000000" />
        <br>
        <a href="userlogin.php" style="color: black;">Back </a>
   </form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <?php
   include('footer.php');
    ?>

</body>

</html>
