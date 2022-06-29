<?php
session_start();
include("Comp/connectLab.php");	
if(isset($_POST['submit']))
	{
		 $Name =($_POST['Name']);
	   	 $Age =($_POST['Age']);
		 $Phone =($_POST['Phone']);
         $Gender =($_POST['Gender']);
         $Email = ($_POST['Email']);
         $City = ($_POST['City']);
		 $Test = ($_POST['Test']);
		 $Address = ($_POST['Address']);
		 $sql = "INSERT INTO lab(Name, Age, Phone, Gender, Email, City, Test, Address)
                  VALUES ('$Name','$Age','$Phone', '$Gender', '$Email', '$City', '$Test', '$Address')";
	  
		 $res = mysqli_query($conn,$sql);
			if($res){
				echo '<script>alert("Your response has been saved.");
						window.location.replace("LabTest.php");
		</script>';
		}
		else
	{
          echo '<script>alert("Appointment Failed! Please try again.");
		        window.location.replace("LabTest.php");
		</script>';
	}	
	
	
	}	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab Test Form</title>
        <style>
            body{
                background-image:url('lab.jpeg');
                background-repeat:no-repeat;
                background-size:cover;
            }
            .main{
                float:right;
                position: relative;
                right:70px;
                top:100px;
                background-color:#A9CCE3 ;
                
                color:black;
                width:600px;
                height:350px;
                }
			.header-img{
               height:10%;
               width: 15%;
			   margin-top:-20px;
            }	
            .main h1{
                background-color:White;
                color:#2980B9 ;
                text-align:center;
				 font-family: High Tower Text;
            }
            .main label{
                font-size: 20px;
                font-family: High Tower Text;
            }
            .main input{
                font-size: 16px;
				
            }
            .button{
                display: inline-block;
                background-color:#5499C7;
				padding: 10px 20px;
                font-size: 20px;
                border-radius: 10px;
                color:white;
				cursor: pointer;
                opacity:1;
            }
            .button:hover{
                color:#5499C7 ;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <hr color="black"><h1 ><img src="logo1.jpeg" class="header-img" style="float:left;"> Book a Lab Test</h1><hr color="black">
            <form action="LabTest.php" method="POST">
                <section>
                    <div style="float:left; margin-left:16px; margin-top:20px;">
                      <label>Name: </label>
                      <input type="text" name="Name" placeholder="Enter your full name"/>
                   </div>
                    <div style="float:left; margin-left:45px; margin-top:20px;">
                      <label>Age: </label>
                      <input type="number" name="Age" placeholder="Enter your Age" style="width:185px;">
                   </div>
                 </section>
                 <section>
                    <div style="float:left; margin-left:16px; margin-top:20px;">
                      <label>Contact: </label>
                      <input type="tel" name="Phone" placeholder="Enter your mobile no." style="width:180px;">
                   </div>
                    <div style="float:left; margin-left:45px; margin-top:20px;">
                      <label>Gender: </label>
                      <input type="radio" name="Gender" value="male"><label>Male</label>
                      <input type="radio" name="Gender" value="female"><label>Female</label>
                   </div>
                 </section>
                 <section>
                    <div style="float:left; position:relative; top: 20px; left: -265px;">
                      <label>Email: </label>
                      <input type="text" name="Email" placeholder="Enter your e-mail" style="width:200px;">
                   </div>
                   <div style="float:right; margin-right:25px;">
                    <label>City: </label>
                    <input type="text" name="City" placeholder="Enter your city" style="width:190px;">
                 </div>
                 </section>
                 <section>
                 <div style="float:left; margin-left: 20px; margin-top: 40px;">
                     <label>Test: </label>
                    <select name="Test" style="width: 220px; font-size: 16px;">
                        <option>Select Test for Collection</option>
                         <option>Absolute Lymphocyte Count</option>
                         <option>Allergy Profile</option>
                         <option>AMA-M2 Antibody</option>
                         <option>Anti Cardiolipin IgA Antibody</option>
                         <option>Anti Cardiolipin IgG Antibody</option>
                         <option>Anti Cardiolipin IgM Antibody</option>
                         <option>Anti Sperm Antibody</option>
                         <option>Anti SARS-CoV 2 Antibody</option>
                         <option>Blood Group and Rh Factor</option>
                         <option>Blood Urea Nitrogen</option>
                         <option>Complete Blood Count</option>
                         <option>Dengue IgG Antibody</option>
                         <option>Fasting Blood Glucose</option>
                         <option>Free Testesterone</option>
                         <option>Nucleosome</option>
                         <option>Rubella IgG Antibody</option>
                         <option>Rubells IgM Antibody</option>
                         <option>Thyroid Stimulating Hormone(TSH)</option>
                     </select>
                 </div>
                 <div style="float: right; margin-top: 20px; margin-right: 25px;">
                    <label style="position: relative; top: -20px;">Address:</label>
                    <textarea name="Address" placeholder="Enter your address..." ></textarea>
                </div>
                 </section>
                 <input type="submit" class="button" name="submit" style="position: relative; top: 30px; left: 280px;"/>
            </form>
        </div>
    </body>
</html>