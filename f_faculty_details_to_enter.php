<html>
	<head>
		<title>ADD FACULTY DATA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/jpg" href="images/res.jpg" />
	</head>
    <style>
        table {
            width:75%;
            text-align: center;
        }
    </style>
	<body class="is-preload">
	<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//mysql_query("create database sem_project") ;
mysql_select_db("sem_project") or die("not selected");

$faculty_name=$_SESSION['user1'];

?>

<script>
function populate1(s1,s2,s3)
{
var s1=document.getElementById(s1).value;
var s2=document.getElementById(s2).value;
	var s3=document.getElementById(s3);
	s3.innerHTML="";
	if(s1==1 && s2==1)
	{
		var optionArray=["0|--select--","ENGLISH|ENGLISH","ENGI_MATHEMATICS_1|ENGI_MATHEMATICS_1","ENGI_CHEMISTRY|ENGI_CHEMISTRY","PROFESSIONAL_E_H_V|PROFESSIONAL_E_H_V","BASIC_ELECTRONICS_ENGI|BASIC_ELECTRONICS_ENGI","ENGI_CHEMISTRY_LAB|ENGI_CHEMISTRY_LAB","PROGRAMMING_WITH_C_LAB|PROGRAMMING_WITH_C_LAB","NCC_NSS_SPORTS|NCC_NSS_SPORTS"];
		
	}
	else if(s1==1 && s2==2)
	{
		var optionArray=["0|--select--","ENGI_MATHEMATICS_2|ENGI_MATHEMATICS_2","ENGI_PHYSICS|ENGI_PHYSICS","ENVIRONMENTAL_SCIENCES|ENVIRONMENTAL_SCIENCES","ENGI_DRAWING|ENGI_DRAWING","ELEMENTS_OF_ELECTRICAL_ENGI|ELEMENTS_OF_ELECTRICAL_ENGI","ENGI_PHYSICS_LAB|ENGI_PHYSICS_LAB","LANGUAGE_LAB|LANGUAGE_LAB","OOP_WITH_CPP_LAB|OOP_WITH_CPP_LAB"];
		
	}
	else if(s1==2 && s2==1)
	{
		var optionArray=["0|--select--","DATA_STRUCTURES_ALGORITHM|DATA_STRUCTURES_ALGORITHM","DIGITAL_LOGICAL_DESIGN|DIGITAL_LOGICAL_DESIGN","DMS|DMS","OOPS_WITH_JAVA|OOPS_WITH_JAVA","P_S_Q_T|P_S_Q_T","DATA_STRUCTURES_LAB|DATA_STRUCTURES_LAB","DIGITAL_ELECTRONICS_LAB|DIGITAL_ELECTRONICS_LAB","JAVA_LAB|JAVA_LAB"];
		
	}
	else if(s1==2 && s2==2)
	{
		var optionArray=["0|--select--","DATA_COMMUNICATION|DATA_COMMUNICATION","MICROPROCESSOR_INTERFACING|MICROPROCESSOR_INTERFACING","OPERATING_SYSTEMS|OPERATING_SYSTEMS","COMPUTER_ORGANIZATION|COMPUTER_ORGANIZATION","FLAT|FLAT","MP_LAB|MP_LAB","OPERATING_SYSTEM_LAB|OPERATING_SYSTEM_LAB","HARDWARE_LAB|HARDWARE_LAB"];
		
	}
	else if(s1==3 && s2==1)
	{
		var optionArray=["0|--select--","OPEN_ELECTIVE_1|OPEN_ELECTIVE_1","DBMS|DBMS","COMPUTER_GRAPHICS|COMPUTER_GRAPHICS","COMPUTER_NETWORKS|COMPUTER_NETWORKS","DAA|DAA","DBMS_LAB|DBMS_LAB","COMPUTER_NETWORKS_LAB|COMPUTER_NETWORKS_LAB","SOFT_SKILLS_LAB|SOFT_SKILLS_LAB","QANTATIVE_VERBAL_APTITUDE_1|QANTATIVE_VERBAL_APTITUDE_1"];
		
	}
	else if(s1==3 && s2==2)
	{
		var optionArray=["0|--select--","COMILER_DESIGN|COMPILER_DESIGN","SOFTWARE_ENGI|SOFTWARE_ENGI","WEB_TECHNOLOGIES|WEB_TECHNOLOGIES","COMPUTER_ARCHITECTURE|COMPUTER_ARCHITECTURE","PROFESSIONAL_ELECTIVE_1|PROFESSIONAL_ELECTIVE_1","OPEN_SOURCE_T_LAB|OPEN_SOURCE_T_LAB","SE_LAB_MINI_LAB|SE_LAB_MINI_LAB","QUANTATIVE_VERBAL_APTITUDE_2|QUANTATIVE_VERBAL_APTITUDE_2"];
		
	}
	else if(s1==4 && s2==2)
	{
		var optionArray=["|--select--","PROFEESIONAL_ELECTIVE_4|PROFEESIONAL_ELECTIVE_4","PROFESSIONAL_ELECTIVE_5|PROFESSIONAL_ELECTIVE_5","PROJECT_2|PROJECT_2"];
		
	}
	else if(s1==4 && s2==1)
	{
		var optionArray=["0|--select--","OPEN_ELECTIVE_2|OPEN_ELECTIVE_2","CRYPTOGRAPHY_AND_N_S|CRYPTOGRAPHY_AND_N_S","OOA_DESIGN|OOA_DESIGN","PROFEESIONAL_ELECTIVE_2|PROFEESIONAL_ELECTIVE_2","PROFEESIONAL_ELECTIVE_2|PROFEESIONAL_ELECTIVE_2","C_N_S_LAB|C_N_S_LAB","INDUSTRAIL_TRAINING_SEMINAR|INDUSTRAIL_TRAINING_SEMINAR","PROJECT_1|PROJECT_1"];
		
	}
	else 
	{
		alert("ENTER VALID DETAILS");
	}

	for(var option in optionArray){

		var pair=optionArray[option].split("|");
		var newOption=document.createElement("option");
		newOption.value=pair[0];
		newOption.innerHTML=pair[1];
		s3.options.add(newOption);

	}

	
		
}
</script>



		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">ANITS</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="List_check.html">Home</a></li>
					<li><a href="fList.html">Student Details</a></li>
					<li><a href="complaints.php">Add / Modify Complaints</a></li>
					<li><a href="f_faculty_details_to_enter.php">My Subject Details</a></li>
					<li><a href="team.html">About Us</a></li>	                    					
					<li><a href="AdminLogin.html">Logout</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>STUDENT RESULT ANALYSIS</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<CENTER><font face="Baskerville Old Face" size="+3">ADD FACULTY INFORMATION</font><br>
						</header>
                        <br />
