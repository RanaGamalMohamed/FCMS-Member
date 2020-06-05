<?php
include("../ApplicationLayer/AdminClass.php");
if(isset($_POST['submit']))
{
    session_start();

$sessionId = $_SESSION['sessionId'];
//NOTE THAT YOU NEED ADMIN ID FROM LOGIN SESSION VARIABLE AND PLACE IT INSTEAD OF LAST INDEX IN THE ARRAY
$array =  array($_POST['sessionName'], $_POST['sessionCost'],$_POST['sessionDiscount'] ,$_POST['startTime'],$_POST['endTime'],$_POST['sessionDays'],$_POST['sessionGoal'],$_POST['trainerName'] , 1);
$admin = new Admin(1);

$admin->updateSession($array,$sessionId);

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
       <div class="home" style="height:100vh">
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
                                    <a class="nav-link text-white" href="<?php echo 'indexAdmin.php'; ?>"><i class="fas fa-user-circle text-white width:10%"></i> MANAGE USERS</a>
                                        
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">LOGOUT <i class="fas fa-long-arrow-alt-right text-white"></i></a>

                                </li>
                            </ul>
                        </div>
                </nav>
           </div>
           <div class="overlay">
                <div class="container text-white">
                    <form class="addform" method ="POST">

                         <div class="form-group">
                          <label for="sessionname">session name</label>
                          <input type="name" class="form-control" name="sessionName">
                        </div>
                        <div class="form-group">
                          <label for="sessioncost">session cost</label>
                          <input type="number" class="form-control" name = "sessionCost">
                        </div>
                        <div class="form-group">
                          <label for="sessiondiscount">session discount</label>
                          <input type="number" class="form-control" name = "sessionDiscount">
                        </div>
                        <div class="form-group">
                            <label for="stime">start time</label>
                            <input class="form-control" name = "startTime">
                        </div>
                        <div class="form-group">
                            <label for="etime">end time </label>
                            <input class="form-control" name = "endTime">
                         </div>
                         <div class="form-group">
                            <label for="memberphone">session days</label>
                            <input class="form-control" name = "sessionDays">
                         </div>
                         <div class="form-group">
                            <label for="sessiongoal">session goal</label>
                            <input class="form-control" name = "sessionGoal">
                         </div>
                         <div class="form-group">
                            <label for="trainername">trainer name</label>
                            <input type="name" class="form-control" name = "trainerName">
                         </div>
                        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                      </form>
                </div>
                        
            </div>
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