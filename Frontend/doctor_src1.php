<?php
session_start();
if(!$_SESSION['id'])
{
	header("Location:patient.php");
}
?>
<html>
<head>
<title>Hospital Management System</title>
<style>
body{
	background-color:#232526;
	font-family: Arial, Helvetica, sans-serif;
	margin: 0 auto;
	padding:0px;
}
.select-style {
    border: 1px solid #ccc;
    width: 195px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 100%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
#apDiv3 {
	position: absolute;
	width: 78px;
	height: 93px;
	z-index: 1;
	left: 86px;
	top: 21px;
}
#apDiv1 {
	position: absolute;
	width: 1070px;
	height: 1264px;
	z-index: 1;
	left: 142px;
	top: 9px;
	color: #CCC;
	background: #648880;
	background: linear-gradient(to top, #f6f1d3 20%, #648880 50%, #293f50 75%);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
}
#apDiv6 div.ap6 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
#apDiv2 {
	position: absolute;
	width: 1071px;
	height: 119px;
	z-index: 1;
	left: 0px;
	top: -1px;
	color: #D6D6D6;
	background-color: #CCCCCC;
	background-image: url(img/18691897.jpg);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
	;
}
#apDiv4 {
	position: absolute;
	width: 151px;
	height: 120px;
	z-index: 2;
	/*border-top-left-radius:20px;*/
	border-top-right-radius:70px;
	border-bottom-right-radius:70px;
	border-top-left-radius:70px;
	border-bottom-left-radius:70px;
	background-image: url(img/logo_hospital_01_by_davicinpuntocom-d31hfy2.jpg);
}
#apDiv5 {
	position: absolute;
	width: 785px;
	height: 74px;
	z-index: 1;
	left: 157px;
	top: 27px;
	font-size: 45px;
	font-family: "Comic Sans MS", cursive;
	color: #ffffff;
	font-weight: bold;
	text-shadow: 8px -7px 8px #06F;
}
#apDiv6 {
	position: absolute;
	width: 1071px;
	height: 51px;
	z-index: 3;
	top: 118px;
	background-image: url(img/18691897.jpg);
	font-weight: bold;
	color: #FFF;
	left: 0px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #36b0b6;
}
#apDiv6 div:hover a {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	-o-border-radius: 5px;
	/* [disabled]border-radius: 5px; */
	display: block;
	border: 1px solid #133e40;
	-moz-box-shadow: inset 0 5px 10px #133e40;
	-webkit-box-shadow: inset 0 5px 10px #133e40;
	box-shadow: inset 0 5px 10px #133e40;
}
#apDiv6 div:hover {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
a:link
{
	text-decoration: none;
	color: #FFFFFF;
	font-family: "Comic Sans MS", cursive;
	font-size: 20px;
}
#apDiv1  div {
	color: #CFC;
}
#apDiv1 div {
	color: #0CF;
	font-family: "Comic Sans MS", cursive;
}

#apDiv1 div p {
	font-family: 'Comic Sans MS', cursive;
	font-size: 24px;
}
#apDiv7 {
	position: absolute;
	width: 700px;
	height: 300px;
	z-index: 4;
	left: 335px;
	top: 189px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	background-image: url(img/patients-visitors.jpg);
}
#apDiv9 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}

