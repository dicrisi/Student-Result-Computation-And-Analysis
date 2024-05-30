<?php
include('userheader.php');
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
		color:black;
    }

    table.displaycontent {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }

    table.displaycontent th,
    table.displaycontent td {
        padding: 10px;
        border: 1px solid #000;
        text-align: center;
        font-size: 14px;
        background-color: lightblue;
        color: black;
    }

    table.displaycontent th {
        font-weight: bold;
    }

</style>

<form method="post">
    <div>
        <br>
        <br>
      
	

<br>
<br>
<br>
       <form  method="post"> 
 
      <div >
	  


             <h2 align="center">View Student Marks</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    	<th bgcolor=white><font color=black size=2>mid</font></th>
				<th bgcolor=white><font color=black size=2>Registernumber</font></th>
            
				<th bgcolor=white><font color=Red size=2>Exam</font></th>
			<th bgcolor=white><font color=black size=2> Subject1</font></th> 
			<th bgcolor=white><font color=black size=2>Subject2</font></th> 
			<th bgcolor=white><font color=black size=2>Subject3</font></th> 
		   <th bgcolor=white><font color=black size=2>Subject4 </font></th>
		    <th bgcolor=white><font color=black size=2>Subject5  </font></th>
			<th bgcolor=white><font color=black size=2>output1</font></th>
			<th bgcolor=white><font color=black size=2>output2</font></th>
			<th bgcolor=white><font color=black size=2>output3</font></th>
				<th bgcolor=white><font color=black size=2>output4</font></th>
			<th bgcolor=white><font color=black size=2>output5</font></th>
			<th bgcolor=white><font color=black size=2>Batch</font></th>
				<th bgcolor=white><font color=black size=2>Total Marks</font></th>
			<th bgcolor=white><font color=black size=2>Percentage </font></th>
			<th bgcolor=white><font color=black size=2>Grade </font></th>
			
			

		


			  
	</tr>


<br>
	<?php
	
 $query = "SELECT * FROM mark where  regno=	'".$_SESSION['login_user']."' ";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['mid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['regno']; ?></font></td>
	 
		<td bgcolor=white><font color=red size=2><?php echo $row['exam']; ?></font></td> 
         <td bgcolor=white><font color=black size=2><?php echo $row['sub1']; ?></font></td>
		   <td bgcolor=white><font color=black size=2><?php echo $row['sub2']; ?></font></td>
		   <td bgcolor=white><font color=black size=2><?php echo $row['sub3']; ?></font></td>
		     <td bgcolor=white><font color=black size=2><?php echo $row['sub4']; ?></font></td>
			   <td bgcolor=white><font color=black size=2><?php echo $row['sub5']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['output1']; ?></font></td> 
         <td bgcolor=white><font color=black size=2><?php echo $row['output2']; ?></font></td>
		   <td bgcolor=white><font color=black size=2><?php echo $row['output3']; ?></font></td>
		   <td bgcolor=white><font color=black size=2><?php echo $row['output4']; ?></font></td>
		   	<td bgcolor=white><font color=black size=2><?php echo $row['output5']; ?></font></td> 
			 	<td bgcolor=white><font color=black size=2><?php echo $row['batch']; ?></font></td> 
         <td bgcolor=white><font color=black size=2><?php echo $row['calculate']; ?></font></td>
		   <td bgcolor=white><font color=black size=2><?php echo $row['percen']; ?></font></td>
		   	   <td bgcolor=white><font color=black size=2><?php echo $row['gradeOutput']; ?></font></td>
		  

	  
		

            
		
		
		
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
<br><br>
<br>
<br>

<?php
include('footer.php');
?>
