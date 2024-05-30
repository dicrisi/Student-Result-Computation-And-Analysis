<?php
include('adminheader.php');
include('style.php');
include('config.php');

if(isset($_GET['select'])){
    $query2 = "select * from stureg where id='".$_GET['select']."'";
    //echo $query2;
    $result = mysql_query($query2);
    if(mysql_num_rows($result)){
        $row = mysql_fetch_assoc($result);
    }
}

?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Batch details</title>

   
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
            margin-top: 50px;
        }

        table {
            margin: 0 auto;
        }

        label, input {
            display: inline-block;
            margin-bottom: 10px;
        }

        label {
            width: 120px;
            text-align: right;
            margin-right: 10px;
        }
		<style>
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    td {
        text-align: center;
    }
</style>
    </style>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

   <center> <h2> Students Overall Percentage</h2></center>
 <br>
    <br>
    <br>

   <table align="center">
    <tr>
        <th>Batch</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><b>Batch 2018-2020</b></td>
        <td><a href="percent.php?batch=2018-2020">Click here</a></td>
    </tr>
    <tr>
        <td><b>Batch 2019-2021</b></td>
        <td><a href="percent2.php?batch=2019-2021">Click here</a></td>
    </tr>
    <tr>
        <td><b>Batch 2020-2022</b></td>
        <td><a href="percent3.php?batch=2020-2022">Click here</a></td>
    </tr>
    <tr>
        <td><b>Batch 2021-2023</b></td>
        <td><a href="percent4.php?batch=2021-2023">Click here</a></td>
    </tr>
	  <tr>
        <td><b>Batch 2022-2024</b></td>
        <td><a href="percent5.php?batch=2022-2024">Click here</a></td>
    </tr>
</table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>  <br>
    <br>
    <br>
    <br>
   
    <br>

    <?php
    include('footer.php');
    ?>
</body>

</html>
