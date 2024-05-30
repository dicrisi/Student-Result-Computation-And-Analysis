<?php
include('header.php');
include('style.php');

if (isset($_POST['login'])) {
    if ($_POST['uid'] == "admin" && $_POST['password'] == "admin") {
        echo '<script>alert("Login success");</script>';
        header("location:adminhome.php");
        exit();
    } else {
        echo '<script>alert("Login Failed");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

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
            background-color: #green;
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



<body>

    <h2><center>Admin Login</center></h2>

    <form method="post" action="">
        <label for="uid"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uid" required>

        <br>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <br>

        <input type="submit" name="login" value="Login" style="color: black" />
		<a href="index.php" style="color: black;">Back</a>

    </form>
<br>
<br><br>



    <?php
    include('footer.php');
    ?>

</body>

</html>
