<?php
include('adminheader.php');
include('style.php');
include('config.php');

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
        background-color: white;
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

<br>
<br>
<br>
<form method="post">
    <div>
        <div>
           <center> <h3>Batch 2018-2020</h3></center>
            <table border="2" cellspacing="6" class="displaycontent" width="1000" style="border:4px solid lightblue;" align="center">
                <tr>
                    <th>mid</th>
                    <th>Registernumber</th>
                    <th>Exam</th>
                    <th>Subject1</th>
                    <th>Subject2</th>
                    <th>Subject3</th>
                    <th>Subject4</th>
                    <th>Subject5</th>
                    <th>output1</th>
                    <th>output2</th>
                    <th>output3</th>
                    <th>output4</th>
                    <th>output5</th>
                    <th>Batch</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                $query_batch1 = "SELECT * FROM mark WHERE batch='2018-2020'";
                $result_batch1 = mysql_query($query_batch1) or die(mysql_error());

                while ($row_batch1 = mysql_fetch_assoc($result_batch1)) {
                    ?>
                    <tr>
                        <td><?php echo $row_batch1['mid']; ?></td>
                        <td><?php echo $row_batch1['regno']; ?></td>
                        <td><?php echo $row_batch1['exam']; ?></td>
                        <td><?php echo $row_batch1['sub1']; ?></td>
                        <td><?php echo $row_batch1['sub2']; ?></td>
                        <td><?php echo $row_batch1['sub3']; ?></td>
                        <td><?php echo $row_batch1['sub4']; ?></td>
                        <td><?php echo $row_batch1['sub5']; ?></td>
                        <td><?php echo $row_batch1['output1']; ?></td>
                        <td><?php echo $row_batch1['output2']; ?></td>
                        <td><?php echo $row_batch1['output3']; ?></td>
                        <td><?php echo $row_batch1['output4']; ?></td>
                        <td><?php echo $row_batch1['output5']; ?></td>
                        <td><?php echo $row_batch1['batch']; ?></td>
                        <td><?php echo $row_batch1['calculate']; ?></td>
                        <td><?php echo $row_batch1['percen']; ?></td>
                        <td><?php echo $row_batch1['gradeOutput']; ?></td>
                        <td><a href="updat.php?select=<?php echo $row_batch1['mid']; ?>">Update</a></td>
                        <td><a href="?delete=<?php echo $row_batch1['mid']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <br>
        <br>
        <br>

        <div>
           <center> <h3>Batch 2019-2021</h3></center>
            <table border="2" cellspacing="6" class="displaycontent" width="1000" style="border:4px solid lightblue;" align="center">
                <tr>
                    <th>mid</th>
                    <th>Registernumber</th>
                    <th>Exam</th>
                    <th>Subject1</th>
                    <th>Subject2</th>
                    <th>Subject3</th>
                    <th>Subject4</th>
                    <th>Subject5</th>
                    <th>output1</th>
                    <th>output2</th>
                    <th>output3</th>
                    <th>output4</th>
                    <th>output5</th>
                    <th>Batch</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                $query_batch2 = "SELECT * FROM mark WHERE batch='2019-2021'";
                $result_batch2 = mysql_query($query_batch2) or die(mysql_error());

                while ($row_batch2 = mysql_fetch_assoc($result_batch2)) {
                    ?>
                    <tr>
                        <td><?php echo $row_batch2['mid']; ?></td>
                        <td><?php echo $row_batch2['regno']; ?></td>
                        <td><?php echo $row_batch2['exam']; ?></td>
                        <td><?php echo $row_batch2['sub1']; ?></td>
                        <td><?php echo $row_batch2['sub2']; ?></td>
                        <td><?php echo $row_batch2['sub3']; ?></td>
                        <td><?php echo $row_batch2['sub4']; ?></td>
                        <td><?php echo $row_batch2['sub5']; ?></td>
                        <td><?php echo $row_batch2['output1']; ?></td>
                        <td><?php echo $row_batch2['output2']; ?></td>
                        <td><?php echo $row_batch2['output3']; ?></td>
                        <td><?php echo $row_batch2['output4']; ?></td>
                        <td><?php echo $row_batch2['output5']; ?></td>
                        <td><?php echo $row_batch2['batch']; ?></td>
                        <td><?php echo $row_batch2['calculate']; ?></td>
                        <td><?php echo $row_batch2['percen']; ?></td>
                        <td><?php echo $row_batch2['gradeOutput']; ?></td>
                        <td><a href="updat.php?select=<?php echo $row_batch2['mid']; ?>">Update</a></td>
                        <td><a href="?delete=<?php echo $row_batch2['mid']; ?>">Delete</a></td>
                    </tr>

      <?php } ?>
            </table>
        </div>



        <br>
        <br>
        <br>

        <div>


<center> <h3>Batch 2020-2022</h3></center>
            <table border="2" cellspacing="6" class="displaycontent" width="1000" style="border:4px solid lightblue;" align="center">
                <tr>
                    <th>mid</th>
                    <th>Registernumber</th>
                    <th>Exam</th>
                    <th>Subject1</th>
                    <th>Subject2</th>
                    <th>Subject3</th>
                    <th>Subject4</th>
                    <th>Subject5</th>
                    <th>output1</th>
                    <th>output2</th>
                    <th>output3</th>
                    <th>output4</th>
                    <th>output5</th>
                    <th>Batch</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                $query_batch1 = "SELECT * FROM mark WHERE batch='2020-2022'";
                $result_batch1 = mysql_query($query_batch1) or die(mysql_error());

                while ($row_batch1 = mysql_fetch_assoc($result_batch1)) {
                    ?>
                    <tr>
                        <td><?php echo $row_batch1['mid']; ?></td>
                        <td><?php echo $row_batch1['regno']; ?></td>
                        <td><?php echo $row_batch1['exam']; ?></td>
                        <td><?php echo $row_batch1['sub1']; ?></td>
                        <td><?php echo $row_batch1['sub2']; ?></td>
                        <td><?php echo $row_batch1['sub3']; ?></td>
                        <td><?php echo $row_batch1['sub4']; ?></td>
                        <td><?php echo $row_batch1['sub5']; ?></td>
                        <td><?php echo $row_batch1['output1']; ?></td>
                        <td><?php echo $row_batch1['output2']; ?></td>
                        <td><?php echo $row_batch1['output3']; ?></td>
                        <td><?php echo $row_batch1['output4']; ?></td>
                        <td><?php echo $row_batch1['output5']; ?></td>
                        <td><?php echo $row_batch1['batch']; ?></td>
                        <td><?php echo $row_batch1['calculate']; ?></td>
                        <td><?php echo $row_batch1['percen']; ?></td>
                        <td><?php echo $row_batch1['gradeOutput']; ?></td>
                        <td><a href="updat.php?select=<?php echo $row_batch1['mid']; ?>">Update</a></td>
                        <td><a href="?delete=<?php echo $row_batch1['mid']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <br>
        <br>
        <br>

        <div>
           <center> <h3>Batch 2021-2023</h3></center>
            <table border="2" cellspacing="6" class="displaycontent" width="1000" style="border:4px solid lightblue;" align="center">
                <tr>
                    <th>mid</th>
                    <th>Registernumber</th>
                    <th>Exam</th>
                    <th>Subject1</th>
                    <th>Subject2</th>
                    <th>Subject3</th>
                    <th>Subject4</th>
                    <th>Subject5</th>
                    <th>output1</th>
                    <th>output2</th>
                    <th>output3</th>
                    <th>output4</th>
                    <th>output5</th>
                    <th>Batch</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                $query_batch2 = "SELECT * FROM mark WHERE batch='2021-2023'";
                $result_batch2 = mysql_query($query_batch2) or die(mysql_error());

                while ($row_batch2 = mysql_fetch_assoc($result_batch2)) {
                    ?>
                    <tr>
                        <td><?php echo $row_batch2['mid']; ?></td>
                        <td><?php echo $row_batch2['regno']; ?></td>
                        <td><?php echo $row_batch2['exam']; ?></td>
                        <td><?php echo $row_batch2['sub1']; ?></td>
                        <td><?php echo $row_batch2['sub2']; ?></td>
                        <td><?php echo $row_batch2['sub3']; ?></td>
                        <td><?php echo $row_batch2['sub4']; ?></td>
                        <td><?php echo $row_batch2['sub5']; ?></td>
                        <td><?php echo $row_batch2['output1']; ?></td>
                        <td><?php echo $row_batch2['output2']; ?></td>
                        <td><?php echo $row_batch2['output3']; ?></td>
                        <td><?php echo $row_batch2['output4']; ?></td>
                        <td><?php echo $row_batch2['output5']; ?></td>
                        <td><?php echo $row_batch2['batch']; ?></td>
                        <td><?php echo $row_batch2['calculate']; ?></td>
                        <td><?php echo $row_batch2['percen']; ?></td>
                        <td><?php echo $row_batch2['gradeOutput']; ?></td>
                        <td><a href="updat.php?select=<?php echo $row_batch2['mid']; ?>">Update</a></td>
                        <td><a href="?delete=<?php echo $row_batch2['mid']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
       </div>


 <div>
           <center> <h3>Batch 2022-2024</h3></center>
            <table border="2" cellspacing="6" class="displaycontent" width="1000" style="border:4px solid lightblue;" align="center">
                <tr>
                    <th>mid</th>
                    <th>Registernumber</th>
                    <th>Exam</th>
                    <th>Subject1</th>
                    <th>Subject2</th>
                    <th>Subject3</th>
                    <th>Subject4</th>
                    <th>Subject5</th>
                    <th>output1</th>
                    <th>output2</th>
                    <th>output3</th>
                    <th>output4</th>
                    <th>output5</th>
                    <th>Batch</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                $query_batch2 = "SELECT * FROM mark WHERE batch='2022-2024'";
                $result_batch2 = mysql_query($query_batch2) or die(mysql_error());

                while ($row_batch2 = mysql_fetch_assoc($result_batch2)) {
                    ?>
                    <tr>
                        <td><?php echo $row_batch2['mid']; ?></td>
                        <td><?php echo $row_batch2['regno']; ?></td>
                        <td><?php echo $row_batch2['exam']; ?></td>
                        <td><?php echo $row_batch2['sub1']; ?></td>
                        <td><?php echo $row_batch2['sub2']; ?></td>
                        <td><?php echo $row_batch2['sub3']; ?></td>
                        <td><?php echo $row_batch2['sub4']; ?></td>
                        <td><?php echo $row_batch2['sub5']; ?></td>
                        <td><?php echo $row_batch2['output1']; ?></td>
                        <td><?php echo $row_batch2['output2']; ?></td>
                        <td><?php echo $row_batch2['output3']; ?></td>
                        <td><?php echo $row_batch2['output4']; ?></td>
                        <td><?php echo $row_batch2['output5']; ?></td>
                        <td><?php echo $row_batch2['batch']; ?></td>
                        <td><?php echo $row_batch2['calculate']; ?></td>
                        <td><?php echo $row_batch2['percen']; ?></td>
                        <td><?php echo $row_batch2['gradeOutput']; ?></td>
                        <td><a href="updat.php?select=<?php echo $row_batch2['mid']; ?>">Update</a></td>
                        <td><a href="?delete=<?php echo $row_batch2['mid']; ?>">Delete</a></td>
                    </tr>

      <?php } ?>
            </table>
        </div>




    </div>
</form>












































<?php

if (isset($_GET['delete'])) {
    $query = "delete from mark where mid='" . $_GET['delete'] . "'";
    mysql_query($query);
    echo '<script>alert("Deleted");</script>';
    header("location:viewmarks.php");
    exit;
}
?>

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
