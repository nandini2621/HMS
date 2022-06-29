<?php
session_start();
include("Comp/connectCons.php");	
if(isset($_POST['submit']))
	{
		 $Name =($_POST['Name']);
	   	 $Age =($_POST['Age']);
		 $Phone =($_POST['Phone']);
         $Gender =($_POST['Gender']);
         $Symptoms = ($_POST['Symptoms']);
         $Medication = ($_POST['Medication']);
         $Alcohol = ($_POST['Alcohol']);
		 $sql = "INSERT INTO cons(Name, Age, Phone, Gender, Symptoms, Medication, Alcohol)
                  VALUES ('$Name','$Age','$Phone', '$Gender', '$Symptoms', '$Medication', '$Alcohol')";
	  
		 $res = mysqli_query($conn,$sql);
			if($res){
				echo '<script>alert("Your response has been saved.");
						window.location.replace("OnlineConsultation.php");
		</script>';
		}
		else
	{
          echo '<script>alert("Appointment Failed! Please try again.");
		        window.location.replace("OnlineConsultation.php");
		</script>';
	}	
	
	
	}	
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="Cons.css">
<title>Consultation Form</title>
</head>
<body>
<header>
<div id="heading">
<h1 style="margin-right:100px;"><img class="header-img" src= "logo1.jpeg" style="float:left;"/>New City Hospital
<h2>Online Consultation</h2>
</h1>
</div>
<div class="user">
<form action="OnlineConsultation.php" method="POST">
<section>
<div style="float:left; margin-left:-10px; margin-top:10px;">
<label> <B> Name: </label>
<input class="input" type="text" name="Name" placeholder="Enter you full name"/>
</div>
<div style="float:right; margin-left:50px; margin-top:-35px;">
<label>Age: </label>
<input class="input" type="number" name="Age" placeholder="Enter you Age"/>
</div>
<br style="clear:both;"/> <!No floating elements allowed on either the left or the right side>
</section>

<section>
<br><br>
<div style="float:left; margin-left:-10px;">
<label>Phone number: </label>
<input class="input" type="tel" name="Phone" style="width:125px;" placeholder="123-45-678"/>
</div>
<div style="float:right; margin-left:10px; margin-top:10px;">
<label>Gender: </label>
&nbsp &nbsp<label>Male</label>
<input type="radio" id="html" name="Gender" value="Male"/>
<label>Female</label>
<input type="radio" id="html" name="Gender" value="Female"/>
</div>
<br style="clear:both;"/>
</section>

<section>
<br>
<div style="float:left; margin-left:-10px;">
<label>What are the main reasons you are seeking health care?</label>
<select name="Symptoms" style="height:30px;">
  <option value="Wieght Loss">Wieght Loss</option>
  <option value="Cardiovascular Protection">Cardiovascular Protection</option>
  <option value="Stress Management">Stress Management</option>
  <option value="Immune System">Immune System</option>
  <option value="Pain Management">Pain Management</option>
  <option value="Pre-conception & Pregnancy Care">Pre-conception & Pregnancy Care</option>
  <option value="Digestive Support">Digestive Support</option>
  <option value="Other">Other</option>
</select>
</div> <br>

<div style="float:left; margin-left:-10px; margin-top:20px;">
<label>Are you currently taking any medication?</label>
<br><label>Yes</label>
<input type="radio" id="html" name="Medication" value="Yes"/>
<label>No</label>
<input type="radio" id="html" name="Medication" value="No"/>
</div>

<div style="float:left; margin-left:-10px; margin-top:20px;">
<label>How often do you consume alcohol?</label>
<br><label>Daily</label>
<input type="radio" id="html" name="Alcohol" value="Daily"/>
<label>Occasionally</label>
<input type="radio" id="html" name="Alcohol" value="Occasionally"/>
<label>Never </B></label>
<input type="radio" id="html" name="Alcohol" value="Never"/>
</div>

<div style="float:right; margin-top:45px;">
<input type="submit" class="button" name="submit" id="html"/>
</div>
</section>
</form>
</body>
</html>