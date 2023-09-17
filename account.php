<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"treatment_appointment");
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$ID=$_POST['ID'];
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$Age=$_POST['Age'];
$Gender=$_POST['Gender'];
$Province=$_POST['Province'];
$District=$_POST['District'];
$Sector=$_POST['Sector'];
$Cell=$_POST['Cell'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$to_account=mysqli_query($conn, "INSERT INTO account(ID,Firstname,Lastname,
Email,Age,Gender,Province,District,Sector,Cell,User_name,Password) 
VALUES($ID,'$Firstname','$Lastname','$Email',$Age,'$Gender','$Province',
'$District','$Sector','$Cell','$Username','$Password')");
if($to_account){
    echo "data has been sent";
}
else{
    die("failed".mysqli_error($conn));
}

$to_login=mysqli_query($conn, "INSERT INTO login(Email,Password,Loginas) VALUES('$Email','$Password','p')");
if($to_login){
    ?>
    <h1>Back to </h1><a href="home.html">login</a>
    
    <?php
}
else{
    die("failed".mysqli_error($conn));
}
?>