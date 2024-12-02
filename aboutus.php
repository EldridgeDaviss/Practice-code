<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <?php include 'includes/header.php'; ?>
    <title>About Us</title>
</head>

<body>
    <!-- Intro Section -->
    <section class="text-center py-5" style="background-color: #fdfdfd;">
        <h1 class="mb-3">About Us</h1>
        <p class="text-muted">Discover our mission, values, and the faces behind 10 Feral Hogs.</p>
    </section>

    <!-- Mission Statements Section -->
    <section class="container my-5">
        <div class="row g-4">
            <!-- Statement 1 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/profile.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Samuel Latham" style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Samuel Latham</h5>
                        <p class="card-text">
                            "There is no greater joy than that of the hero. At 10 Feral Hogs, we strive to not only bask in that joy but bring it to our customers. Our product brings success, not only in attaining that goal but also in being the better person."
                        </p>
                    </div>
                </div>
            </div>
            <!-- Statement 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/profile.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Mason Blankenship" style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mason Blankenship</h5>
                        <p class="card-text">
                            "Ever since I was a boy, I've wanted to work with animals and spread that love to others. No animal is more misunderstood than the common feral hog. We aim to change the public's thoughts from pests to intelligent creatures deserving love."
                        </p>
                    </div>
                </div>
            </div>
            <!-- Statement 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/profile.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Eldridge Davis" style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Eldridge Davis</h5>
                        <p class="card-text">
                            "Our mission is to humanely transform wild hogs into well-adjusted animals through compassionate training and sustainable practices, turning challenges into opportunities for positive ecosystem change."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-5" style="background-color: #f8f9fa;">
        <h2 class="mb-4">Ready to Make a Difference?</h2>
        <p class="mb-4">Join us in reshaping the world, one hog at a time.</p>
        <a href="hogs.php" class="btn btn-primary btn-lg">Shop With Us!</a>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>
