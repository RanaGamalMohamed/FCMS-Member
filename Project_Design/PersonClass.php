<?php
    include'..//DataLayer/Database.php';
    class person{
        
        function __construct(){
            session_start();
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();

        }

        function login($mail,$pass){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            if(!empty($mail) AND !empty($pass)){
              
                $sql ="SELECT Member_email and Member_password FROM member WHERE Member_email = '$mail' and Member_password = '$pass'";
                $result= mysqli_query($conn,$sql);
               if(mysqli_num_rows($result)==1){
                   $_SESSION['message']="welcome";
                   $_SESSION['mail']=$mail;
                    header('location:indexMember.php');       

                    } 
                    else{
                        echo "email or password are wrong";
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
            $profile=$_SESSION['mail'];
            if($profile){
                $query="SELECT Member_password FROM Member WHERE Member_email='$profile' ";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                    $pass=$row['Member_password'];
                    if($pass==$oldpass){
                        if($newpass==$confirmpass){
                            $updatequery="UPDATE Member SET Member_password='$confirmpass' WHERE Member_email='$profile'";
                            $update=mysqli_query($conn,$updatequery);
                        }
                        else{
                            echo"passwords don't match";
                        }

                    }
                    else{
                        echo"old password is wrong";
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
        $personobject->login($_POST['mail'],$_POST['pass']);
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