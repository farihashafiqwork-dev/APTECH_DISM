<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Input Form</title>
</head>
<body>
    <h2>Enter Your Marks</h2>
    <form action="" method="POST">
        Name: <input type="text" name="name" required><br><br>
        Subject 1 Marks: <input type="number" name="marks[]"  required><br><br>
        Subject 2 Marks: <input type="number" name="marks[]"  required><br><br>
        Subject 3 Marks: <input type="number" name="marks[]"  required><br><br>
        <input type="submit" value="Submit" name="sub">
    </form>
</body>
</html>

<?php
if (isset($_POST['sub'])) {
    // Get the name and marks array
    $name = $_POST['name'];
    $marks = $_POST['marks'];  // This is an array from the form
    
    // Variables to store total marks and number of subjects
    $totalMarks = 0;

    $totalPossibleMarks = 300; // Calculate total possible marks

    // Loop through the marks array to calculate total
    foreach ($marks as $mark) {
        // Check if marks are valid
        if ($mark < 0 || $mark > 100) {
            echo "Invalid marks: " . $mark . ". Please enter marks between 0 and 100.<br>";
            exit; // Exit if invalid marks are found
        }

        // Add the marks to total
        $totalMarks += $mark;
    }



    // Calculate the percentage
    $percentage = ($totalMarks / $totalPossibleMarks) * 100;

    // Determine grade using conditions
    $grade = "";
    if ($percentage >= 90) {
        $grade = "A";
    } elseif ($percentage >= 80) {
        $grade = "B";
    } elseif ($percentage >= 70) {
        $grade = "C";
    } elseif ($percentage >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    // Display the result
    echo "<h3>Results for $name</h3>";
    echo "Total Marks Obtained: $totalMarks <br>";
    echo "Percentage: $percentage%<br>";
    echo "Grade: $grade<br>";
}
?>
