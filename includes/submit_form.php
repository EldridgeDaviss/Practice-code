<?php
// Include the database connection file
require_once 'dbh.inc.php';

session_start();

// Check if the user is logged in
if (!isset($_SESSION['uidUsers'])) {
    die("You must be logged in to submit this form.");
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $userId = $_SESSION['uidUsers'];
    $customerName = mysqli_real_escape_string($conn, $_POST['customerName']);
    $signatureDate = $_POST['signatureDate'];
    $signatureBase64 = $_POST['signature'];

    // Validate required fields
    if (empty($customerName) || empty($signatureDate) || empty($signatureBase64)) {
        die("All fields are required.");
    }

    // Decode the base64 string to binary
    $signatureBlob = base64_decode(explode(',', $signatureBase64)[1]);

    // Insert the data into the database
    $sql = "INSERT INTO form_submissions (uidUsers, printed_name, submission_date, signature) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "isss", $userId, $customerName, $signatureDate, $signatureBlob);

    if (mysqli_stmt_execute($stmt)) {
        echo "Form submitted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>