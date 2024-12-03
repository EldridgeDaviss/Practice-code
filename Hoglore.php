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
    <link rel="stylesheet" href="about.css">
    <title>Hog Lore - 10 Feral Hogs</title>

    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        /* Content Section */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .accordion-button {
            background-color: #0056b3;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: #003366;
        }

        .accordion-body {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        .accordion-item {
            margin-bottom: 1.5rem;
        }

        .accordion-body img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .accordion-header {
            padding: 10px;
        }

        footer {
            background-color: #382102;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1rem;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            h2 {
                font-size: 2rem;
            }

            .accordion-button {
                font-size: 1rem;
            }

            .accordion-body {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="container">
        <h2 class="text-center">Hog Lore</h2>

        <div class="accordion" id="accordionExample">

            <!-- Tab 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Where do your Hogs come from?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <img src="img/assorted/2024_10_31_0c9_Kleki.png" alt="Hogs Image">
                        <p>Whichever green zone your house is in, your hogs will come from the red counties within that
                            zone. (Customers outside the contiguous 48 will receive our excess stock from Texas.)</p>
                    </div>
                </div>
            </div>

            <!-- Tab 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Vendor Tales
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <h4>"I was building a cabin in the woods, right outside Cherokee National Forest and I heard
                            hogs up on the ridge. My first thought was to call 10 Feral Hogs. They immediately came and
                            rescued the Hogs, ensuring they went to a good home." <br> - Brian Buchholz, 2025 TSSAA Boys
                            Class A Cross Country Champion</h4>
                    </div>
                </div>
            </div>

            <!-- Tab 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why buying hogs makes you a good person
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        When you make a purchase from 10 Feral Hogs, you are supporting an industry dedicated to
                        improving the world. Gone are the days of industrial destruction of our environment. We uphold
                        traditional capitalist values and support the boon of free trade, but the environment is our
                        first priority. Your purchase will help renew the lives of these once dangerous animals with a
                        sense of purpose healthy for them and humanity.
                    </div>
                </div>
            </div>

            <!-- Tab 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How we benefit the economy
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        10 Feral Hogs puts good American currency into circulation while alleviating the public cost of
                        animal removal. We maintain our piece of the environment, giving the government flexibility to
                        maintain theirs.
                    </div>
                </div>
            </div>

            <!-- Tab 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Hog meat is tasty and good for you
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        While our hogs are mostly meant as pets, if you so choose, you could eat them. Their meat is
                        full of protein and tastes gamey—very good for roasts and stews.
                    </div>
                </div>
            </div>

            <!-- Tab 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Owning a hog will inspire you to exercise more
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The physical needs of your feral hogs are very important to their health. If they don't get
                        proper exercise every day, they could have health issues. If you are a responsible owner, that
                        means you'll want to be going on walks with your hog and, in general, getting out and moving
                        with your pet.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html