<?php
session_start();
include("Comp/connectApnt.php");	
if(isset($_POST['submit']))
	{
		 $Name =($_POST['Name']);
	   	 $Age =($_POST['Age']);
		 $Phone =($_POST['Phone']);
         $Address =($_POST['Address']);
         $Gender =($_POST['Gender']);
         $DOB = ($_POST['DOB']);
         $Facility = ($_POST['Facility']);
         $Spcl_name = ($_POST['Spcl_name']);
         $Appointment = ($_POST['Appointment']);
		 $sql = "INSERT INTO apnt(Name, Age, Phone, Address, Gender, DOB, Facility, Spcl_name , Appointment)
                  VALUES ('$Name','$Age','$Phone', '$Address', '$Gender', '$DOB', '$Facility', '$Spcl_name', '$Appointment')";
	  
		 $res = mysqli_query($conn,$sql);
			if($res){
				echo '<script>alert("Your response has been saved.");
						window.location.replace("AppointmentForm.php");
		</script>';
		}
		else
	{
          echo '<script>alert("Appointment Failed! Please try again.");
		        window.location.replace("AppointmentForm.php");
		</script>';
	}	
	
	
	}	
?>
<!doctype html>
<html>
<head>
<title>Appointment Form</title>
<style>
body{
background-image:url('background.jpg');
background-repeat:no-repeat;
background-size:cover;
}
/*To center the background image, set left and right margin to auto and make it into a block element*/
img{
display: block;
  margin-left:auto;
  margin-right:auto;
  width: 50%;
}
#heading{
Font-family:High Tower Text;
Font-size:20px;
background-color:#FBFCFC;
text-align:center;
color:Black;
height:150px
width:1300px;
opacity:0.9;
overflow:none;
/*The overflow property specifies whether to clip the content or to add scrollbars when the content of an element is too big to fit in the specified area.*/
/*The overflow property only works for block elements with a specified height.*/
}
.header-img{
height: 20%;
width: 11%;
}
header h1{
display: inline;
}
.user{
background-color:#D6EAF8;
opacity:0.9;
height:540px;
width:655px;
border-style:inset;
padding:10px 20px;
font-family:Bell MT;
font-size:20px;
}
.input{
height:30px; 
width:200px;
}
.button{
  display: inline-block;
  padding: 10px 10px;
  font-size: 20px;
  cursor: pointer;
  text-align:right;
  outline: none;
  color:#fff;/*For white shadow of Submit button*/
  background-color:#C0392B;
  border: none;
  border-radius: 15px;
  box-shadow:9px;
}
.button:hover {background-color:#C0392B}
.button:active {
  background-color:#C0392B;
  box-shadow: 0 5px;
  transform: translateY(6px);
}
td{
text-align:center;
font-family:Times New Roman;
}

</style>
</head>
<body>
<div id="heading">
<header>
<h1 style="margin-right:100px;"><img class="header-img" src= "logo1.jpeg" style="float:left;"/>New City Hospital
<h2 style="margin-right:100px; margin-top:50px; font-size:30px; font-family:High Tower Text;">Appointment Form</h2>
</h1>
</div>
<div>
<table border=5 bgcolor="#FCF3CF " bordercolor="white">
<tr>
<th colspan=4>DOCTORS  TIMETABLE</th>
</tr>
<tr>
<td rowspan=2>NAME OF DOCTOR</td>
<td colspan =2 width="250px">TIMING</td>
<td rowspan=2> SPECIALIZATION</td>
</tr>
<tr>
<td>DAY</td>
<td>TIME</td> 
</tr>
<tr bgcolor="white">
<td>Dr. Ashish Singh</td>
<td>Monday</td>
<td>10AM-1PM</td>
<td>Orthopedic</td>
</tr>
<tr bgcolor="white">
<td>Dr. Lokesh K Singh</td>
<td>Monday</td>
<td>11AM-2PM, 5:30PM-7PM</td>
<td>Cardiologist</td>
</tr>
<tr bgcolor="white">
<td>Dr. Manisha Jha</td>
<td>Tuesday</td>
<td>9AM-12:30PM</td>
<td>Paediatrician</td>
</tr>
<tr bgcolor="white">
<td>Dr. Piyush Srivastava</td>
<td>Tuesday</td>
<td>11AM-1:30PM,4PM-6PM</td>
<td>ENT</td>
</tr>
<tr bgcolor="white">
<td>Dr. Alok Verma</td>
<td>Wednesday</td>
<td>11AM-1:30PM, 6PM-8PM</td>
<td>Neuro Surgeon</td>
</tr>
<tr bgcolor="white">
<td>Dr. SK Tripathi</td>
<td>Wednesday</td>
<td>9AM-11:30AM</td>
<td>Pathologist</td>
</tr>
<tr bgcolor="white">
<td>Dr. S. Manushi</td>
<td>Friday</td>
<td>9AM-10AM, 5PM-6PM</td>
<td>Cardiologist</td>
</tr>
<tr bgcolor="white">
<td>Dr. Sanjay Singhal</td>
<td>Friday</td>
<td>10AM-1:30PM</td>
<td>Orthopedic</td>
</tr>
<tr bgcolor="white">
<td>Dr. Vikas Shukla</td>
<td>Saturday</td>
<td>10AM-12PM</td>
<td>Skin</td>
</tr>
<tr bgcolor="white">
<td>Dr. Nitin Pandey</td>
<td>Saturday</td>
<td>9AM-11AM, 4PM-6PM</td>
<td>Paediatrician</td>
</tr>
</table>
</div>
<div class="user">
<form action="AppointmentForm.php" method="POST">
<section>
<div style="float:left; margin-right:20px; margin-top:20px;">
<label>Name: </label>
<input class="input" type="text" name="Name" placeholder="Enter you full name"/>
</div>
<div style="float:left; margin-left:50px; margin-top:20px;">
<label>Age: </label>
<input class="input" type="number" name="Age" placeholder="Enter you Age"/>
</div>
<br style="clear:both;"/> <!No floating elements allowed on either the left or the right side>
</section>

<section>
<br><br><br>
<div style="float:left; margin-right:20px;">
<label>Phone number: </label>
<input class="input" type="tel" name="Phone" style="width:125px;" placeholder="123-45-678"/>
</div>
<div style="float:left; margin-left:20px;">
<label>Address: </label>
<input class="input" type="text" name="Address" placeholder="Enter your Address"/>
</div>
<br style="clear:both;"/>
</section>

<section>
<br><br><br>
<div style="float:left; margin-right:20px;">
<label>Gender: </label>
&nbsp &nbsp &nbsp<label>Male</label>
<input type="radio" id="html" name="Gender" value="Male"/>
<label>Female</label>
<input type="radio" id="html" name="Gender" value="Female"/>
</div>
<div style="float:left; margin-left:55px;">
<label>DOB: </label>
<input class="input" name="DOB" type="date" placeholder="DD-MM-YYYY"/>
</div>
<br style="clear:both;"/>
</section>

<section>
<br><br><br>
<label>Have you previously attended our facility?</label>
<br><label>Yes</label>
<input type="radio" id="html" name="Facility" value="Yes"/>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <!Non-breaking space!>
<label>No</label>
<input type="radio" id="html" name="Facility" value="No"/>
<br><br><br>
<label>Specialist Name: </label>
<input class="input" type="text" name="Spcl_name" placeholder="Type the Doctor's Name"/>
<br><br><br>
</section>

<section>
<div style="float:left; margin-right:20px;">
<label>Appointment: </label>
<input class="input" name="Appointment" type="date"/>
</div>
<div style="float:left; margin-left:20px;">
<input type="submit" class="button" name="submit" id="html"/>
</div>
</section>
</form>
</body>
</html>



