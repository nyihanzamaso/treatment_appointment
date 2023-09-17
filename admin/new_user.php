<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form{
            padding: 20px 40px;
            background-color: lightblue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        form .single{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            padding: 10px 30px;
            text-transform: uppercase;
        }

        form input{
            width: 400px;
            height: 30px;
        }

        button{
            width: 200px;
            height: 50px;
            cursor: pointer;
            border: none;
            outline: none;
        }

        button:hover{
            background-color: orange;
            font-weight: 700;
        }
    </style>
</head>
<body>

<h1 style="text-align: center">ADD USER TO THE SYSTEM</h1>
<form action="" method='post'>
    <div class="single">
            <label for="">ID</label>
            <input type="number" name="id_nbr">
        </div>
        <div class="single">
            <label for="">F Name</label>
            <input type="text" name="fname">
        </div>
        <div class="single">
            <label for="">L name</label>
            <input type="text" name="lname">
        </div>
        
        <div class="single">
            <label for="">email</label>
            <input type="email" name="email" id="">
        </div>
        <div class="single">
            <label for="">Password</label>
            <input type="password" name="psd" id="">
        </div>
        <div class="single">
            <label for="">Type</label>
            <input type="text" name="type">
        </div>
    <button type="submit" name="btn">Add User</button>
</form>
</body>
</html>

<?php
if (isset($_POST['btn'])){
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"treatment_appointment");
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    $ID=$_POST['id_nbr'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $psd=$_POST['psd'];
    $type=$_POST['type'];

    $to_login=mysqli_query($conn, "INSERT INTO doctors(doctor_id, fname, lname, email,password, type)
    VALUES('$ID','$fname','$lname', '$email', '$psd', '$type')");
    if($to_login){
        echo 'New User added';
    }
    else{
        die("failed".mysqli_error($conn));
    }
}
?>