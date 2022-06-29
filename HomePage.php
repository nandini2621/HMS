<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
body{
background-image:url('hpage.jpg');
background-repeat:no-repeat;
background-size:auto;
}
img{
display: block;
margin-left:auto;
margin-right:auto;
width:50%;
}
#main{
overflow:auto;
padding-bottom:250px;
}
#footer{
background-color:#7FB3D5;
margin-bottom:-2500px;
color: white;
height:160px;
width:1260px;
clear:both;
}
.header-img{
height: 20%;
width: 11%;
}
.btn {
  border: none;
  background-color: inherit;/*inherit does cause it to take the background colour of the parent element.*/
  font-family:Arial Rounded MT;
  color: white;
  padding: 10px;
  font-size: 22px;
  cursor: pointer;
  display: inline-block;
}
.btn:hover {
background:#34495E
}
.Appointment Form {color: white;}
.Blood Donation Form {color: white;}
.Online Consultation {color: white;}
.Lab Tests {color: white;}
</style>
</head>
<body>
<div id=main>
<h1><img class="header-img" src= "logo1.jpeg" style="float:left;"/>
</h1>
</div>
<footer id="footer">
<div style="float:left; margin-left:160px; margin-top:20px;">
<i class="material-icons" style="font-size:48px;">computer</i>
<i class="material-icons" style="font-size:48px; margin-left:250px;">favorite</i>
<i class="material-icons" style="font-size:48px; margin-left:250px;">event</i>
<i class="material-icons" style="font-size:48px;margin-left:250px;">face</i>
</div>
<div style="float:left; margin-left:80px; margin-top:2px;" >
<h2>
<button class="btn Appointment Form" onclick="location.href='AppointmentForm.php';">Appointment Form</button>
<button class="btn Blood Donation Form" style="margin-left:80px;" onclick="location.href='BloodDonation.php';">Blood Donation Form</button>
<button class="btn Online Consultation" style="margin-left:80px;" onclick="location.href='OnlineConsultation.php';">Online Consultation</button>
<button class="btn Lab Tests" style="margin-left:90px;" onclick="location.href='LabTest.php';">Lab Tests</button>
</h2>
</div>
</footer>
</body>
</html>