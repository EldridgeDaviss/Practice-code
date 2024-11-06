<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="about.css">
    <?php
    include 'includes/header.php';
    ?>
   <br>
    <title>Home</title>
</head>
<body class="lawbody">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-7 offset-md-1">
                <div class="card" >
                    <div class="card-body lawwords" >
                        <h5 class="card-title" id="lawpaper">Legal and Humane Sale of Hogs</h5>
                        <p class="card-text">1. Acknowledgment of Risks
Customer acknowledges and understands that purchasing, handling, and caring for feral and/or specialized hogs may involve inherent risks, including but not limited to:
Injury: Hogs may exhibit unpredictable behavior, including but not limited to aggression, biting, trampling, or other physical harm.
Property Damage: Hogs may cause damage to property, including fencing, landscaping, and structures, due to their strength and behaviors.
Health Risks: Hogs may carry diseases and parasites that could pose health risks to humans or other animals, including but not limited to swine flu, leptospirosis, and brucellosis. <br>
2. Assumption of Responsibility
By purchasing a hog from 10 Feral Hogs, LLC, the Customer acknowledges full responsibility for the animal’s care, containment, and behavior.
Customer agrees to obtain and maintain appropriate facilities to house and contain the hog(s), minimizing risks to others and ensuring humane treatment of the animal.
Customer understands and assumes the risk of interacting with, transporting, and housing the hog(s). <br>
3. Indemnification
Customer agrees to indemnify, defend, and hold harmless 10 Feral Hogs, LLC and its owners, employees, and agents from any and all claims, damages, injuries, liabilities, losses, or expenses, including attorney fees and legal costs, arising from or related to:
Customer’s handling, ownership, or negligence in caring for the hog(s).
Any injuries or damages sustained by third parties due to the hog(s). <br>
4. Health and Behavioral Warranty Disclaimer
10 Feral Hogs, LLC makes no guarantees or warranties, express or implied, regarding the health, behavior, or adaptability of the hog(s) sold.
Customer agrees to take full responsibility for any veterinary care, behavioral training, or management required after purchase.
No Refund Policy: All sales are final. Due to the nature of the animals and potential for rapid behavioral changes, 10 Feral Hogs, LLC will not offer refunds or exchanges. <br>
5. Compliance with Local Laws and Regulations
Customer agrees to comply with all applicable local, state, and federal laws and regulations concerning the ownership, transport, and containment of hogs.
Customer understands that 10 Feral Hogs, LLC is not responsible for verifying the legality of hog ownership in the Customer’s jurisdiction and that any costs or fines related to non-compliance are the Customer’s responsibility. <br>
6. Release of Liability
Customer, on behalf of themselves, their heirs, representatives, successors, and assigns, voluntarily releases, discharges, waives, and relinquishes all claims against 10 Feral Hogs, LLC for any injuries or damages caused by the hog(s) after purchase.
Customer expressly waives any rights to claims of negligence or other legal claims against 10 Feral Hogs, LLC, except in cases of willful misconduct. <br>
7. Agreement to Arbitration
In the event of a dispute, Customer agrees to resolve any claims through binding arbitration in the state where 10 Feral Hogs, LLC is headquartered.
Both parties agree to waive the right to a jury trial for any claim or dispute arising out of this Agreement. <br>
8. Entire Agreement
This Agreement constitutes the entire agreement between the Company and Customer. No oral representations or statements shall modify this Agreement unless made in writing and signed by both parties.
Customer Acknowledgment and Signature <br>

I, the undersigned, have read, understood, and agreed to the above terms and conditions. I acknowledge the inherent risks associated with purchasing and owning hogs and assume full responsibility for any potential outcomes.

<div class="signature-container">
    <h3>Customer Signature</h3>
    <div class="canvas-wrapper">
        <canvas id="signatureCanvas"></canvas>
    </div>
    <button id="signatureButton" onclick="clearCanvas()">Clear Signature</button>
    <div class="input-field">
            <label for="customerName">Name:</label>
            <input type="text" id="customerName" placeholder="Enter your name">
        </div>
        <div class="input-field">
            <label for="signatureDate">Date:</label>
            <input type="date" id="signatureDate">
        </div>
</div>
<script>
    const canvas = document.getElementById('signatureCanvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;

    // Adjust canvas dimensions for proper signature capture
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    // Function to start drawing
    canvas.addEventListener('mousedown', (e) => {
        drawing = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    // Drawing as the mouse moves
    canvas.addEventListener('mousemove', (e) => {
        if (drawing) {
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        }
    });

    // Stop drawing on mouse up
    canvas.addEventListener('mouseup', () => {
        drawing = false;
    });

    // Touch support for mobile devices
    canvas.addEventListener('touchstart', (e) => {
        drawing = true;
        const rect = canvas.getBoundingClientRect();
        ctx.beginPath();
        ctx.moveTo(e.touches[0].clientX - rect.left, e.touches[0].clientY - rect.top);
    });

    canvas.addEventListener('touchmove', (e) => {
        if (drawing) {
            const rect = canvas.getBoundingClientRect();
            ctx.lineTo(e.touches[0].clientX - rect.left, e.touches[0].clientY - rect.top);
            ctx.stroke();
        }
    });

    canvas.addEventListener('touchend', () => {
        drawing = false;
    });

    // Clear the canvas
    function clearCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
</script>

</p>
                        <a href="hogs.php" class="btn btn-warning">Make your purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'includes/footer.php'

?>




</body>
</html>