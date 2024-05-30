<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");



if(isset($_GET['select'])){
$query2 = "select * from stureg where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}

?>	


<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
  
                       <div class="container">




<form action="" method="post" enctype="multipart/form-data" name="addroom">
<center>

<style>
    body {
        background-image: url('cls.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        color: black;
    }

    h2 {
        color: white;
        font-family: verdana;
        font-size: 240%;
    }

    p {
        color: white;
        font-family: Georgia, serif;
        font-size: 100%;
        font-weight: bold;
    }

    form {
        margin: 0 auto;
        width: 40%; /* Adjust the width as needed */
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        margin-top: 50px;
    }

    input {
        width: calc(100% - 10px);
        padding: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="date"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    #button1 {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #button1:hover {
        background-color: #45a049;
    }
</style>
<br>
<br>
<br>
<br>
<center><font color="black" size="8">Update Students Details </font></center>
</br>

 <b> Id</b><br />
 <input name="id" type="text" value="<?php  echo $row['id']; ?>" readonly />
 <br />

<b> Name</b><br />
 <input name="name" type="text"  value="<?php  echo $row['name']; ?>" />
 <br /> 
<b>Password</b><br />
 <input name="pwd" type="text" value="<?php  echo $row['pwd']; ?>" /> 
 <br />

 <b>  Profile</b><br />
 <input name="uimg" type="text" value="<?php  echo $row['uimg']; ?>" />
 <br />
<b>RegisterNumber </b><br />
 <input name="regno" type="text" value="<?php  echo $row['regno']; ?>" />
 <br />
 <b>  Address</b><br />
 <input name="address" type="text" value="<?php  echo $row['address']; ?>" />
 <br />

<b>Department </b><br />
 <input name="dept" type="text"  value="<?php  echo $row['dept']; ?>" />
 <br /> 
<b>EmailId </b><br />
 <input name="email" type="text" value="<?php  echo $row['email']; ?>" /> 
 <br />
<b>Mobile </b><br />
 <input name="mob" type="text" value="<?php  echo $row['mob']; ?>" />
 <br />
 <b> ParentName </b><br />
 <input name="pname" type="text" value="<?php  echo $row['pname']; ?>" />
 <br />

<b>ParentsMobile </b><br />
 <input name="pmob" type="text"  value="<?php  echo $row['pmob']; ?>" />
 <br />
 <b>Dayscholar/hostellor </b><br />
 <input name="col" type="text" value="<?php  echo $row['col']; ?>" />
 <br />
<b>DOB </b><br />
 <input name="dob" type="date" value="<?php  echo $row['dob']; ?>" /> 
 <br />
 <b>SSLC </b><br />
 <input name="sslc" type="text" value="<?php  echo $row['sslc']; ?>" />
 </br>
  <b>SSLC School </b><br />
 <input name="psslc" type="text" value="<?php  echo $row['psslc']; ?>" />
 <br />
 <b>HSC </b><br />
 <input name="hsc" type="text" value="<?php  echo $row['hsc']; ?>" />
 <br />
  <b>HSC School </b><br />
 <input name="phsc" type="text" value="<?php  echo $row['phsc']; ?>" />
 <br />
  <b>UG </b><br />
 <input name="ug" type="text" value="<?php  echo $row['ug']; ?>" />
 <br />
  <b>UG College </b><br />
 <input name="pug" type="text" value="<?php  echo $row['pug']; ?>" />
 <br /> 
 <b>Batch  </b><br />
 <input name="batch" type="text" value="<?php  echo $row['batch']; ?>" />
 <br />
<b>BloodGroup </b><br />
 <input name="bloodgrp" type="text" value="<?php  echo $row['bloodgrp']; ?>" />
 <br />
<b>Community </b><br />
 <input name="community" type="text" value="<?php  echo $row['community']; ?>" />
 <br />

  <input type="submit" name="submit" value="Update" id="button1" />
  <br>

 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){

	$query = "update stureg set id='".$_POST['id']."', name='".$_POST['name']."', pwd='".$_POST['pwd']."', regno='".$_POST['regno']."' , address='".$_POST['address']."', dept='".$_POST['dept']."', email='".$_POST['email']."', mob='".$_POST['mob']."', pname='".$_POST['pname']."', pmob='".$_POST['pmob']."', dob='".$_POST['dob']."', sslc='".$_POST['sslc']."', psslc='".$_POST['psslc']."', hsc='".$_POST['hsc']."', phsc='".$_POST['phsc']."', ug='".$_POST['ug']."', pug='".$_POST['pug']."', batch='".$_POST['batch']."', bloodgrp='".$_POST['bloodgrp']."', community='".$_POST['community']."'  where id= '".$_GET['select']."'";
	echo $query;
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:viewstudent.php");
	exit;

 }

 
?>

<br>
<br>
<br>
<br>
<br>

<?php 
	include_once("footer.php");
	?>