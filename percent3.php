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
        width: 30%;
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

        <h2 align="center">Batch Overall Mark Details</h2>
			<h5 align="center"> Batch 2020-2022</h5>

        <table class="displaycontent">
            <tr>
                <th>Percentage</th>
            </tr>
            <?php
            $batch = '2020-2022'; // Specify the batch
            $query = "SELECT AVG(percen) AS overall_percentage FROM mark WHERE batch='$batch'";
            $result = mysql_query($query) or die(mysql_error());
            $row = mysql_fetch_assoc($result);
            $overall_percentage = $row['overall_percentage'];
            ?>
            <tr>
                <td><?php echo $overall_percentage; ?></td>
            </tr>
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
        
    header("location:percentage.php");
    exit;
    }
?>
<br><br>

<?php
include('footer.php');
?>
