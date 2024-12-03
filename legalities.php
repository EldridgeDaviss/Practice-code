<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="about.css">
    <?php include 'includes/header.php'; ?>
    <title>Legalities</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }
        .lawbody {
            padding: 20px;
        }
        .card {
            background-color: #ffffff;
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 30px;
        }
        .card-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #5867dd; /* Primary color */
            margin-bottom: 20px;
        }
        .lawwords p {
            margin-bottom: 20px;
            line-height: 1.6;
            color: #333;
        }
        h3, h5 {
            color: #f76d37; /* Secondary color */
            margin-top: 20px;
        }
        .signature-container {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-top: 30px;
        }
        .canvas-wrapper {
            margin-bottom: 15px;
        }
        .btn-warning {
            background-color: #f76d37;
            border: none;
        }
        .btn-warning:hover {
            background-color: #d55b2f;
        }

    </style>
</head>
<body class="lawbody">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-body lawwords">
                        <h5 class="card-title text-center">Legal and Humane Sale of Hogs</h5>

                        <h6><strong>1. Acknowledgment of Risks</strong></h6>
                        <p>Purchasing, handling, and caring for feral and/or specialized hogs may involve inherent risks, including but not limited to:</p>
                        <ul>
                            <li><strong>Injury:</strong> Unpredictable behavior such as aggression, biting, or trampling.</li>
                            <li><strong>Property Damage:</strong> Hogs may cause damage to fencing, landscaping, and structures.</li>
                            <li><strong>Health Risks:</strong> Potential for diseases or parasites that could impact humans or other animals.</li>
                        </ul>

                        <h6><strong>2. Assumption of Responsibility</strong></h6>
                        <p>By purchasing a hog from 10 Feral Hogs, LLC, the customer acknowledges full responsibility for the animal’s care and containment. This includes appropriate facilities and humane treatment of the animal.</p>

                        <h6><strong>3. Indemnification</strong></h6>
                        <p>The customer agrees to indemnify and hold harmless 10 Feral Hogs, LLC against any claims, damages, or liabilities arising from the handling or ownership of the hog(s).</p>

                        <h6><strong>4. Health and Behavioral Warranty Disclaimer</strong></h6>
                        <p>10 Feral Hogs, LLC makes no guarantees about the health or behavior of hogs after purchase. All sales are final, and refunds or exchanges are not offered.</p>

                        <h6><strong>5. Compliance with Local Laws and Regulations</strong></h6>
                        <p>It is the customer's responsibility to ensure compliance with local laws concerning hog ownership. 10 Feral Hogs, LLC is not responsible for verifying local regulations.</p>

                        <h6><strong>6. Release of Liability</strong></h6>
                        <p>The customer releases 10 Feral Hogs, LLC from liability for injuries or damages caused by the hog(s) after purchase, except in cases of willful misconduct.</p>

                        <h6><strong>7. Agreement to Arbitration</strong></h6>
                        <p>All disputes will be resolved through binding arbitration in the state where 10 Feral Hogs, LLC is headquartered.</p>

                        <h6><strong>8. Entire Agreement</strong></h6>
                        <p>This document constitutes the full agreement between the company and the customer. Changes must be made in writing and signed by both parties.</p>

                        <!-- Signature Section -->
                        <div class="signature-container">
                            <h3>Customer Signature</h3>
                            <form id="signatureForm" method="POST" action="includes/submit_form.php">
                                <div class="canvas-wrapper">
                                    <canvas id="signatureCanvas" style="border: 1px solid #ccc; width: 100%; height: 200px;"></canvas>
                                </div>
                                <button type="button" id="clearButton" class="btn btn-secondary mb-3" onclick="clearCanvas()">Clear Signature</button>
                                <div class="mb-3">
                                    <label for="customerName" class="form-label">Name:</label>
                                    <input type="text" id="customerName" name="customerName" class="form-control" placeholder="Enter your name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="signatureDate" class="form-label">Date:</label>
                                    <input type="date" id="signatureDate" name="signatureDate" class="form-control" required>
                                </div>
                                <input type="hidden" id="signatureInput" name="signature"> <!-- Hidden input for base64 signature -->
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </form>
                        </div>

                        <a href="hogs.php" class="btn btn-warning mt-4">Make your purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>


    <script>
    const canvas = document.getElementById('signatureCanvas');
    const ctx = canvas.getContext('2d');
    const signatureInput = document.getElementById('signatureInput');
    let isDrawing = false;

    // Adjust canvas size dynamically
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    function startDrawing(e) {
        isDrawing = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    }

    function draw(e) {
        if (!isDrawing) return;
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.strokeStyle = '#000'; // Signature color
        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        ctx.stroke();
    }

    function stopDrawing() {
        if (!isDrawing) return;
        isDrawing = false;
        signatureInput.value = canvas.toDataURL(); // Convert the signature to Base64
    }

    function clearCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        signatureInput.value = ''; // Clear hidden input
    }

    // Event listeners for drawing
    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseleave', stopDrawing);

    // Clear button event
    document.getElementById('clearButton').addEventListener('click', clearCanvas);

    // Adjust canvas size dynamically on window resize
    window.addEventListener('resize', () => {
        const tempSignature = canvas.toDataURL();
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
        const img = new Image();
        img.onload = () => ctx.drawImage(img, 0, 0);
        img.src = tempSignature;
    });
</script>
</body>
</html>