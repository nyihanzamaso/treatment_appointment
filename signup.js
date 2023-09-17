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
function myfirstname() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}
function mylastname() {
    var x = document.getElementById("lname");
    x.value = x.value.toLowerCase();
}
function mysubmit() {
    confirm("Are u sure you want to submit your application??")
}
function myusername() {
    var x = document.getElementById("username");
    x.value = x.value.toLowerCase()
}
function capturefname() {
    let fname=document.getElementById('fname').value
    console.log(fname)
}
function getmydata(){
    var fname=document.getElementById('fname').value;
    console.log(fname);
    var lname=document.getElementById('lname').value;
    console.log(lname);
    var idnumber=document.getElementById('idnumber').value;
    console.log(idnumber)
    var email=document.getElementById('email').value;
    console.log(email);
    var age=document.getElementById('age').value;
    console.log(age);
    var province=document.querySelector('#province').value;
    console.log(province);
    var gender=document.querySelector('input[name="gender"]').value;
    console.log(gender);
    var district=document.getElementById("district").value;
    console.log(district);
    var sector=document.getElementById('sector').value;
    console.log(sector);
    var cell=document.getElementById('cell').value;
    console.log(cell);
    var username=document.getElementById('username').value;
    console.log(username);
    var password=document.getElementById('password').value;
    console.log(password);
    var reenterpswd=document.getElementById('epassword').value;
    console.log(reenterpswd);
}
document.forms["myform"]
from.addEventListener("submit",getvalues);
function getvalues(event){
    event.preventDefault();
    this.firstname.value;
    this.lastname.value;
    this.id.value;
    this.email.value;
    this.age.value;
    this.gender.value;
    this["province"].value;
    this.district.value;
    this.sector.value;
    this.cell.value;
    let Generation=document.querySelectorAll("generation");
    let checkedgeneration=[];
    for(let gen of Generaton){
        if(gen.checked==true){
            checkedgeneration.push(gen.value);
        }
    }
    this.username.value;
    this.psw.value;
    this.psw.value;
}
let formdata={
    "first-name":this.firstname.value
    "last-name":this.lastname.value
    "ID":this.id.value
    "email":this.email.value
    "age":this.age.value
    "gender":this.gender.value;
    "province":this["province"].value;
    "District":this.district.value;
    "sector":this.sector.value;
    "cell":this.cell.value;
}