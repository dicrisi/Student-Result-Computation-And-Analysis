<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);
	?>


<?php
if(isset($_GET['select'])){
$query2 = "select * from mark where mid='".$_GET['select']."'";
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

body {
  background-image: url('cls.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color: black;
}
</style>
<br>
<br>
<br>
<br>
<center><font color="white" size="8">Update Marks Details </font></center>
</br>

      <table align="center">
        <tr>
          <td><b>MID</b></td>
          <td><input name="mid" type="text" value="<?php echo $row['mid']; ?>" /></td>
        </tr>
        <tr>
          <td><b>RegisterNumber</b></td>
          <td><input name="regno" type="text" value="<?php echo $row['regno']; ?>" /></td>
        </tr>
       
        <tr>
          <td><b>Exam</b></td>
          <td><input name="exam" type="text" value="<?php echo $row['exam']; ?>" /></td>
        </tr>
         <tr>
          <td><b>Subject1</b></td>
          <td><input name="sub1" type="text" value="<?php echo $row['sub1']; ?>" /></td>
          <td><b>output1</b></td>
          <td><input name="output1" type="text" value="<?php echo $row['output1']; ?>" /></td>
        </tr>
        <tr>
          <td><b>Subject2</b></td>
          <td><input name="sub2" type="text" value="<?php echo $row['sub2']; ?>" /></td>
          <td><b>output2</b></td>
          <td><input name="output2" type="text" value="<?php echo $row['output2']; ?>" /></td>
        </tr>
        <tr>
          <td><b>Subject3</b></td>
          <td><input name="sub3" type="text" value="<?php echo $row['sub3']; ?>" /></td>
          <td><b>output3</b></td>
          <td><input name="output3" type="text" value="<?php echo $row['output3']; ?>" /></td>
        </tr>
        <tr>
          <td><b>Subject4</b></td>
          <td><input name="sub4" type="text" value="<?php echo $row['sub4']; ?>" /></td>
          <td><b>output4</b></td>
          <td><input name="output4" type="text" value="<?php echo $row['output4']; ?>" /></td>
        </tr>
        <tr>
          <td><b>Subject5</b></td>
          <td><input name="sub5" type="text" value="<?php echo $row['sub5']; ?>" /></td>
          <td><b>output5</b></td>
          <td><input name="output5" type="text" value="<?php echo $row['output5']; ?>" /></td>
        </tr>
      </table>
	   <b>Batch  </b><br />
 <input name="batch" type="text" value="<?php  echo $row['batch']; ?>" />
 <br />

  <b>Total Marks </b><br />
 <input name="calculate" type="text" value="<?php  echo $row['calculate']; ?>" />
 <br />
 <b>Percentage </b><br />
 <input name="percen" type="text" value="<?php  echo $row['percen']; ?>" />
 <br />
  <b>Grade </b><br />
 <input name="gradeOutput" type="text" value="<?php  echo $row['gradeOutput']; ?>" />
 <br />




  <input type="submit" name="submit" value="Update" id="button1" />
  <br>

 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){

	$query = "update mark set mid='".$_POST['mid']."', regno='".$_POST['regno']."',  exam='".$_POST['exam']."' , sub1='".$_POST['sub1']."', sub2='".$_POST['sub2']."', sub3='".$_POST['sub3']."', sub4='".$_POST['sub4']."', sub5='".$_POST['sub5']."', output1='".$_POST['output1']."', output2='".$_POST['output2']."', output3='".$_POST['output3']."', output4='".$_POST['output4']."', output5='".$_POST['output5']."', batch='".$_POST['batch']."', calculate='".$_POST['calculate']."', percen='".$_POST['percen']."', gradeOutput='".$_POST['gradeOutput']."' where mid= '".$_GET['select']."'";
	echo $query;
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:viewmarks.php");
	exit;
//}
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