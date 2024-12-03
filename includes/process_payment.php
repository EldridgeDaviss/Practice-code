<?php
// Include the database connection file
require 'dbh.inc.php';

// Sanitize and validate input
$card_number = trim($_POST['card_number']);
$cvv = trim($_POST['cvv']);
$expiration_date = $_POST['expiration_date'];
$billing_address = trim($_POST['billing_address']);

// Validate inputs
if (!ctype_digit($card_number) || strlen($card_number) != 16) {
    die("Invalid card number. Please enter a valid 16-digit card number.");
}

if (!ctype_digit($cvv) || strlen($cvv) < 3 || strlen($cvv) > 4) {
    die("Invalid CVV. Please enter a valid 3- or 4-digit CVV.");
}

// Extract the last 4 digits of the card number
$card_last4 = substr($card_number, -4);

// Prepare the SQL query
$sql = "INSERT INTO payment_info2 (card_last4, billing_address, expiration_date, created_at)
        VALUES (?, ?, ?, NOW())";

$stmt = mysqli_prepare($conn, $sql);

// Bind parameters and execute the query
mysqli_stmt_bind_param($stmt, "sss", $card_last4, $billing_address, $expiration_date);

if (mysqli_stmt_execute($stmt)) {
    echo "Payment information saved successfully! CVV was securely processed but not stored.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
