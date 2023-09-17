<html>

<head>
    <h2>Admin dashboard</h2>
    <h1 style="text-align: center;">ALL ACCOUNTS IN THE SYSTEM</h1>
</head>

<body>
    <table border="2" width="100%">
        <tr>
            <td>
                <h1>First name</h1>
            </td>
            <td>
                <h1>Last name</h1>
            </td>
            <td>
                <h1>Email</h1>
            </td>
            <td>
                <h1>Type</h1>
            </td>
        </tr>
            <?php
                $conn=mysqli_connect("localhost","root","");
                mysqli_select_db($conn,"treatment_appointment");
                if($conn->connect_error){
                    die("failed".$conn->connect_error);
                }
                $sql = "SELECT * From doctors";
                $rs = mysqli_query($conn, $sql);
                if (!$rs){
                    die("Enable to fetch: ".mysqli_error($conn));
                }
                
            ?>
            <?php
                while ($row = mysqli_fetch_assoc($rs)){
                    $id = $row['doctor_id'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email = $row['email'];
                    $type = $row['type'];
                    $query = mysqli_query($conn, "select type from doctors");
                    $count = mysqli_num_rows($query);
                    if ($count > 0)
                    {
                        ?>
                        <tr>
                            <td>
                                <?php echo $fname; ?>
                            </td>
                            <td>
                                <?php echo $lname;?>
                            </td>
                            <td>
                                <?php echo $email; ?>
                            </td>
                            <td>
                                <?php 
                                if ($type == 'a')
                                {   echo "Admin";}
                                else if ($type == 'p')
                                {    echo "Patient";}
                                else
                                {    echo "Doctor";}
                                ?>
                            </td>
                        </tr>   
                            <?php
                        }else{
                            $fname = "";
                            $lname = "";
                            $email ="";
                            $psd = "";
                            $type = "";
                        }
                    }
            ?>
            
        </tr>
    </table>

    <a href = "new_user.php"> 
        <button style = "outline: none; border: none; margin: 50px 0 ; 
        padding: 30px; font-weight: 700; height: 30px; width: 500px; 
        cursor: pointer; text-transform: uppercase; font-size: 20px; 
        background-color: orange">Create New User</button>
    </a>
</body>

</html>