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
    <title>Add Marks details</title>

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
    </style>
<<!-- ... (your existing head section) ... -->

<script>
    function calculateTotalMarks() {
        // Retrieve subject marks from the input fields
        var external1 = parseFloat(document.getElementById("external1").value) || 0;
        var internal1 = parseFloat(document.getElementById("internal1").value) || 0;

        var external2 = parseFloat(document.getElementById("external2").value) || 0;
        var internal2 = parseFloat(document.getElementById("internal2").value) || 0;

        var external3 = parseFloat(document.getElementById("external3").value) || 0;
        var internal3 = parseFloat(document.getElementById("internal3").value) || 0;

        var external4 = parseFloat(document.getElementById("external4").value) || 0;
        var internal4 = parseFloat(document.getElementById("internal4").value) || 0;

        var external5 = parseFloat(document.getElementById("external5").value) || 0;
        var internal5 = parseFloat(document.getElementById("internal5").value) || 0;

        // Check if internal marks are within the range [0, 80]
        if (external1 > 70 || external2 > 70 || external3 > 70 || external4 > 70 || external5 > 70) {
            alert("External marks should be 70 or below.");
            return;
        }

        // Check if external marks are within the range [0, 20]
        if (internal1 > 30 || internal2 > 30 || internal3 > 30 || internal4 > 30 || internal5 > 30) {
            alert("Internal marks should be 30 or below.");
            return;
        }

        // Calculate total marks for each subject
        var total1 = external1 + internal1;
        var total2 = external2 + internal2;
        var total3 = external3 + internal3;
        var total4 = external4 + internal4;
        var total5 = external5 + internal5;

        // Calculate total marks across all subjects
        var totalMarks = total1 + total2 + total3 + total4 + total5;

        // Calculate percentage
        var percentage = (totalMarks / 500) * 100; // Assuming a total of 500 marks

        // Display the total marks and percentage
        document.getElementById("output1").value = total1;
        document.getElementById("output2").value = total2;
        document.getElementById("output3").value = total3;
        document.getElementById("output4").value = total4;
        document.getElementById("output5").value = total5;
        document.getElementById("output").value = totalMarks;
        document.getElementById("percen").value = percentage.toFixed(2); // Round to 2 decimal places

        // Calculate grade based on percentage
        var grade = calculateGrade(percentage);
        document.getElementById("gradeOutput").value = grade;
    }

    function calculateGrade(percentage) {
        if (percentage >= 70) {
            return 'A';
        } else if (percentage >= 40) {
            return 'B';
        } else {
            return 'C';
        }
    }
</script>



<!-- ... (your existing body section) ... -->




</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h2>Add Marks details</h2>

    <form method="post" action="">
        <table align="center">
            <tr>
                <td> RegisterNumber</td>
                <td><input type="text" name="regno" value="<?php echo $row['regno']; ?>" readonly></td>
            </tr>
            <tr>
                <td align="right">Id</td>
                <td><input type="text" name="id" value="<?php echo $row['id']; ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="exam"> Exam</label></td>
                <td>
                    <select name="exam" id="exam" onchange="showMarksInput()">
                        <option value="internal1">Internal 1</option>
                        <option value="internal2">Internal 2</option>
                        <option value="model">Model</option>
                    </select>
                </td>

                <!-- Input fields for subject marks -->
                <td id="marksInput" style="display: none;">
                    <label for="subjectMarks">Enter Marks:</label>
                    <input type="text" name="subjectMarks" id="subjectMarks">
                </td>
            </tr>
            
              <tr>
    <td><label for="sub"> Subject1</label></td>
    <td>
        <select name="sub1" id="sub1">
            <option value="java">Java</option>
            <option value="bigdata">BigData</option>
            <option value="cloudcomputing">CloudComputing</option>
            <option value="html">HTML</option>
            <option value="AI">Artificial Intelligence</option>
            <option value="django">Django</option>
            <option value="c++">C++</option>
            <option value="python">Python</option>
        </select>
    </td>
    <td><input type="text" name="external1" id="external1" placeholder="external1" required></td>
    <td><input type="text" name="internal1" id="internal1" placeholder="internal1" required></td>
	 <td><input type="text" name="output1" id="output1"  placeholder="output" readonly></td>
