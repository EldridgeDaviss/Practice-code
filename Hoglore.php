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


    <style>
        /* Reset margins and paddings for the body and html */
        body, html {
            margin: 0;
            padding: 0;
            min-height: 100vh; /* Ensure the body stretches to full height */
            display: flex;
            flex-direction: column; /* Makes the body behave like a flex container */
        }

        /* Content wrapper ensures the main content pushes the footer to the bottom */
        .content {
            flex: 1; /* Expands to take up available space */
        }

        /* Footer styles */
        footer {
            background-color: #382102;
            color: #fff;
            ;
            ;
        }

        body{height: 100vh}
    </style>
</head>
<body>

<div class="container my-4">
    <h2 class="text-center">Hog Lore</h2>
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Adjust the column width here -->
            <div class="accordion" id="accordionExample">

                <!-- Tab 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Where do your Hogs come from?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <img src="img/assorted/2024_10_31_0c9_Kleki.png" alt="">
                            <br>
                            <p>Whichever green zone your house is in, your hogs will come from the red counties within that zone. (Customers outside the contiguous 48 will recieve our excess stock from Texas.) </p>
                        </div>
                    </div>
                </div>
                <!-- Tab 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Vendor Tales
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <p>"I was building a cabin in the woods, right outside Cherokee National Forest and i heard hogs up on the ridge. My first thought was to call 10 Feral Hogs. They immediatly came and rescued the Hogs, ensuring they went to a good home"</p>
                        <p >We interviewed a man from the mountains of southern Appalachia to detail his experience with our busniess. Here is what he had to say.</p>

                            <h4>"I was building a cabin in the woods, right outside Cherokee National Forest and i heard hogs up on the ridge. My first thought was to call 10 Feral Hogs. They immediatly came and rescued the Hogs, ensuring they went to a good home" <br> -Brian Buchholz 2025 TSSAA Boys Class A Cross Country Champion</h4></p>
                        </div>
                    </div>
                </div>

                <!-- Tab 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Why buying hogs makes you a good person
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            When you make a purchase from 10 Feral Hogs, you are supporting an industry dedicated to improving the world. Gone are the days of industrial destruction of our environment. We uphold traditional capitalist values and support the boon of free trade, but the environment is our first priority. Your purchase will help renew the lives of these once dangerous animals with a sense of purpose healthy for them and humanity.
                        </div>
                    </div>
                </div>

                <!-- Tab 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How we benefit the economy
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            10 Feral Hogs puts good American currency into circulation while alienting the public cost of animal removal. We maintain our piece of the environment giving the government flexibilty to maintain theirs.
                        </div>
                    </div>
                </div>

                <!-- Tab 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Hog meat is tasty and good for you.
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            While our hogs are mostly meant as pets. If you so choose, you could eat them. Their meat is full of protein and tastes gamey, very good for roasts and stews.
                        </div>
                    </div>
                </div>

                <!-- Tab 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Owning a hog will inspire you to exercise more
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The physical needs of your feral hogs are very important to their health. If they don't get proper exercise everyday they could have health issues. If you are a responsible owner, that means you'll want to be going on walk with your hog and in general getting out and moving with your pet.
                        </div>
                    </div>
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