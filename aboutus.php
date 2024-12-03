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
                            "There is no greater joy than that of the hero. At 10 Feral Hogs, we strive to not only bask in that joy but bring it to our customers."
                        </p>
                        <!-- More Info Button -->
                        <button class="btn btn-info" data-bs-toggle="collapse" href="#samuelMoreInfo" role="button" aria-expanded="false" aria-controls="samuelMoreInfo">More Info</button>
                        <div class="collapse mt-3" id="samuelMoreInfo">
                            <div class="card card-body">
                                <p><strong>Job Title:</strong> Chief Visionary Officer</p>
                                <p><strong>Former Experience:</strong> 10+ years in product development and innovation. Former senior consultant for top Fortune 500 companies.</p>
                                <p><strong>Expertise:</strong> Leadership, Strategic Planning, and Business Innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Statement 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/rataboutus.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="Mason Blankenship" style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mason Blankenship</h5>
                        <p class="card-text">
                            "Ever since I was a boy, I've wanted to work with animals and spread that love to others."
                        </p>
                        <!-- More Info Button -->
                        <button class="btn btn-info" data-bs-toggle="collapse" href="#masonMoreInfo" role="button" aria-expanded="false" aria-controls="masonMoreInfo">More Info</button>
                        <div class="collapse mt-3" id="masonMoreInfo">
                            <div class="card card-body">
                                <p><strong>Job Title:</strong> Director of Animal Welfare</p>
                                <p><strong>Former Experience:</strong> Worked at various wildlife rescue centers and farms, focusing on animal behavior training and rehabilitation.</p>
                                <p><strong>Expertise:</strong> Animal Training, Public Education, and Wildlife Rehabilitation.</p>
                            </div>
                        </div>
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
                            "Our mission is to humanely transform wild hogs into well-adjusted animals through compassionate training."
                        </p>
                        <!-- More Info Button -->
                        <button class="btn btn-info" data-bs-toggle="collapse" href="#eldridgeMoreInfo" role="button" aria-expanded="false" aria-controls="eldridgeMoreInfo">More Info</button>
                        <div class="collapse mt-3" id="eldridgeMoreInfo">
                            <div class="card card-body">
                                <p><strong>Job Title:</strong> Chief Operating Officer</p>
                                <p><strong>Former Experience:</strong> Over 12 years of experience working in wildlife management and sustainable farming practices.</p>
                                <p><strong>Expertise:</strong> Wildlife Management, Sustainable Practices, and Ecosystem Restoration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Samuel Latham -->
    <div class="modal fade" id="samuelModal" tabindex="-1" aria-labelledby="samuelModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="samuelModalLabel">Samuel Latham</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="images/profile.jpg" class="rounded-circle mb-3" alt="Samuel Latham" style="width: 100px; height: 100px; object-fit: cover;">
                    <p>"There is no greater joy than that of the hero. At 10 Feral Hogs, we strive to not only bask in that joy but bring it to our customers."</p>
                    <p><strong>Job Title:</strong> Chief Visionary Officer</p>
                    <p><strong>Former Experience:</strong> 10+ years in product development and innovation.</p>
                    <p><strong>Expertise:</strong> Leadership, Strategic Planning, Business Innovation, and Environmental Sustainability.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Mason Blankenship -->
    <div class="modal fade" id="masonModal" tabindex="-1" aria-labelledby="masonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="masonModalLabel">Mason Blankenship</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="images/profile.jpg" class="rounded-circle mb-3" alt="Mason Blankenship" style="width: 100px; height: 100px; object-fit: cover;">
                    <p>"Ever since I was a boy, I've wanted to work with animals and spread that love to others."</p>
                    <p><strong>Job Title:</strong> Director of Animal Welfare</p>
                    <p><strong>Former Experience:</strong> Worked at various wildlife rescue centers and farms.</p>
                    <p><strong>Expertise:</strong> Animal Training, Public Education, and Wildlife Rehabilitation.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Eldridge Davis -->
    <div class="modal fade" id="eldridgeModal" tabindex="-1" aria-labelledby="eldridgeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eldridgeModalLabel">Eldridge Davis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="images/profile.jpg" class="rounded-circle mb-3" alt="Eldridge Davis" style="width: 100px; height: 100px; object-fit: cover;">
                    <p>"Our mission is to humanely transform wild hogs into well-adjusted animals through compassionate training."</p>
                    <p><strong>Job Title:</strong> Chief Operating Officer</p>
                    <p><strong>Former Experience:</strong> Over 12 years in wildlife management and sustainable farming practices.</p>
                    <p><strong>Expertise:</strong> Wildlife Management, Ecosystem Restoration, and Sustainable Practices.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
