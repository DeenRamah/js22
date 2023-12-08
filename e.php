<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Attendance</title>
</head>
<body>

<h2>Hospital Attendance Record</h2>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and get input values
    $patientName = test_input($_POST["patientName"]);
    $checkInTime = strtotime($_POST["checkInTime"]);
    $checkOutTime = strtotime($_POST["checkOutTime"]);

    // Calculate time spent in the hospital in hours
    $timeSpentInHours = round(($checkOutTime - $checkInTime) / 3600, 2);

    // Calculate payment (example: $10 per hour)
    $payment = $timeSpentInHours * 10;

    // Display results
    echo "<h3>Attendance Record</h3>";
    echo "<p><strong>Patient Name:</strong> $patientName</p>";
    echo "<p><strong>Check-in Time:</strong> " . date("Y-m-d H:i:s", $checkInTime) . "</p>";
    echo "<p><strong>Check-out Time:</strong> " . date("Y-m-d H:i:s", $checkOutTime) . "</p>";
    echo "<p><strong>Time Spent in Hospital:</strong> $timeSpentInHours hours</p>";
    echo "<p><strong>Payment Received:</strong> $payment</p>";
}

// Function to validate user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="patientName">Patient Name:</label>
    <input type="text" name="patientName" required>
    <br><br>

    <label for="checkInTime">Check-in Time:</label>
    <input type="datetime-local" name="checkInTime" required>
    <br><br>

    <label for="checkOutTime">Check-out Time:</label>
    <input type="datetime-local" name="checkOutTime" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
