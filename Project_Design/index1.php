<?php
    include'PersonClass.php';
?>

<html>
    <head>
        <title>FitnessHouse.com</title>
        <link href="css/bootstrap.min.css " rel="stylesheet">
        <link href="file.css" rel="stylesheet"> 
       <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="css/fontawesome-free-5.8.1-web/css/all.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>    
        <div class="home">
            <div class="nav">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
                    <a href="#"><img src="images/logo3.jpg" class="navimg"></a>
                    <a href="#" class="coder">Fitness House</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo 'index1.php'; ?>">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#aboutus">ABOUT US</a>
                            </li>
                            <li class="nav-item">                        
                                <div class="dropdown">
                                    <a onclick="myFunction()" class="dropbtn nav-link text-white" >MORE<img src="images/arrow.jpg" class="arrow"> </a>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="#sessions">Sessions</a>
                                        <a href="#packages">Packages</a>
                                        <a href="#branches">Our Branches</a>
                                        <a href="#contactus">Contact Us</a>
                                    </div>
                                 </div>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo 'signinform.php'; ?>">SIGNIN</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo 'signupform.php'; ?>">REGISTER</a>
                            </li> 
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="overlay">
                <div class="container middle text-white">
                    <h1>LET'S WORK ON SOMETHING <br>INTERESTING TODAY</h1>
                    <h3>have a little faith in yourself and strat right now...</h3>
                    <a href="#section_about" class="btn btn_inverse cover_cta scroll text-white ">
                        <button class="text-white p-2 px-4 button "> <p>Know More  »</p></button>
                    </a>
                </div>
                
            </div>
        </div>

        <section id="aboutus"> 
            <div class="container">
                <div class="row" >
                    
                        <div class="secondiv">
                                <h1 class="ftitle">ABOUT US</h1>
                                <p class="ftitle2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                <br><br>
                                <img src="images/class3.jpg">
                        
                            
                            <div class="rightdiv">
                                <h1>TRAIN HARD. MOVE FAST. GET STRONG.</h1>
                                <p class="except">This is what we believe</p>
                                <p>Fitness House Athletics helps you get the most out of your World Gym with <br> progressive individual and small group fitness programs. 
                                    These combine elements of tactical training, functional training and high intensity interval training.<br> 
                                     The raw, no-nonsense and balanced approach to fitness offers a more<br> complete training program to help you achieve your fitness goals.
                                     See why <br>Fitness House Athletics is the most complete, balanced, inspirational and fun training program in the industry.  </P>
                
                                
                            
                            
                                <i class="fab fa-facebook-f face"></i>
                                <i class="fab fa-twitter ok"></i>
                                <i class="fab fa-google-plus-g plus"></i>
                        
                            </div>
                        </div>
                    
                   
                
                </div>
            
            </div>
        
        </section>
    
        <section class="work2">
                <div class="container ">
                    <div class="row">
                        <div class="twodivs">
                            <h1>Our Coaches</h1>
                                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                                        <ol class="carousel-indicators">
                                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                                <div class="first">
                                                        <img src="images/guytrainer1.jpg" alt="First slide">
                                                        <p class="text-white">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                                                        <h3 class="text-danger font-weight-bold">Ahmed Waleed</h3>
                                                        <p class="text-white">Body Building and zumba coach</p>
                                                 </div>
                                                 <div class="second">
                                                        <img src="images/girltrainer4.jpg" alt="Second slide">
                                                        <p class="text-white">“Lorem ipsum dolor sit amet adipiscing elit.”</p>
                                                        <h3 class="text-danger font-weight-bold ">Nancy Farid</h3>
                                                        <p class="text-white">Zumba Coach</p>
                                                </div>
                                          </div>
                                          <div class="carousel-item">
                                                <div class="first">
                                                        <img src="images/guytrainer3.jpg" alt="First slide">
                                                        <p class="text-white">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                                                        <h3 class="text-danger font-weight-bold">Kareem Adel</h3>
                                                        <p class="text-white">KickBoxing coach</p>
                                                 </div>
                                                 <div class="second">
                                                        <img src="images/girltrainer2.jpg" alt="Second slide">
                                                        <p class="text-white">“Lorem ipsum dolor sit amet adipiscing elit.”</p>
                                                        <h3 class="text-danger font-weight-bold ">Menna Shokry</h3>
                                                        <p class="text-white">KickBoxing coach</p>
                                                </div>
                                             
                                          </div>
                                          <div class="carousel-item">
                                                <div class="first">
                                                        <img src="images/guytrainer2.JFIF" alt="First slide">
                                                        <p class="text-white">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.”</p>
                                                        <h3 class="text-danger font-weight-bold">Ahmed Kamel</h3>
                                                        <p class="text-white">Cardio coach</p>
                                                 </div>
                                                 <div class="second">
                                                        <img src="images/girltrainer3.jpg" alt="Second slide">
                                                        <p class="text-white">“Lorem ipsum dolor sit amet adipiscing elit.”</p>
                                                        <h3 class="text-danger font-weight-bold ">Aya Saeed</h3>
                                                        <p class="text-white">Cardio coach</p>
                                                </div>
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="padding-right: 100px">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="padding-left: 100px">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                </div>
                        </div>
                    </div>
                </div>
         </section>

        <section class="backg" id="sessions">
            <div class="container">
                <div class="row">
                    <div class="totaldivs">
                        <h1 class="font-weight-bold">Our Classes & Sessions</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <div>
                            <a data-toggle="modal" data-target="#exampleModal1">  
                                <div class="one zumba">
                                   <i class="fas fa-music"></i>
                                    <h4 class="font-weight-bold">Zumba</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#exampleModal2">
                                <div class="two kickboxing">
                                    <i class="fas fa-running"></i>
                                    <h4 class="font-weight-bold">KickBoxing</h4>
                                </div>
                            </a> 
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#exampleModal3">
                                <div class="three cardio">
                                    <i class="fas fa-dumbbell"></i>
                                    <h4 class="font-weight-bold">Cardio</h4>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#exampleModal4">
                                <div class="one mt-4 massagetherapy">
                                    <i class="fas fa-leaf"></i>
                                    <h4 class="font-weight-bold">Massage Therapy</h4>
                                </div>
                            </a>    
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#exampleModal5">
                                <div class="two mt-4 yoga">
                                    <i class="fas fa-pray"></i>
                                    <h4 class="font-weight-bold">Yoga</h4>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#exampleModal6">
                                <div class="three mt-4 jacuzzi">
                                    <i class="fas fa-spa"></i>
                                    <h4 class="font-weight-bold">Spa&Jacuzzi</h4>
                                </div>
                            </a>
                        </div>
                        
                         <div class="check">
                        <a href="<?php echo 'Booking.php'; ?>"><button class="choosebtn bg-danger text-white font-weight-bold check2">BOOK Sessions!</button></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="six" id="packages">
            <div class="container">
                <div class="row">
                    <div class="total">
                        <h1 class="font-weight-bold ">CHECK OUR PACKAGES</h1>
                        <p class="text-white style:margin-left: 20px;">All packages include : 24/7 club access , use of lockers and showers </p>
                        <br> <br>
                        
                        <div class="firstpackages">
                            <div class="package1">

                                <div class="white text-center titleBackground float-left">
                                    <h4 class="font-weight-bold">1 Month</h4>
                                    <p class="priceText">500 EGP</p>
                                </div>
                                <div>
                                     <p class="insideText">- 1 time free massage therapy</p>
                                     <p class="insideText">- 2 times access to spa & jacuzzi</p>
                                    
                                </div>
                            </div>
                            <div class="package2">
                                <div class="white text-center titleBackground  float-left">
                                    <h4 class="font-weight-bold">3 Months</h4>
                                    <p class="priceText">1200 EGP</p>
                                </div>
                                <div>
                                    <p class="insideText">- 2 times free massage therapy</p>
                                    <p class="insideText">- 4 times access to spa & jacuzzi</p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>
                    <div class="total">
                        
                        <div class="firstpackages">
                            <div class="package1">
                                
                                <div class="white text-center titleBackground float-left">
                                    <h4 class="font-weight-bold">6 Months</h4>
                                    <p class="priceText">2200 EGP</p>
                                </div>
                                <div>
                                    <p class="insideText">- 3 times free massage therapy</p>
                                    <p class="insideText">- unlimited access to spa & jacuzzi</p>
                                    
                                 </div>
                            </div>
                            <div class="package2">
                              
                                <div class="white text-center titleBackground float-left">
                                    <h4 class="font-weight-bold">12 Months</h4>
                                    <p class="priceText">3000 EGP</p>
                                </div>
                                <div>
                                    <p class="insideText">- 6 times free massage therapy</p>
                                    <p class="insideText">- unlimited access to spa & jacuzzi</p>
                                    <p class="insideText">- Free club T-shirt</p>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div class="check">
                        <a href="<?php echo 'BookingPackages.php'; ?>"><button class="choosebtn bg-danger text-white font-weight-bold check2">BOOK Packages!</button></a>
                        </div>

                    </div>
               
                </div>
            </div>
        </section>
        

   
        <section class="last" id="branches"> 
            <div class="container">
                <div class="row ">
                    <div class="lastall">
                        <div class="lastleft pt-5">
                                <h2 class="font-weight-bold ">OUR BRANCHES</h2>
                                <br>
                                <p><i class="fas fa-map-marker-alt mr-2"></i>545 New Street, maadi
                                <br><i class="fas fa-map-marker-alt mr-2 pt-2"></i>21 Abbas ElAkad ,Nasr City</p>
                         </div>
                         <div class="vl">
                            <div class="lastright pt-5">
                                <h2 class="font-weight-bold">CONTACT INFO</h2>
                                <p class="pl-2">If you have any questions you can easily contact us</p>
            
                                <p><i class="fas fa-envelope mr-2 pl-2"></i><a href="#" class="text-danger">fitness_house@gmail.com</a></p>
                                <p><i class="fas fa-phone mr-2 pl-2"></i>19055</p>
                                <br>
                                    <i class="fab fa-facebook-f face2"></i>
                                    <i class="fab fa-twitter ok2"></i>
                                    <i class="fab fa-google-plus-g plus2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="splitter">
            <P class="text-white text-center"> all copyrightes are reserved </P>
        </div>
        <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }
                
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
    
        
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
    </body>
    
</html>