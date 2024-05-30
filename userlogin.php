<?php
include('header.php');
include('style.php');
include('config.php');
error_reporting(0);
?>
<?php
if(isset($_POST['login']))
	  {
	$query ="select * from  stureg where regno='".$_POST['regno']."' and pwd ='".$_POST['pwd']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);

		$_SESSION['name'] = $row['name'];
		$_SESSION['login_user'] = $row['regno'];
	    $_SESSION['address'] = $row['address'];
		$_SESSION['dept'] = $row['dept'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['mob'] = $row['mob'];
		$_SESSION['pname'] = $row['pname'];
		$_SESSION['pmob'] = $row['pmob'];
		$_SESSION['dob'] = $row['dob'];
		$_SESSION['bloodgrp'] = $row['bloodgrp'];

		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
	 }
 } 
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Login</title>

     <style>
        body {
            background-image: url('imgg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: black;
        }

        form {
            width: 300px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background-color: lightblue;
            border: 2px solid #000;
            border-radius: 8px;
            margin-top: 50px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
		 h2 {
            text-align: center;
            font-size: 48px;
            color: #ffcc00; /* Change the color as needed */
            margin: 20px 0;
            text-shadow: 2px 2px 4px #333; /* Add text shadow for emphasis */
        }
    </style>
</head>
<br>
<br>
<br>
<br>
<br>
<br>

<body>

    <h2><center>Students Login</center></h2>
    <form method="post" action="">
        <label for="regno"><b>Register Number</b></label>
        <input type="text" placeholder="Enter Register Number" name="regno" required>

        <br>

        <label for="pwd"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <br>

        <input type="submit" name="login" value="Login" />
        <br>
		   <a href="sturegister.php" style="color: black;">New Registration </a>
    </form>
</body>
<br>


    <?php
    include('footer.php');
    ?>

</body>

</html>