#apDiv10 {
	position: absolute;
	width: 998px;
	height: 573px;
	z-index: 6;
	left: 32px;
	top: 512px;
}
#apDiv1 #apDiv10 div {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 36px;
	color: #000;
	font-weight: bold;
	text-align: justify;
}
#apDiv14 {
	position: absolute;
	width: 1069px;
	height: 133px;
	z-index: 7;
	left: 0px;
	top: 1131px;
	background-color: #FFFFFF;
}
#apDiv8 {
	position: absolute;
	width: 191px;
	height: 235px;
	z-index: 2;
	left: 2px;
	top: 16px;
	background-color: transparent;
}
#apDiv8 tr td{
	border:1px solid #0CF;
	background-color:#036;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.8);
}
a:hover
{
	color:#FF0;
	font-size:18px;
}
#apDiv11 {
	position: absolute;
	width: 203px;
	height: 110px;
	z-index: 3;
	left: 192px;
	top: 111px;
	background-color: transparent;
	visibility:hidden;
}
#apDiv11 tr td{
	border:1px solid #0CF;
	background-color:#036;
	box-shadow: 0 0 12px rgba(51, 204, 255, 0.8);
}
#apDiv12 {
	position: absolute;
	width: 1019px;
	height: 891px;
	z-index: 10;
	left: 26px;
	top: 203px;
}
#apDiv13 {
	position: absolute;
	width: 321px;
	height: 51px;
	z-index: 4;
	left: 404px;
	top: 28px;
}
#apDiv15 {
	position: absolute;
	width: 225px;
	height: 225px;
	z-index: 5;
	left: 793px;
	top: 14px;
}
#apDiv16 {
	position: absolute;
	width: 456px;
	height: 54px;
	z-index: 11;
	left: 327px;
	top: 496px;
	border: 3px solid #033;
	background: #569C94;
	background: radial-gradient( #569C94 30%, #0F374A);
	border-radius: 40px;
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
}
#apDiv1 #apDiv16 form table tr td select {
	width: 195px;
padding: 2px 5px;
font-size:16px;
color: #666;
border: none;
background-image: -webkit-gradient(linear, ??
0% 0%, 0% 12%, from(#999), to(#fff));
background-image: -moz-linear-gradient(0% 12% ??
90deg, #fff, #999);
background-color: #fff;
}
#apDiv1 #apDiv16 form table tr td select:focus{
	-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
	box-shadow: 0 0 12px rgba(51, 204, 255, 1.2);
}
#apDiv1 #apDiv16 form table tr td select:focus {
	-moz-animation-name: pulse;
	-moz-animation-duration: 1.5s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: ease-in-out;
}
#apDiv1 #apDiv16 form table tr td div {
	color: #000;
	font-size:18px;
	font-weight:bold;
}
#apDiv1 #apDiv16 form table tr td input[type="submit"]
{
	background:#569C94;
	font-weight:bold;
	height:34px;
	border-radius:30px;
	border:1px solid #093;
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 0.5);
}
#apDiv17 {
	position: absolute;
	width: 792px;
	height: 362px;
	z-index: 12;
	left: 166px;
	top: 603px;
	border: 3px solid #033;
	background: #569C94;
	background: radial-gradient( #569C94 30%, #0F374A);
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
}
#apDiv17 tr td{
	background: #569C94;
	border:1px solid #033;
	background: linear-gradient( #569C94 30%, #0F374A);
	font-weight:bold;
	font-family: "Times New Roman", Times, serif;
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
}
#apDiv17 tr th{
	background: #0C0;
	border:2px solid #033;
	background: linear-gradient( #0C0 30%, #030);
	box-shadow: 6px 6px 20px rgba(0, 0, 0, 1);
	font-weight:bold;
}
	
</style>
<script type="text/javascript">
function show()
{
	document.getElementById("apDiv11").style.visibility="visible";
}
function hide()
{
	document.getElementById("apDiv11").style.visibility="hidden";
}
</script>
</head>
<body vlink="#FFFFFF">
<div id="apDiv1">
  <div id="apDiv2">
    <div id="apDiv5">
      <div align="left">Hospital Management System</div>
    </div>
</div>
  <div id="apDiv4"></div>
<div id="apDiv6">
    <table width="1071" height="54" border="0">
      <tr>
        <td width="186"><div align="center" id="ap6"><a href="index.html">Home</a></div></td>
        <td width="260"><div align="center"><a href="patient.php">Patient & Visitor's</a></div></td>
          <td width="203"><div align="center"><a href="doctor.php">Doctors</a></div></td>
        <td width="233"><div align="center"><a href="feedback.php">Feedback</a></div></td>
        <td width="167"><div align="center"><a href="contact.html">Contact us</a></div></td>
      </tr>
    </table>
  </div>
