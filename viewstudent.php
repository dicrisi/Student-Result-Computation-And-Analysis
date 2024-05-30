<?php
include('adminheader.php');
include('style.php');
include('config.php');
error_reporting(0);
session_start();
?>

<style>
    body {
        background-image: url('cls.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        color: black;
    }

    table.displaycontent {
        border-collapse: collapse;
        width: 100%;
        margin: 20px auto;
    }

    table.displaycontent th,
    table.displaycontent td {
        padding: 5px;
        border: 1px solid #000;
        text-align: center;
        font-size: 10px;
        background-color: lightblue;
        color: black;
    }

    table.displaycontent th {
        font-weight: bold;
    }

    table.displaycontent td a {
        text-decoration: none;
        color: blue;
        font-size: 10px;
    }
</style>


<form method="post">

    <div>

        <br>
        <br>
        <br>
        <br>

        <br>

        <h2 align="center">Students Details</h2>

        <table class="displaycontent">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
				 <th>Profile</th>
                <th>Register Number</th>
                <th>Address</th>
                <th>Department</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Parent Name</th>
                <th>Parent Mobile</th>
				 <th>Dayscholor/Hosteller</th>
                <th>DOB</th>
				 <th>SSLC</th>
				  <th>SSLC School</th>
				  <th>HSC</th>
				    <th>HSC School</th>
					  <th>UG</th>
					    <th>UG College</th>
						   <th>Batch</th>
                <th>Blood Group</th>
				 <th>Community</th>
				 <th> Add Marks</th>
				  <th> Update</th>
				    <th>Delete </th>
            </tr>
            <?php
             $query = "SELECT * FROM stureg WHERE batch='2018-2020'";
            $result = mysql_query($query) or die(mysql_error());
            while ($row = mysql_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['pwd']; ?></td>
				
		<td><img src="<?php echo $row['uimg'];?>" width="50" height="50"></td>
                    <td><?php echo $row['regno']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['dept']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mob']; ?></td>
                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['pmob']; ?></td>
					  <td><?php echo $row['col']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
					  <td><?php echo $row['sslc']; ?></td>
					    <td><?php echo $row['psslc']; ?></td>
					    <td><?php echo $row['hsc']; ?></td>
						 <td><?php echo $row['phsc']; ?></td>
						  <td><?php echo $row['ug']; ?></td>
						   <td><?php echo $row['pug']; ?></td>
						      <td><?php echo $row['batch']; ?></td>
                    <td><?php echo $row['bloodgrp']; ?></td>
					  <td><?php echo $row['community']; ?></td>
					  <td ><a href="addmarks.php?select=<?php echo $row['id'];?>">Add marks</a></font></td>
					  <td ><a href="update.php?select=<?php echo $row['id'];?>">Update</a></font></td>
		<td><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>
                </tr>
            <?php }  ?>
        </table>
    </div>

</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from stureg where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewstudent.php");
	exit;
	}
?>
<br><br>

<?php
include('footer.php');
?>
