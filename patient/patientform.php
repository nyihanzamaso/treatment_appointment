<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="patientform.css">
    <script>
		function myhome() {
			var x = confirm("Dear user you're heading to the home page");
		}
		function myservices() {
			var x = confirm("Dear user you're heading to the service page");
		}
		function mysignup() {
			var x = confirm("Dear user you're heading to the signup page");
		}
		function mycontact() {
			var x = confirm("Dear user you're heading to the contact page");
		}
    </script>
</head>
<body>
    <table border="0" width="100%" height="60%">
        <tr>
            <td><img src="doctor2.jpg" width="100%" height="100%"></td>
            <td><img src="doctor.jpg" width="100%" height="100%">
            </td>
            <td><img src="doctor3.jpg" width="100%" height="100%"></td>
            <td><img src="doctor4.jpg" width="100%" height="100%"></td>
        </tr>
        <tr>
            <td><a href="HOME.html" onclick="myhome()">HOME</a></td>
            <td>
                <a href="SERVICES.html" onclick="myservices()">SERVICES</a>
            </td>
            <td>
                <a href="SIGN-UP.HTML" onclick="mysignup()">SIGN-UP</a>
            </td>
            <td><a href="CONTACT US.html" onclick="mycontact()">CONTACT US</a></td>
        </tr>
        <tr>
            <td colspan="4">
                <form align="right">
                    <textarea cols="20" rows="1" placeholder="search"></textarea>
                    <input type="submit" value="search">
                </form>
                <table  width="40%" height="60%" id="tr2" align="center">
                    <tr>
                        <td>
                            <form action="sent-data.php" method="post">
                                <h2>welcome to patient page</h2>
                                ID:
                                <input type="text" size="25" name="id"><br><br>
                                Mass:
                                <input type="text" name="mass" size="8"><br><br>
                                Temperature:
                                <input type="temperature" name="temp" size="8"><br><br>
                                insurance:
                                <select name="insurance">
                                    <option>choose the insurance that you use</option>
                                    <option>RAMA</option>
                                    <option>MMI</option>
                                    <option>MITUEL</option>
                                    <option>BRITAM</option>
                                </select><br><br>
                                Disease classification:
                                <select name="disease">
                                    <option value=" ">please select on of the following</option>
                                    <option value="1">circulatory disease</option>
                                    <option value="2">Respiratory diseases</option>
                                    <option value="3">endocrine diseases</option>
                                    <option value="4">digestive diseases</option>
                                    <option value="5">urinary diseases</option>
                                    <option value="3">musculoskeletal diseases</option>
                                    <option value="4">nervous system diseases</option>
                                    <option value="5">immunesystem disease</option>
                                    <option value="3">reproductive system disease</option>
                                    <option value="4">skin disease</option>
                                </select></br><br>
                                <input type="submit" name='btn' value="submit">
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        <tr>
    </table>
</body>
</html>