<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background: url('img/Hog photos/forest.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            gap: 20px;
        }

        .intro-text {
            text-align: center;
            color: #ffffff;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
        }

        .benefits-card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 500px;
            text-align: center;
        }

        .benefits-card h2 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        .benefits-card ul {
            list-style: none;
            padding: 0;
        }

        .benefits-card ul li {
            font-size: 1rem;
            margin: 10px 0;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
            color: #0056b3;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #003f88;
        }

        .signuperror {
            color: #d9534f;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container">
       

        <!-- Benefits Section -->
        <div class="benefits-card">
            <h2>Why Sign Up?</h2>
            <ul>
                <li>Be part of a community dedicated to conservation and action.</li>
                <li>Receive exclusive updates on our latest projects and events.</li>
                <li>Access resources and tools to make a difference.</li>
                <li>Join a growing movement to protect our natural heritage.</li>
            </ul>
        </div>

        <!-- Sign Up Form -->
        <div class="card">
            <h1>Sign Up</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                } else if ($_GET['error'] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username and email!</p>';
                } else if ($_GET['error'] == "invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                } else if ($_GET['error'] == "invalidmail") {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                } else if ($_GET['error'] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                } else if ($_GET['error'] == "usertaken") {
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
            }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username" class="form-control">
                <input type="email" name="mail" placeholder="E-mail" class="form-control">
                <input type="password" name="pwd" placeholder="Password" class="form-control">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password" class="form-control">
                <button type="submit" name="signup-submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
