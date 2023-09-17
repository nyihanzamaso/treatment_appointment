<html>
<head>
    <link rel="stylesheet" type="text/css" href="doctor.css">
</head>
<body>
    <h3 align="center">Table of patients</h3><br>
    <html>

    <header>
        <h1 style="text-align: center;">ALL PATIENTS IN THE SYSTEM</h1>
    </header>
    
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
            </tr>
                <?php
                    $conn=mysqli_connect("localhost","root","");
                    mysqli_select_db($conn,"treatment_appointment");
                    if($conn->connect_error){
                        die("failed".$conn->connect_error);
                    }
                    $sql = "SELECT * From account";
                    $rs = mysqli_query($conn, $sql);
                    if (!$rs){
                        die("Enable to fetch: ".mysqli_error($conn));
                    }
                    
                ?>
                <?php
                    while ($row = mysqli_fetch_assoc($rs)){
                        $fname = $row['Firstname'];
                        $lname = $row['Lastname'];
                        $email = $row['Email'];
                        // $query = mysqli_query($conn, "select type from account");
                        // $count = mysqli_num_rows($query);
                        if ($row)
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

    </body>
    
    </html>
</body>

</html>