<!-- Form -->



<form method="POST" action="f_details_faculty.php">
    <font face="Baskerville Old Face" size=5px >
        <center>
    <table>
        <tr> <td> BATCH </td>
             <td> <input type="text" placeholder="YYYY-YYYY" required="required" name="batch1" pattern="^2\d{3}-[0-9]{4}" title="Format should be YYYY-YYYY"> </td> </tr>
        <tr> <td> YEAR </td>
             <td> <select required="required" id="year12" name="year12">
			<option value=""> -----</option>
			<option value="1"> 1st YEAR</option>
			<option value="2">2nd YEAR</option>
			<option value="3"> 3rd YEAR </option>
			<option value="4"> 4th YEAR </option></select> </td> </tr>
        <tr> <td> SEM </td>
             <td> <select required="required" id="se1" name="se1"  onchange="populate1('year12','se1','sub1');">
			<option value=""> -----</option>
		<option value="1"> 1 sem</option>
		<option value="2">2 sem</option></select> </td> </tr>
        <tr> <td> SUBJECT</td>
             <td> <select requireed="required" id="sub1" name="sub1"></select> </td> </tr>
        <tr> <td> SECTION</td>
             <td> <select required="required" name="section">
		<option value=""> --SELECT--</option>
		<option value="A"> A-SECTION</option>
		<option value="B">B-SECTION</option>
		<option value="C">C-SECTION</option></select> </td></tr>
        <tr> <td> NAME </td>


  <td> <select required="required" name="name1">
			<option value=""> --SELECT--</option>
		<option value="<?php echo $faculty_name;?>"> <?php echo $faculty_name;?></option></td></tr>
		
        </table>
<input type="submit" value="SUBMIT" name="sub"> <input type="reset" value="RESET" name="reset">
						
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content" style="display: block;text-align: center;">
					<font face="Baskerville Old Face" size="5px" color="#ffffff">Designed & Developed By 3/4 <b><a href="team.html">DONT STOP</a></b> Team <br /> Department of CSE</font>
					</div>
					<div class="copyright">
					<font face="Baskerville Old Face" size="5px" color="#ffffff"> All Rights Reserved <br />�ANITS 2018-2019</font>
					</div>
				</div>
			</footer>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>