<div id="apDiv14">
<div id="copyright">
  <div class="wrapper">
    <p align="center" style="color:#000; font-size:18px;">Copyright &copy; 2015 - All Rights Reserved - <a href="#" style="color:#000; font-size:18px;">AD Hospital</a></p>
    <p align="center" style="color:#000; font-size:18px;">Powered By AD Hospital</p>
     <p align="center" style="color:#000; font-size:18px;">Developed by Divyanshu Sharma &amp; Adnan Arif - B.Sc (6th Semester)</p>
    <br class="clear" />
  </div>
</div>
</div>
<div id="apDiv12"><hr>
  <div id="apDiv15">
  	<?php
		include("connection.php");
		$uid=$_SESSION['id'];
		$qry=mysql_query("select pimage from patient where patientID='$uid'");
		while($row=mysql_fetch_array($qry))
		{
			$img=$row['pimage'];
		}
		print "<img src='imge/";
		print $img;
		print "' height='225px' width='225px'>";
	?>
  </div>
  <div id="apDiv13">Hi,&nbsp;
  <?php
 	include("connection.php");
	$uid=$_SESSION['id'];
	$qry=mysql_query("select pname from patient where patientID='$uid'");
	while($row=mysql_fetch_array($qry))
	{
		print "<font style='font-size:22px;'><strong>".$row['pname']."</strong></font>";
	}
     
  ?><hr>
  </div>
<div id="apDiv8">
  <table width="191" height="235" border="0">
    <tr>
      <td width="195"><div align="center"><a href="patient_profile.php">Profile</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="doctor_src.php">Doctors</a></div></td>
    </tr>
    <tr>
      <td  onmouseover="show()" onMouseOut="hide()"><div align="center"><a href="make_app.php">Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="report_download.php">Report</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="p_logout.php">Logout</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv11" onMouseOver="show()" onMouseOut="hide()">
  <table width="203" height="110" border="0">
    <tr>
      <td><div align="center"><a href="make_app.php">Make Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="view_app.php">View Appointment</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="cancel_app.php">Cancel Appointment</a></div></td>
    </tr>
  </table>
  </div>
</div>
<div id="apDiv16">
  <form name="form1" method="post" action="">
    <table width="451" height="47" border="0">
      <tr>
        <td width="159"><div align="right">
          <input type="submit" name="submit" id="submit" value="Search Doctor">
        </div></td>
        <td width="14">&nbsp;</td>
        <td width="237"><label for="doctor"></label>
          <div class="select-style"><select name="doctor" size="1" id="doctor">
          <option value="">Select Specialist</option>
          <?php 
			include("connection.php");
			$qry="select specilist from doctor group by specilist";
			$result=mysql_query($qry);
			if($result)
			{
				while($row=mysql_fetch_row($result))
				{
					print "<option value='".$row[0]."'>".$row[0]."</option>";
				}
			}
			else
			{
				print mysql_error();
			}
			?>
          </select></div></td>
      </tr>
    </table>
  </form>
</div>
<div id="apDiv17">
<table width="792" height="39" border="1" cellpadding="1" cellspacing="1">
      <tr>
        <th height="44">Doctor Name</th>
        <th height="44">Email-ID</th>
        <th height="44">Address</th>
        <th height="44">Phone No.</th>
        <th height="44">Gender</th>
      </tr>
      <tr>
       <?php
		include("connection.php");
		$select=$_POST['doctor'];
		$qry="select * from doctor where specilist='$select'";
		$result=mysql_query($qry);
		if($result)
		{
			while($doctor=mysql_fetch_assoc($result))
			{
				print "<tr height='39'>";
				print "<td>".$doctor['dname']."</td>";
				print "<td>".$doctor['doctorID']."</td>";
				print "<td>".$doctor['address']."</td>";
				print "<td>".$doctor['phoneno']."</td>";
				print "<td>".$doctor['gender']."</td>";
				print "</tr>";
			}
		}
		?>
        </tr>
 </table>
</div>
</div>
</body>
</html>
