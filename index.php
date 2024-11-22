


<?php
  include 'includes/header.php';

// Check if the popup has been shown before
$popupShown = isset($_SESSION['popupShown']) ? $_SESSION['popupShown'] : false;
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>10 Feral Hogs - Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    



      <style>
        /* Popup styling */
        #exitPopup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999;
        }
        #exitPopup .popup-content {
            position: relative;
            margin: 10% auto;
            width: 80%;
            max-width: 400px;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }
        #exitPopup h2 {
            color: #382102;
        }
        #exitPopup button {
            background-color: #382102;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #exitPopup button:hover {
            background-color: #5a3d15;
        }
    </style>
</head>
<body>



    <!-- Discount Popup -->
    <div id="exitPopup">
        <div class="popup-content">
            <h2>Wait! Don't Leave Yet!</h2>
            <p>We have a special offer for you:</p>
            <p><strong>Get 10% off your first order!</strong></p>
            <p>Use code: <strong>WELCOME10</strong> at checkout.</p>
            <button id="closePopup">Claim Offer</button>
        </div>
    </div>

    <script>
        // JavaScript for exit intent detection and popup management
        let popupShown = <?php echo $popupShown ? 'true' : 'false'; ?>;

        if (!popupShown) {
            document.addEventListener("mouseleave", (e) => {
                if (e.clientY < 0 && !popupShown) { // Detect mouse leaving the viewport
                    document.getElementById("exitPopup").style.display = "block";
                    popupShown = true;

                    // Notify server to remember popup has been shown
                    fetch("index.php?action=shown").then(response => {
                        if (!response.ok) console.error("Failed to notify server.");
                    });
                }
            });

            document.getElementById("closePopup").addEventListener("click", () => {
                document.getElementById("exitPopup").style.display = "none";
            });
        }
    </script>

    <?php
    // Handle the server-side action to store that the popup has been shown
    if (isset($_GET['action']) && $_GET['action'] === 'shown') {
        $_SESSION['popupShown'] = true;
        exit; // Prevent further HTML rendering
    }
    ?>







      
   </head>
   <body>


    


      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">10</h1>
                              <h1 class="coffee_text">Feral Hogs</h1>
                              <p class="there_text">Find a new companion for the next stage of your life, we're not just a company, but a movement. We sell hogs so you dont need dogs and to help the environment. </p>
                              <div class="learnmore_bt"><a href="Hoglore.php">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Hogs </h1>
                              <h1 class="coffee_text">For Days</h1>
                              <p class="there_text">Find a new companion for the next stage of your life, we're not just a company, but a movement. We sell hogs so you dont need dogs and to help the environment.  </p>
                              <div class="learnmore_bt"><a href="Hoglore.php">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Save </h1>
                              <h1 class="coffee_text">The Environment</h1>
                              <p class="there_text">Find a new companion for the next stage of your life, we're not just a company, but a movement. We sell hogs so you dont need dogs and to help the environment. </p>
                              <div class="learnmore_bt"><a href="Hoglore.php">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">About Us</div>
                     <p class="about_text">Why don't you take the time to learn about our product.</p>
                     <p class="about_text">We specialize in providing hogs for every unique need. Whether you're looking for chariot hogs for traditional showcases, vacation hogs for a delightful getaway experience, or police hogs trained for security and patrol, we have you covered. With a commitment to quality, care, and innovation, we are your trusted partner in finding the perfect hog for any occasion.</p>
                     <div class="read_bt"><a href="aboutus.php">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="img/Hog photos/OIP(12).jpg" width="500px"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Our Gallery</h1>
                  <p class="gallery_text">We sell a wide variety of hogs. Why dont you take a look and see if there are any you like. Explore our selection of premium hogs, raised with care to meet the highest standards. From robust breeding stock to healthy market-ready hogs, our gallery showcases the quality and diversity of our herd.</p>
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(6).jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(7).jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(8).jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(9).jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(10).jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(11).jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(13).png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(14).png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="img/Hog photos/OIP(15).png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="hogs.php"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="hogs.php">See More</a></div>
         </div>
      </div>
      <!-- gallery section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Services</h1>
                  <p class="services_text">Check out the variety of services we provide!</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
</svg>

                         
                        </div>
                        <h3 class="decorate_text">Selling Hogs</h3>
                        <p class="tation_text"> Our expertly trained hogs are sold in batches of ten, ensuring quality and consistency for every purpose.</p>
                        <div class="readmore_bt"><a href="Hoglore.php">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
  <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
  <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5m6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
</svg>
                           
                        </div>
                        <h3 class="decorate_text">Training Hogs</h3>
                        <p class="tation_text">At 10 Feral Hogs, we specialize in training hogs to excel in unique roles, from vacation companions to law enforcement partners.</p>
                        <div class="readmore_bt"><a href="Hoglore.php">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
</svg>
                          
                        </div>
                        <h3 class="decorate_text">Feral Hog Collection</h3>
                        <p class="tation_text">We carefully collect wild feral hogs and transform them into well-trained, versatile animals ready to meet our customers’ needs.</p>
                        <div class="readmore_bt"><a href="Hoglore.php">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- testimonial section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Testimonial</h1>
                  <p class="client_text">Here's what our satisfied customers have to say about the unique and expertly trained hogs from 10 Feral Hogs!</p>
               </div>
            </div>
         </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Louis S. (Resort Owner) <span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                            <p class="customer_text">"We recently purchased a batch of vacation hogs from 10 Feral Hogs, and they were an absolute delight! Each hog was healthy, well-behaved, and added so much charm to our countryside retreat. The team made the whole process seamless, and our guests couldn’t stop talking about how unique the experience was. Highly recommend!"</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Marco A. (Event Organizer) <span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                            <p class="customer_text">"I needed dependable chariot hogs for a historic parade, and 10 Feral Hogs delivered beyond my expectations. The batch of ten arrived in excellent condition and were perfectly trained for the event. Their professionalism and the quality of the hogs are unmatched. This is my go-to hog supplier from now on!"</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Roger B. (Police Officer)<span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                            <p class="customer_text">"Our security team was in need of a batch of highly trained police hogs, and 10 Feral Hogs came through. These hogs are intelligent, disciplined, and a real asset to our patrol units. We’ve seen a significant improvement in our operations since their arrival. Exceptional service and incredible animals!"</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      <!-- testimonial section end -->
     
    
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>   
      <script src="script.js"></script>
      
      <?php
include 'includes/footer.php'

?>
   </body>
</html>