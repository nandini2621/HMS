<?php
session_start();
include("Comp/connectBlood.php");	
if(isset($_POST['submit']))
	{
		 $Name =($_POST['Name']);
	   	 $Age =($_POST['Age']);
		 $Gender =($_POST['Gender']);
         $Contact_Number =($_POST['Contact_Number']);
         $Email =($_POST['Email']);
         $Blood_Group = ($_POST['Blood_Group']);
         $Address = ($_POST['Address']);
         $Before_donation = ($_POST['Before_donation']);
         $Disease = ($_POST['Disease']);
         $Allergies =($_POST['Allergies']);
         $Feedback =($_POST['Feedback']);
		 $sql = "INSERT INTO donation(Name, Age, Gender, Contact_Number, Email, Blood_Group, Address, Before_donation , Disease
                 , Allergies, Feedback) VALUES ('$Name','$Age','$Gender', '$Contact_Number', '$Email', 
				 '$Blood_Group', '$Address', '$Before_donation', '$Disease', '$Allergies', '$Feedback')";
		 $res = mysqli_query($conn,$sql);
			if($res){
				echo '<script>alert("Your response has been saved.");
						window.location.replace("BloodDonation.php");
		</script>';
		}
		else
	{
          echo '<script>alert("Not Registered for Blood Donation. Please try again.");
		        window.location.replace("BloodDonation.php");
		</script>';
	}	
	
	
	}	
?>

<!doctype html>
<html>
<head>
<title>Blood Donation Form </title>
<style>
body{
background-image:url('blood.jpg');
background-repeat:no-repeat;
background-size:cover; 
}
/*for logo img*/
img{
position:relative;
top:0.1px;
left:410px;
}  
#hname{
Font-family:High Tower Text;
Font-size:20px;
background-color:#EC7063;
border:1px solid lightblue;
text-align:center;
color:white;
height:160px;
width:1259px;
opacity:0.9;
overflow:none;
}
.register{
background-color:white;
opacity:0.6;
text-align:center;
width:650px;
margin-left:auto;
margin-right:auto;
}
.buttonS {
  display: inline-block;
  padding: 10px 25px;/*An element's padding is the space between its content and its border.*/
  font-size: 24px;
  cursor: pointer;
  text-align:right;
  outline: none;
  color:#fff;/*For white shadow of Submit button*/
  background-color:#C0392B;
  border: none;
  border-radius: 15px;
  box-shadow:9px;
}
.buttonS:hover {background-color:#C0392B}
/*The :active CSS class represents an element for eg:button that is being activated by the user.*/
/*When using a mouse, "activation" typically starts when the user presses down the primary mouse button.*/
.buttonS:active {
  background-color:#C0392B;
  box-shadow: 0 5px;
  transform: translateY(6px);
/*The translateY() CSS function repositions an element vertically on the 2D plane. Its result is a <transform-function> data type.*/
}

.button{
  background-color:#21618C;
  box-shadow:5px;
  border: 5px;
  color:#fff;
  padding: 10px 20px;
  text-align:center;
  display:inline-block;
  font-size: 16px;
  cursor: pointer;/*sets the type of mouse cursor to show when the mouse pointer is over an element.*/
  float:center;
}
</style>
</head>
<body>
<div id="hname">
<h1><img src="logo1.jpeg" width="90x" height="60px" style="float:left;"/>New City Hospital
<h2 style="margin-left:80px; margin-top:50px; font-size:30px; font-family:High Tower Text;">Blood Donation Form</h2>
</h1>
</div>
<form action="BloodDonation.php" method="POST">
<div class="register">
<br><br><label Style="font-size:25px; Font-family:High Tower Text;">Name</label>
<br><input type="text" name="Name" placeholder="Enter you full name" style="height:20px; width:200px;"/><br><br>

<section onclick="return false">
<label Style="font-size:25px; Font-family:High Tower Text;">Age</label>
<br><input type="number" name="Age" placeholder="Enter your age" style="height:20px; width:200px;"/>
<br><br><div class="btn-group">
  <button class="button">Age 18+</button>
  <button class="button">19-44 only</button>
  <button class="button">Age 45+</button>
</div>
</section>


<br><br><label Style="font-size:25px; Font-family:High Tower Text;">Gender</label>
<br><label style="font-size:20px; Font-family:High Tower Text;">Male</label> 
<input type="radio" id="html" name="Gender" value="male"/> 
<label style="font-size:20px; Font-family:High Tower Text;">Female</label>
<input type="radio" id="html" name="Gender" value="female"/><br><br><br>
<label Style="font-size:25px; Font-family:High Tower Text;">Contact Number</label>
<br><input type="tel" name="Contact_Number" style="height:20px; width:200px;" placeholder="123-45-678"/><br><br>
<label Style="font-size:25px; Font-family:High Tower Text;">Email</label>
<br><input type="email" name="Email" style="height:20px; width:300px;" placeholder="Please enter the valid email address"/><br><br><br>
<label Style="font-size:25px; Font-family:High Tower Text;">Blood Group</label>
<select name="Blood_Group">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select><br><br><br>
<label Style="font-size:25px; Font-family:High Tower Text;">Address</label>
<br><textarea name="Address" placeholder="Enter Address..." style="height:80px; width:500px;"></textarea><br><br><br>
<label Style="font-size:25px; Font-family:High Tower Text;">Have you done a blood donation before?</label>
<br><label style="font-size:20px; Font-family:High Tower Text;">Yes</label>
<input type="radio" id="html" name="Before_donation" value="Yes">
<label style="font-size:20px; Font-family:High Tower Text;">No</label>
<input type="radio" id="html" name="Before_donation" value="no"><br><br><br>
<label style="font-size:25px; Font-family:High Tower Text;">Have you had any disease?</label>
<br><label style="font-size:20px; Font-family:High Tower Text;">Yes</label>
<input type="radio" id="html" name="Disease"  value="Yes">
<label style="font-size:20px; Font-family:High Tower Text;">No</label>
<input type="radio" id="html" name="Disease"  value="No"><br><br><br>
<label style="font-size:20px; Font-family:High Tower Text;">Do you have allergies?</label>
<br><label style="font-size:20px; Font-family:High Tower Text;">Yes</label>
<input type="radio" id="html" name="Allergies"  value="Yes">
<label style="font-size:20px; Font-family:High Tower Text;">No</label>
<input type="radio" id="html" name="Allergies" value="no"><br><br><br>
<label style="font-size:25px; Font-family:High Tower Text;">Feedback</label>
<br><input type="text" name="Feedback" placeholder="Please Enter Your Feedback..." style="height:80px; width:500px;"/><br><br>
<input type="submit" class="buttonS" name="submit" id="html" style="margin-left:500px;box-shadow:0 9px;"/>

</div>
</form>
</body>
</html> 