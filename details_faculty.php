<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$check=0;
$c=0;
$batch1=$_POST['batch1'];
$year12=$_POST['year12'];
$sem1=$_POST['se1'];
$subject=$_POST['sub1'];
$section=$_POST['section'];
$PASS_PERCENTAGE=0;

$_SESSION['BATCH1']=$batch1;
$_SESSION['YEAR1']=$year12;
$_SESSION['SEM']=$sem1;
$_SESSION['SECTION']=$section;
$_SESSION['SUBJECT']=$subject;




$query= mysql_query("SELECT * FROM faculty_details ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbbatch= $row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];
			$dbsection=$row['section'];
			$dbname=$row['name'];
			$dbsubject=$row['subject'];
			echo $dbyear.$year12."<br>";
			if($dbbatch==$batch1 && $dbyear==$year12 && $dbsem==$sem1 && $dbsubject==$subject && $dbsection==$section)
			{
				$check=1;
			}
		}


if($check==1)
{
$c=0.0;
echo $check;
?>
		<script>
		window.location.href="faculty_details_to_update1.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("YOUR DATA NOT EXIST");
		window.location.href="faculty_details_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="faculty_details_to_update.html";
		</script>
<?php	
}	

?>