<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="hogs.css">
    <?php
    include 'includes/header.php';
    ?>
   <br>
    <title>Home</title>
</head>
<body>




<?php
$products = [
    [
        'name' => 'X10 Baby Hogs',
        'description' => 'Best Seller',
        'price' => '$2000',
        'image' => 'img/Hog photos/OIP(5).jpg',
        'link' => 'item2.php'
    ],
    [
        'name' => 'X10 Vacation Hogs',
        'description' => 'Best Seller',
        'price' => '$1000',
        'image' => 'img/Hog photos/OIP(4).jpg',
        'link' => 'item3.php'
    ],
    [
        'name' => 'X10 Military Hog',
        'description' => 'Buyer\'s Choice',
        'price' => '$1500',
        'image' => 'img/Hog photos/OIP(6).jpg',
        'link' => 'item4.php'
    ],
    [
        'name' => 'X10 Chariot Hog',
        'description' => 'Buyer\'s Choice',
        'price' => '$3000',
        'image' => 'img/Hog photos/OIP(7).jpg',
        'link' => 'item5.php'
    ],
    [
        'name' => 'X10 Mercenary Hog',
        'description' => 'Buyer\'s Choice',
        'price' => '$1100',
        'image' => 'img/Hog photos/OIP(8).jpg',
        'link' => 'item6.php'
    ],
    [
        'name' => 'X10 Police Hog',
        'description' => 'Buyer\'s Choice',
        'price' => '$1200',
        'image' => 'img/Hog photos/OIP(9).jpg',
        'link' => 'item7.php'
    ],
    [
        'name' => 'X10 Armored Hog',
        'description' => 'Buyer\'s Choice',
        'price' => '$2000',
        'image' => 'img/Hog photos/OIP(10).jpg',
        'link' => 'item8.php'
    ],
    [
        'name' => 'X10 Albino Hog',
        'description' => 'Buyer\'s Choice',
        'price' => '$5000',
        'image' => 'img/Hog photos/OIP(11).jpg',
        'link' => 'item1.php'
    ]
];

?>

<main class="container">
    <?php foreach ($products as $index => $product): ?>
        <section class="card <?php echo $index % 2 == 1 ? 'card-blue' : ''; ?>">
            <div class="product-image">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" draggable="false" />
            </div>
            <div class="product-info">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <div class="price"><?php echo $product['price']; ?></div>
            </div>
            <div class="btn">
                <button class="buy-btn"><a href="<?php echo $product['link']; ?>">Buy Now</a></button>
                <button class="fav">
                    <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                    </svg>
                </button>
            </div>
        </section>
    <?php endforeach; ?>
</main>
<main>
  <!-- Cart Button and Dropdown -->
  <div class="cart-container">
  <div class="row">
    <button class="cart-btn" onclick="toggleCartDropdown()">🛒 Cart</button>
    <div class="cart-dropdown" id="cartDropdown">
      <button class="close-btn" onclick="toggleCartDropdown()">✖</button>
      <div class="cart-item">
        <span class="cart-item-name">Product 1</span>
        <span class="cart-item-price">$10.00</span>
      </div>
      <div class="cart-item">
        <span class="cart-item-name">Product 2</span>
        <span class="cart-item-price">$15.00</span>
      </div>
      <div class="cart-item">
        <span class="cart-item-name">Product 3</span>
        <span class="cart-item-price">$20.00</span>
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