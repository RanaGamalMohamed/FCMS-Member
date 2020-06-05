<?php
    include'..//DataLayer/Database.php';
    session_start();
    //here is the global variable for the session
    $id=$_SESSION['id'];

    class person{
        
        function __construct(){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();

        }

        function login($id,$mail,$pass){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            if(!empty($id) AND !empty($mail) AND !empty($pass)){
              
                $sqlmember ="SELECT Member_id and Member_email and Member_password FROM member WHERE Member_id='$id' and Member_email = '$mail' and Member_password = '$pass'";
                $sqltrainer ="SELECT Trainer_id and Trainer_email and Trainer_password FROM trainer WHERE Trainer_id='$id' and Trainer_email = '$mail' and Trainer_password = '$pass'";
                $sqladmin="SELECT Admin_id and Admin_email and Admin_password FROM admin WHERE Admin_id='$id' and Admin_email = '$mail' and Admin_password = '$pass'";
                if(isset($sqltrainer)){
                    $result= mysqli_query($conn,$sqltrainer);
                    if(mysqli_num_rows($result)==1){
                        session_start();
                        $_SESSION['id']=$id;
                        $_SESSION['mail']=$mail;
                        $_SESSION['pass']=$pass;
                         header('location:indexTrainer.php'); 
                          
                         } 
                         else{
                             echo "email or password are wrong";
                         }
     
                     }
                if(isset($sqlmember)){
                        $result= mysqli_query($conn,$sqlmember);
                        if(mysqli_num_rows($result)==1){
                            session_start();
                            $_SESSION['id']=$id;
                            $_SESSION['mail']=$mail;
                            $_SESSION['pass']=$pass;
                             header('location:indexMember.php'); 
                              
                             } 
                             else{
                                 echo "email or password are wrong";
                            }
         
                    }
                    if(isset($sqladmin)){
                        $result= mysqli_query($conn,$sqladmin);
                        if(mysqli_num_rows($result)==1){
                            session_start();
                            $_SESSION['id']=$id;
                            $_SESSION['mail']=$mail;
                            $_SESSION['pass']=$pass;
                             header('location:indexAdmin.php'); 
                              
                             } 
                             else{
                                 echo "email or password are wrong";
                            }
         
                    }
                }
                else{
                    echo "Please enter email and password";
                }

            
           
        }
        function logout(){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            session_start();
            session_destroy();
            unset($_SESSION['mail']);

            header('location:index1.php');     
          
        }
        function updateProfile($oldpass,$newpass,$confirmpass){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            $id=$_SESSION['id'];
            if(isset($id)){
                $query="SELECT Member_password FROM Member WHERE Member_id='$id'";
                $query2="SELECT Trainer_password FROM Trainer WHERE Trainer_id='$id'";
                if(isset($query)){
                    $result= mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){
                        $pass=$row['Member_password'];
                        if($pass==$oldpass){
                            if($newpass==$confirmpass){
                                $updatequery="UPDATE Member SET Member_password='$confirmpass' WHERE Member_id='$id'";
                                $update=mysqli_query($conn,$updatequery);
                                echo"updated successfully";
                            }
                            else{
                                echo"passwords don't match";
                            }

                        }
                    }

                }
                if(isset($query2)){
                    $result= mysqli_query($conn,$query2);
                    while($row=mysqli_fetch_array($result)){
                        $pass=$row['Trainer_password'];
                        if($pass==$oldpass){
                            if($newpass==$confirmpass){
                                $updatequery="UPDATE Trainer SET Trainer_password='$confirmpass' WHERE Trainer_id='$id'";
                                $update=mysqli_query($conn,$updatequery);
                                echo"updated successfully";
                            }
                            else{
                                echo"passwords don't match";
                            }

                        }
                    }

                }
            }
            else{
                header('location:signinform.php');   
            }


        }
        function signup($fname,$lname,$email,$password,$number){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            if(!empty($fname) AND !empty($lname) AND !empty($email) AND !empty($password) AND !empty($number)){
              
                $sql ="INSERT INTO Member(Member_Fname,Member_Lname,Member_email,Member_password,MobileNumber) VALUES ('$fname','$lname','$email','$password','$number')";
                $result= mysqli_query($conn,$sql);
                   $_SESSION['message']="welcome";
                   $_SESSION['fname']=$fname;
                   $_SESSION['email']=$email;
                    header('location:indexMember.php');  
                }
                else{
                    echo "Please fill the data";
                }
        }



    }
 
    $personobject= new person();

    if(isset($_POST['loginbtn'])){

        $personobject->login($_POST['id'],$_POST['mail'],$_POST['pass']);
    }
    if(isset($_POST['logoutbtn'])){
        $personobject->logout();
    }
    if(isset($_POST['changepassbtn'])){
        $personobject->updateProfile($_POST['oldpass'],$_POST['newpass'],$_POST['confirmpass']);
       
    }
    if(isset($_POST['signupbtn'])){
        $personobject->signup($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['password'],$_POST['number']);
       
    }
 
    


?>