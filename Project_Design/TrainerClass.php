<?php
    include_once('..//DataLayer/Database.php');
    class Trainer{
        
        function __construct(){
            session_start();
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();

        }
        /*
        function getTainer($id){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            $query="SELECT * FROM trainer WHERE Trainer_id='$id'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row=['Trainer_Fname']; ?></td>
                        <td><?php echo $row=['Trainer_Lname']; ?></td>
                        <td><?php echo $row=['Trainer_email']; ?></td>
                        <td><?php echo $row=['Trainer_salary']; ?></td>
                        <td><?php echo $row=['Hired_Date']; ?></td>
                        <td><?php echo $row=['Shifts']; ?></td>
                    </tr>
                <?php

            }
        }
        */
        /*
        function getsession($id){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            $query="SELECT * FROM sessions WHERE Session_id='$id'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row=['Session_name']; ?></td>
                        <td><?php echo $rows=['Session_cost']; ?></td>
                        <td><?php echo $row=['discount']; ?></td>
                        <td><?php echo $row=['Start_time']; ?></td>
                        <td><?php echo $row=['End_time']; ?></td>
                        <td><?php echo $row=['Session_days']; ?></td>
                        <td><?php echo $row=['Session_goal']; ?></td>
                        <td><?php echo $row=['Trainer_name']; ?></td>
                    </tr>
                <?php

            }
        }
        */
        function TakeAttendance($trainerid,$memberid,$sessionid){
            $connectdb  = connectdb::getInstance();
            $conn = $connectdb->getConnection();
            if(!empty($trainerid) AND !empty($memberid) AND !empty($sessionid)){
              
                $sql ="INSERT INTO attendance(Trainer_id,Member_id,Session_id) VALUES ('$trainerid','$memberid','$sessionid')";
                $result= mysqli_query($conn,$sql);
                   $_SESSION['message']="welcome";
                    echo "attendance done successfuly";
                }
                else{
                    echo "Please fill the data";
                }
        }
    }  
    
    if(isset($_POST['getTrainerbtn'])){
        $personobject->getTainer($_POST['id']);
    }  
    if(isset($_POST['getsessionbtn'])){
        $personobject->getsession($_POST['id']);
    }  
    if(isset($_POST['takeAttendancebtn'])){
        $personobject->TakeAttendance($_POST['trainerid'],$_POST['memberid'],$_POST['sessionid']);
    }  
?>        