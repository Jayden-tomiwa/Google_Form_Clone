<?php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $matric = $_POST['matric_number'];
    $lname = $_POST['last_name'];
    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $gender = $_POST['gender'];
    $dept = $_POST['department'];

    $sql = "INSERT INTO students (matric_number, last_name, first_name, middle_name, gender, department)
            VALUES ('$matric', '$lname', '$fname', '$mname', '$gender', '$dept')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Student information submitted successfully!</h2>";
        echo "<a href='index.html'>Go back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
