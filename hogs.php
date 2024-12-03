<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

  <link rel="stylesheet" href="hogs.css">
  <?php
    include 'includes/header.php';
    ?>
  <br>
  <title>Home</title>
</head>

<body>




  <main class="container">
    <?php
    // Include database connection
    include('includes/dbh.inc.php');

    // Fetch products from the database
    $sql = "SELECT * FROM hogs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Extract product data
            $name = $row['name'];
            $description = $row['description'];
            $price = $row['price'];
            $image = $row['image'];
            $link = $row['link'];
            $stock = $row['stock'];
            $color = $row['color'];
            $age = $row['age'];
            $trainer_name = $row['trainer_name'];
            $behavior = $row['behavior'];
    ?>
    <!-- Product card -->
    <section class="card">
      <div class="product-image">
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
      </div>
      <div class="product-info">
        <h2><?php echo $name; ?></h2>
        <p><strong>Description:</strong> <?php echo $description; ?></p>
        <p><strong>Price:</strong> <?php echo $price; ?></p>
        <p><strong>Stock:</strong> <?php echo $stock; ?></p>
        <p><strong>Color:</strong> <?php echo $color; ?></p>
        <p><strong>Age:</strong> <?php echo $age; ?> years</p>
        <p><strong>Trainer:</strong> <?php echo $trainer_name; ?></p>
        <p><strong>Behavior:</strong> <?php echo $behavior; ?></p>
      </div>
      <div class="btn">
        <!-- If stock is 0, disable the button -->
        <?php if ($stock > 0): ?>
        <form action="includes/buy.php" method="POST">
          <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
          <button class="buy-btn">Buy Now</button>
        </form>
        <?php else: ?>
        <button class="buy-btn" disabled>Out of Stock</button>
        <?php endif; ?>
      </div>
    </section>
    <?php
        }
    } else {
        echo "No products found.";
    }

    // Close the connection
    $conn->close();
    ?>
    <main>
      <!-- Cart Button and Dropdown -->
      <div class="cart-container">
        <div class="row">
          <button class="cart-btn" onclick="toggleCartDropdown()">🛒 Cart</button>
          <div class="cart-dropdown" id="cartDropdown">
            <button class="close-btn" onclick="toggleCartDropdown()">✖</button>
            <div class="cart-item">
              <span class="cart-item-name">See checkout page.</span>
              <span class="cart-item-price">For Payment info.</span>
            </div>

            <a href="checkout.php" class="view-cart-btn">Go to Checkout</a>
          </div>
        </div>
      </div>

      <!-- JavaScript to Handle Button Click -->
      <script>
        function toggleCartDropdown() {
          const dropdown = document.getElementById('cartDropdown');
          dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }
      </script>
    </main>
    <?php
include 'includes/footer.php'

?>
</body>

</html>