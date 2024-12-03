<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <?php
    include 'includes/header.php';
    ?>
   <br>
    <title>Home</title>
</head>
<body>
<div class="container text-center my-4">
    <h2>Your Cart</h2>
    <p>PRE ORDER PAYMENT INFO</p>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkoutModal">
        Proceed to Checkout
    </button>
</div>

<!-- Modal for Checkout -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Confirm Your Purchase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p><strong>Order Summary</strong></p>
                <h6>ALL CURRENT PURCHASE REQUESTS ARE ON PREORDER. PLEASE ENTER PAYMENT INFORMATION SO WE CAN PROCESS YOUR ORDERS.</h6>
                <hr>
                <p><strong>AS SOON AS THE FIRST ROUND OF ORDERS IS TOGETHER YOU WILL HAVE PRIORITY</strong></p>
                <form action="includes/process_payment.php" method="POST">
                    <label for="card_number">Card Number:</label>
                        <input type="text" id="card_number" name="card_number" maxlength="16" required><br>

                    <label for="expiration_date">Expiration Date:</label>
                        <input type="month" id="expiration_date" name="expiration_date" required><br>

                    <label for="cvv">Security Code (CVV):</label>
                        <input type="text" id="cvv" name="cvv" maxlength="4" required><br>

                    <label for="billing_address">Billing Address:</label>
                        <textarea id="billing_address" name="billing_address" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="processPayment()">Confirm and Pay</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS for Modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function processPayment() {
        // Get values from form inputs
        const cardNumber = document.getElementById('cardNumber').value;
        const expiryDate = document.getElementById('expiryDate').value;
        const cvv = document.getElementById('cvv').value;
        const message = document.getElementById('payment-message');
        
        // Basic mock validation
        if (validateCardNumber(cardNumber) && validateExpiryDate(expiryDate) && validateCVV(cvv)) {
            message.textContent = 'Payment successful! Redirecting...';
            message.style.color = 'green';

            // Redirect to thank you page after a delay
            setTimeout(() => {
                window.location.href = "index.php";
            }, 2000);
        } else {
            message.textContent = 'Invalid card details. Please try again.';
            message.style.color = 'red';
        }
    }

    // Mock validation functions
    function validateCardNumber(number) {
        return /^\d{16}$/.test(number.replace(/\s/g, ''));
    }

    function validateExpiryDate(date) {
        return /^(0[1-9]|1[0-2])\/\d{2}$/.test(date);
    }

    function validateCVV(cvv) {
        return /^\d{3}$/.test(cvv);
    }
</script>
<?php
include 'includes/footer.php'

?>
</body>
</html>