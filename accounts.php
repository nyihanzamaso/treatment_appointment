<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lastname'];
    
    echo $fname."<br>";
    echo $lname."<br>";
}