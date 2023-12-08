<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Management System</title>
</head>
<body>

<h2>College Management System</h2>

<?php
// Function to validate user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables
$studentName = $enrollmentStatus = $labStatus = $dormStatus = $fees = $uniformPayment = $workersPayment = $teachersPayment = "";
$additionalPayment = $securityPayment = $cashDeposit = $cashWithdrawal = $transferAmount = $lendAmount = $resultRecord = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and get input values
    $studentName = test_input($_POST["studentName"]);
    $enrollmentStatus = $_POST["enrollmentStatus"];
    $labStatus = $_POST["labStatus"];
    $dormStatus = $_POST["dormStatus"];
    $fees = test_input($_POST["fees"]);
    $uniformPayment = test_input($_POST["uniformPayment"]);
    $workersPayment = test_input($_POST["workersPayment"]);
    $teachersPayment = test_input($_POST["teachersPayment"]);
    $additionalPayment = test_input($_POST["additionalPayment"]);
    $securityPayment = test_input($_POST["securityPayment"]);
    $cashDeposit = test_input($_POST["cashDeposit"]);
    $cashWithdrawal = test_input($_POST["cashWithdrawal"]);
    $transferAmount = test_input($_POST["transferAmount"]);
    $lendAmount = test_input($_POST["lendAmount"]);
    $resultRecord = $_POST["resultRecord"];
    
    // Perform calculations or handle database interactions based on the collected data
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h3>Student Enrollment</h3>
    <label for="studentName">Student Name:</label>
    <input type="text" name="studentName" required>
    <br><br>
    <label for="enrollmentStatus">Enrollment Status:</label>
    <select name="enrollmentStatus">
        <option value="enrolled">Enrolled</option>
        <option value="notEnrolled">Not Enrolled</option>
    </select>
    <br><br>

    <h3>Laboratory and Dormitory</h3>
    <label for="labStatus">Laboratory Status:</label>
    <select name="labStatus">
        <option value="added">Added to Laboratory</option>
        <option value="removed">Removed from Laboratory</option>
    </select>
    <br><br>
    <label for="dormStatus">Dormitory Status:</label>
    <select name="dormStatus">
        <option value="added">Added to Dormitory</option>
        <option value="removed">Removed from Dormitory</option>
    </select>
    <br><br>

    <h3>Fees and Payments</h3>
    <label for="fees">Fees:</label>
    <input type="text" name="fees" required>
    <br><br>
    <label for="uniformPayment">Uniform Payment:</label>
    <input type="text" name="uniformPayment">
    <br><br>
    <label for="workersPayment">Workers Payment:</label>
    <input type="text" name="workersPayment">
    <br><br>
    <label for="teachersPayment">Teachers Payment:</label>
    <input type="text" name="teachersPayment">
    <br><br>
    <label for="additionalPayment">Additional Payment:</label>
    <input type="text" name="additionalPayment">
    <br><br>

    <h3>Security Staff</h3>
    <label for="securityPayment">Security Staff Payment:</label>
    <input type="text" name="securityPayment">
    <br><br>

    <h3>Cash Transactions</h3>
    <label for="cashDeposit">Cash Deposit:</label>
    <input type="text" name="cashDeposit">
    <br><br>
    <label for="cashWithdrawal">Cash Withdrawal:</label>
    <input type="text" name="cashWithdrawal">
    <br><br>
    <label for="transferAmount">Transfer Amount:</label>
    <input type="text" name="transferAmount">
    <br><br>
    <label for="lendAmount">Lend Amount:</label>
    <input type="text" name="lendAmount">
    <br><br>

    <h3>Student Results</h3>
    <label for="resultRecord">Result Record:</label>
    <textarea name="resultRecord" rows="4"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
