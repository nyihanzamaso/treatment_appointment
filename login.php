<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"treatment_appointment");
if($conn->connect_error){
    die("failed".$conn->connect_error);
}
else{
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $query = mysqli_query($conn, "select * from login where Email='$Email' and Password='$Password'");
    $query_2 = mysqli_query($conn, "select * from doctors where Email='$Email' and Password='$Password'");
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    
    $count_2 = mysqli_num_rows($query_2);
    $row_2 = mysqli_fetch_array($query_2);

    if ($count > 0 || $count_2 > 0){
        if ($row['Loginas'] == 'p' || $row_2['type'] == 'p') {
            ?>
            <script>location.href = 'patient/patientform.php'</script>
            <?php
        }
        if ($row['Loginas'] == 'd' || $row_2['type'] == 'd') {
            ?>
            <script>location.href = 'doctor/Doctor.php'</script>
            <?php
        }
        ?>
        <script> location.href = 'admin/Admin.php'</script>
        <?php
    }else{
        echo " Incorrect Email or Password";
    }
}
?>