<html>

<head>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>Sign-up</title>
	<script type="text/javascript" src="signup.js">
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
					<textarea cols="20" rows="1"></textarea>
					<input type="submit" value="search">
				</form>
			</td>
		</tr>
	</table>
	<div>
		<h2 align="center"><i>SIGN UP TO NEW ACCOUNT</i></h2>
	</div>
	<table align="center" width="50%" id="tr2">
		<tr>
			<td>
				<form name="myform" action="/account.php" method="POST">
					First-name:
					<input type="text" name="fname" size="40" id="fname" onchange="myfirstname()"
						placeholder="enter your first name"></br></br>
					Last-name:
					<input type="text" name="lastname" size="40" id="lname" onchange="mylastname()"
						placeholder="enter your last name"></br></br>
					ID:
					<input type="text" name="id" size="50" id="idnumber" maxlength="16"
						placeholder="enter your ID"></br></br>
					E-mail:
					<input type="email" name="email" id="email" size="30" placeholder="enter your email">
					Age:
					<input type="text" id="age" name="age" size="4"></br></br>
					Gender:
					<input type="radio" name="gender" value="male">male
					<input type="radio" name="gender" value="female">female</br></br>
					Province:
					<select name="province">
						<option value=" ">please select the province</option>
						<option value="1">Northern province</option>
						<option value="2">southern province</option>
						<option value="3">eastern province</option>
						<option value="4">western province</option>
						<option value="5">kigali city</option>
					</select></br></br>
					District:
					<input type="text" name="district" id="district" size="40" placeholder="enter district"></br></br>
					Sector:
					<input type="text" name="sector" id="sector" size="40" placeholder="enter sector"></br></br>
					Cell:
					<input type="text" name="cell" id="cell" size="40" placeholder="enter cell"></br></br>
					Generation:
					<input type="checkbox" name="generation" value="0">under 18yrs
					<input type="checkbox" name="generation" value="1">above 18yrs</br></br>
					User name:
					<input type="text" size="40" id="username" name="username" onchange="myusername()"></br></br>
					User password:
					<input type="password" id="password" name="psw"></br></br>
					Re- enter passowrd:
					<input type="password" id="epassword" name="psw"></br></br>
					<input type="submit" value="submit" onclick="getmydata()" onclick="mysubmit()">
				</form>
                <?php
// $con=mysql_connect("localhost","admin","admin");
// if(!$con){
//     die('could not connect:'.mysqli_error());
// }
// if(isset($_POST['submit'])){
//     $fname=$_POST['fname'];
//     $lname=$_POST['lastname'];
    
//     echo $fname."<br>";
//     echo $lname."<br>";
// }
?>
			</td>
		</tr>
	</table>
</body>

</html>