<?php

    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"treatment_appointment");
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    $id=$_POST['id'];
    $mass=$_POST['mass'];
    $temp=$_POST['temp'];
    $insurance=$_POST['insurance'];
    $disease=$_POST['disease'];

    $to_login=mysqli_query($conn, "INSERT INTO 	patient_info(patient_id, Mass, Temperature, insurance,Disease)
    VALUES('$id','$mass','$temp', '$insurance', '$disease'");
    if($to_login){
        echo 'New User added';
    }
    else{
        die("failed".mysqli_error($conn));
    }
?>