</tr>

            </tr>
            <tr>
                <td><label for="sub"> Subject2</label></td>
                <td>
                    <select name="sub2" id="sub2">
                        <option value="java">Java</option>
                        <option value="bigdata">BigData</option>
                        <option value="cloudcomputing">CloudComputing</option>
                        <option value="html">HTML</option>
                        <option value="AI">Artificial Intelligence</option>
                        <option value="django">Django</option>
                        <option value="c++">C++</option>
                        <option value="python">Python</option>
                    </select>
                  <td><input type="text" name="external2" id="external2" placeholder="external2" required></td>
				 <td><input type="text" name="internal2" id="internal2" placeholder="internal2" required></td>
				  <td><input type="text" name="output2" id="output2" placeholder="output"  readonly></td>
            </tr>
            <tr>
                <td><label for="sub"> Subject3</label></td>
                <td>
                    <select name="sub3" id="sub3">
                        <option value="java">Java</option>
                        <option value="bigdata">BigData</option>
                        <option value="cloudcomputing">CloudComputing</option>
                        <option value="html">HTML</option>
                        <option value="AI">Artificial Intelligence</option>
                        <option value="django">Django</option>
                        <option value="c++">C++</option>
                        <option value="python">Python</option>
                    </select>
                  <td><input type="text" name="external3" id="external3" placeholder="external3" required></td>
				 <td><input type="text" name="internal3" id="internal3" placeholder="internal3" required></td>
				  <td><input type="text" name="output3" id="output3" placeholder="output"  readonly></td>
            </tr>
            <tr>
                <td><label for="sub"> Subject4</label></td>
                <td>
                    <select name="sub4" id="sub4">
                        <option value="java">Java</option>
                        <option value="bigdata">BigData</option>
                        <option value="cloudcomputing">CloudComputing</option>
                        <option value="html">HTML</option>
                        <option value="AI">Artificial Intelligence</option>
                        <option value="django">Django</option>
                        <option value="c++">C++</option>
                        <option value="python">Python</option>
                    </select>
            <td><input type="text" name="external4" id="external4" placeholder="external4" required></td>
				 <td><input type="text" name="internal4" id="internal4" placeholder="internal4" required></td>
				  <td><input type="text" name="output4" id="output4"  placeholder="output" readonly></td>
            </tr>
            <tr>
                <td><label for="sub"> Subject5</label></td>
                <td>
                    <select name="sub5" id="sub5">
                        <option value="java">Java</option>
                        <option value="bigdata">BigData</option>
                        <option value="cloudcomputing">CloudComputing</option>
                        <option value="html">HTML</option>
                        <option value="AI">Artificial Intelligence</option>
                        <option value="django">Django</option>
                        <option value="c++">C++</option>
                        <option value="python">Python</option>
                    </select>
                 <td><input type="text" name="external5" id="external5" placeholder="external5" required></td>
				 <td><input type="text" name="internal5" id="internal5" placeholder="internal5" required></td>
				  <td><input type="text" name="output5" id="output5" placeholder="output"  readonly></td>
            </tr>

<tr>
    <td colspan="2" align="left">
        <label for="batch"> Batch </label>
        <select name="batch" id="batch">
            <option value="2018-2020">2018-2020</option>
            <option value="2019-2021">2019-2021</option>
            <option value="2020-2022">2020-2022</option>
            <option value="2021-2024">2021-2024</option>
        </select>
    </td>
</tr>


           <tr>
    <td colspan="2" align="left">
        <label for="sub">Calculate Total Marks</label>
        <input type="button" value="Calculate" onclick="calculateTotalMarks()">
    </td>
    <td><input type="text" name="output" id="output" readonly></td>
</tr>
<tr>
    <td colspan="2" align="left">
	   <label for="sub">Calculate Percentage</label>
    </td>
    <td><input type="text" name="percen" id="percen" readonly></td>
</tr>
<!-- Grade -->
<tr>
    <td colspan="2" align="left">
        <label for="sub">Grade</label>
    </td>
    <td><input type="text" name="gradeOutput" id="gradeOutput" readonly></td>
</tr>

        </table>

        <!-- Output area for calculated results -->
        <div id="output"></div>

        <input type="submit" name="submit" value="Submit">
        <br>
        <a href="viewstudent.php" style="color: black;">Back</a>
    </form>


<?php

if(isset($_POST['submit'])) {
    $regno = $_POST['regno'];
    $id = $_POST['id'];
    $exam = $_POST['exam'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $external1 = $_POST['external1'];
    $external2 = $_POST['external2'];
    $external3 = $_POST['external3'];
    $external4 = $_POST['external4'];
    $external5 = $_POST['external5'];
    $output1 = $_POST['output1'];
    $output2 = $_POST['output2'];
    $output3 = $_POST['output3'];
    $output4 = $_POST['output4'];
    $output5 = $_POST['output5'];
    $batch = $_POST['batch']; // New line to capture the batch value
    $output = $_POST['output'];
    $percen = $_POST['percen'];
    $gradeOutput = $_POST['gradeOutput'];

    $query = "INSERT INTO `mark` VALUES (null, '$regno', '$id', '$exam', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$external1', '$external2', '$external3', '$external4', '$external5', '$batch', '$output', '$percen', '$gradeOutput')";

    if(mysql_query($query)) {
        echo 'SUCCESSFULLY';
        echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
    } else {
        echo 'NOT REGISTERED';
    }
    header("location:viewbatch.php");
}

?>

    <?php
    include('footer.php');
    ?>

</body>

</html>
