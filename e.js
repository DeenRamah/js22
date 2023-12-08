
function recordAttendance() {
    var patientName = document.getElementById("patientName").value;
    var checkInTime = document.getElementById("checkInTime").value;
    var checkOutTime = document.getElementById("checkOutTime").value;

    var checkInDateTime = new Date("2023-01-01 " + checkInTime);
    var checkOutDateTime = new Date("2023-01-01 " + checkOutTime);

    var timeSpent = (checkOutDateTime - checkInDateTime) / (1000 * 60 * 60); // Convert milliseconds to hours
    var payment = calculatePayment(timeSpent);

    // Display recorded data in the table
    var tableBody = document.getElementById("attendanceTableBody");
    var newRow = tableBody.insertRow(-1);
    newRow.insertCell().textContent = patientName;
    newRow.insertCell().textContent = checkInTime;
    newRow.insertCell().textContent = checkOutTime;
    newRow.insertCell().textContent = timeSpent.toFixed(2);
    newRow.insertCell().textContent = "$" + payment.toFixed(2);
  }

  function calculatePayment(timeSpent) {
    // Your payment calculation logic goes here
    // For example, let's say the payment is $10 per hour
    var hourlyRate = 10;
    return timeSpent * hourlyRate;
 }