<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raffle for 10 Feral Hogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Confetti.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
    max-width: 400px; /* Reduced width */
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .instructions {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            width: 100%;
            font-size: 1.2rem;
            padding: 10px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            z-index: 1000;
        }

        .popup h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .popup p {
            font-size: 1.2rem;
        }

        .popup .btn {
            margin-top: 20px;
            background-color: #0056b3;
        }

        .close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

    </style>
</head>

<body>
<?php include 'includes/header.php'; ?>

    <div class="container">
        <h1>Raffle for 10 Feral Hogs</h1>
        <p class="instructions">
            Enter your details below to participate in our special hog raffle! Winners will be contacted with details on how to claim their prize. Don't miss this chance to own 10 feral hogs and bring adventure into your life!
        </p>
        <h2>How It Works</h2>
        <p class="instructions">
            Once you submit your information, you are automatically entered into the raffle. Our team will review your entry and send you a confirmation email. As a winner (yes, you always win!), you will receive instructions to claim your hogs.
        </p>
        <h2>Claiming Your Prize</h2>
        <p class="instructions">
            Winners will be contacted via email within 24 hours of their submission. To claim your hogs, you must confirm your shipping or pick-up preferences in your email response. Ensure your contact information is accurate!
        </p>

        <form id="raffleForm">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" required>
            </div>
            <button type="submit" class="btn btn-primary">Enter Raffle</button>
        </form>
    </div>

    <!-- Popup for success message -->
    <div class="popup" id="popup">
        <span class="close-popup" id="closePopup">&times;</span>
        <h2>Congratulations!</h2>
        <p>You have won 10 Feral Hogs! 🎉</p>
        <p>Check your email for details on how to claim your prize. If you don’t see it in your inbox, check your spam folder.</p>
        <button class="btn btn-primary" id="closeButton">Close</button>
    </div>

    <script>
        // Confetti Effect Function
        function triggerConfetti() {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { x: 0.5, y: 0.5 }
            });
        }

        // Handle form submission
        document.getElementById("raffleForm").addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent the form from refreshing the page

            // Trigger Confetti
            triggerConfetti();

            // Display the success popup
            document.getElementById("popup").style.display = "block";
        });

        // Close popup function
        document.getElementById("closeButton").addEventListener("click", function () {
            document.getElementById("popup").style.display = "none";
        });

        // Close popup when the 'x' is clicked
        document.getElementById("closePopup").addEventListener("click", function () {
            document.getElementById("popup").style.display = "none";
        });
    </script>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
