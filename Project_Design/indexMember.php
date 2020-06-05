<?php
   include('..//ApplicationLayer/MemberClass.php');

//trying Write Review Method
if(isset($_POST['SendReview']))
    {
        $m_object= new Member();
        session_start();
        $member_Id=$_SESSION['id'];
        $tname = $_POST['TrainerName'];
        $m_object->writeReview($member_Id,$tname,$_POST['message']);
    }
    
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
                                            <a href="<?php echo 'changepass.php'; ?>">Change Password</a>
                                         </div>
                                    </div>
                                </li>
                                  
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?php echo 'indexMember.php'; ?>"><i class="fas fa-user-circle text-white width:10%"></i> MY PROFILE</a>
                                        
                                </li>
                               
                                
                                <li class="nav-item bg-dark" style="width: 40%">                        
                                    <div class="dropdown3">                                       
                                        <a onclick="myFunction3()" class="dropbtnNotify nav-link text-white">Notifications</a>
                                        <div id="myDropdown3" class="dropdown-content3">
<!--heeeeere is the beginning of the text paart-->                                             
                                            <a href="#">first notifiction</a>
                                            <a href="#">second notification</a>
                                            <a href="#">third notification</a>
                                            <a href="#">fourth notification</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                <form method="POST">
                                    <a class="nav-link " ><button class="bg-dark text-white" name="logoutbtn">LOGOUT</button> <i class="fas fa-long-arrow-alt-right text-white"></i></a>
                                </form>    
                                </li>
                            </ul>
                        </div>
                </nav>
           </div>
           <div class="overlay">
                <div class="container middle text-white choose">
                        <a href="<?php echo 'memberpackage.php'; ?>" class="pick_btn middle btn btn_inverse cover_cta scroll text-white ">
                            <button class="text-white p-2 px-4 button "> <h1 class="m-5">My Package »</h1></button>
                        </a>
                        <a href="<?php echo 'memberExtrasessions.php'; ?>" class=" pick_btn middle btn btn_inverse cover_cta scroll text-white ">
                            <button class="text-white p-2 px-4 button "> <h1 class="m-5">My Extra Sessions »</h1></button>
                        </a>
               </div>
                        
            </div>
       </div>
       <section id="review"> 
            <div class="container">
                <div class="row" >
                    <div class="secondiv text-white">
                        <h1 class="ftitle text-white">REVIEWS</h1>
                        <p class="text-white">help us get better so, please choose a trainer and leave a review</p>
                    
                        <div class="container reviewtext">
                                <form class=" reviewsize" method="POST">
                                        <li class="nav-item bg-dark" style="width: 40%">                        
                                                <div class="dropdown2">
                                                    <a onclick="myFunction2()" class="dropbtn2 nav-link text-white">Pick a Trainer</a>
                                                    <div id="myDropdown2" class="dropdown-content2">
                                                        <button name="AhmedKamel">Ahmed Kamel</button>
                                                        <button name="AyaSaeed">Aya Saeed</button>
                                                        <button name="AhmedWaleed">Ahmed Waleed</button>
                                                        <button name="KareemMohamed">Kareem Mohamd</button>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="trainerid">Trainer Name</label>
                                                    <input type="text" name="TrainerName"class="form-control">
                                                    </div>
                                                </div>
                                            </li>
                                            <br>
                                        <div class="field">
                                            <textarea class="form-control" name="message" placeholder="Enter Message" rows="6" ></textarea>
                                        </div>
                                            <br>
                                        <div class="field">
                                            <button type="submit" name="SendReview" class="btn btn_cta bg-white text-dark">Send Review</button>
                                        </div>
                                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
              
       <script>
           /* When the user clicks on the button, 
              toggle between hiding and showing the dropdown content */
            function myFunction() {
                 document.getElementById("myDropdown").classList.toggle("show");
            }
            function myFunction2() {
                 document.getElementById("myDropdown2").classList.toggle("show2");
            }
            function myFunction3() {
                 document.getElementById("myDropdown3").classList.toggle("show3");
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
            window.onclick = function(event) {
                 if (!event.target.matches('.dropbtn2')) {
                      var dropdowns = document.getElementsByClassName("dropdown-content2");
                      var i;
                     for (i = 0; i < dropdowns.length; i++) {
                          var openDropdown = dropdowns[i];
                         if (openDropdown.classList.contains('show2')) {
                             openDropdown.classList.remove('show2');
                            }
                         }
                     }
                 }
                 window.onclick = function(event) {
                 if (!event.target.matches('.dropbtnNotify')) {
                      var dropdowns = document.getElementsByClassName("dropdown-content3");
                      var i;
                     for (i = 0; i < dropdowns.length; i++) {
                          var openDropdown = dropdowns[i];
                         if (openDropdown.classList.contains('show3')) {
                             openDropdown.classList.remove('show3');
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