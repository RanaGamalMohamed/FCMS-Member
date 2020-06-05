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
       <div class="home" style="height: 100vh">
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
                                     <a class="nav-link text-white" href="<?php echo 'index1.php #aboutus'; ?>">ABOUT US</a>
                                </li>
                                <li class="nav-item">                        
                                    <div class="dropdown">
                                        <a onclick="myFunction()" class="dropbtn nav-link text-white" >MORE<img src="images/arrow.jpg" class="arrow"> </a>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="<?php echo 'index1.php #sessions'; ?>">Sessions</a>
                                            <a href="<?php echo 'index1.php #packages'; ?>">Packages</a>
                                            <a href="<?php echo 'index1.php #branches'; ?>">Our Branches</a>
                                            <a href="<?php echo 'index1.php #contactus'; ?>">Contact Us</a>
                                        </div>
                                    </div>
                                </li>
                                  
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?php echo 'indexMember.php'; ?>"><i class="fas fa-user-circle text-white width:10%"></i>MY PROFILE</a>
                                        
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">LOGOUT <i class="fas fa-long-arrow-alt-right text-white"></i></a>

                                </li>
                            </ul>
                        </div>
                </nav>
           </div>
           <div class="overlay ">
             
                <div class="container middle">
                    <div class="row ">
                            <div class="totaldivs">
                                    <h1 class="font-weight-bold text-white">Extra Sessions</h1>
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
                                </div>
                    </div>
                </div>          
            </div>
       </div>
       <!--start of popup modals-->
       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body modal_one ">
                        <h1>Zumba</h1>
                        <p style="padding-left: 10px">-If you want to improve your cardiovascular fitness<br> while having fun and dancing then this is the right class for you. </p>
                        <h3>schedule:</h3>
                        <h5 style="margin-left: 10px; margin-bottom:20px">Choose a trainer</h5>
                        <div class="datesdiv">
                            <p>sunday:<br> 16:30->18:30 </p>
                            <p>wednessday:<br> 14:00->16:00 </p>
                        </div>
                        <div class="trainersbuttondiv">
                            <button class="btn">Ahmed Waleed</button>
                            <button class="btn">Nancy Farid</button>
                        </div>
                        <div class="trainersbuttondiv">
                                <button class="btn">Ahmed Waleed</button>
                                <button class="btn">Nancy Farid</button>
                        </div>
                        <button class="selectbtn text-white">Select</button>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body modal_two ">
                            <h1>Kickboxing</h1>
                            <p style="padding-left: 10px">-If you want to improve your cardiovascular fitness<br> while having fun and dancing then this is the right class for you. </p>
                            <h3>schedule:</h3>
                            <h5 style="margin-left: 10px; margin-bottom:20px">Choose a trainer</h5>
                            <div class="datesdiv">
                                <p>Monday:<br> 16:00->18:00 </p>
                                <p>Thursday:<br> 14:00->16:00 </p>
                            </div>
                            <div class="trainersbuttondiv">
                                <button class="btn">Karim Adel</button>
                                <button class="btn">Menna Shokry</button>
                            </div>
                            <div class="trainersbuttondiv">
                                    <button class="btn">Karim Adel</button>
                                    <button class="btn">Menna Shokry</button>
                            </div>
                            <button class="selectbtn text-white">Select</button>
                        </div>
                    </div>
                </div>
        </div>
        <!--end of popup modals-->
      
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