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
    <p>Items: 3 | Total: $150</p>
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
                <ul>
                    <li>Item 1 - $50</li>
                    <li>Item 2 - $50</li>
                    <li>Item 3 - $50</li>
                </ul>
                <hr>
                <p><strong>Total: $150</strong></p>
                <form id="payment-form">
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div class="mb-3">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="123" required>
                    </div>
                    <div id="payment-message" class="text-success mt-2"></div>
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