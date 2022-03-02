<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Flat Sign Up Form Responsive Widget Template| Home :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>


	<?php
       $ph=$_POST['phone'];
       $name=$_POST['fname'].$_POST['lname'];
       $pas=$_POST['pass2'];

           $con=mysqli_connect("localhost:3307","root","",'nrems');
           $l="insert into emp_reg(name,ph,password,status)values('$name',$ph,'$pas',1)";
		   $res1=mysqli_query($con,$l);
		   ?>
<!--header-->

	<div class="header-w3l">
		<a href="http://localhost/nrems2/home2/web/index.php"><h3 align="right">Home</a>|Services</h3>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Complete Profile</h2>
		<div class="sub-main">	
			<form action="http://localhost/nrems2/verify/user_verify.php" method="post">
				<input placeholder="First Name" name="fname" class="name2" type="text" required="">	
				
				<select name="sex">
					<option value="m">Male</option>
					<option value="f">Female</option>
					<option value="o">Others</option>
				</select>
				<input placeholder="House Name" name="hname" class="name" type="text" required="">
				<input placeholder="House Number" name="hno" class="name" type="text" required="">
			   <input placeholder="Street" name="street" class="name" type="text" required="">
					
				<input placeholder="city" name="city" class="name" type="text" required="">
					
				<select name="state">
					<?php
												$con2=mysqli_connect("localhost:3307","root","",'nrems');
												$c="select * from state";
												$res=mysqli_query($con2,$c);
												$res2=mysqli_fetch_array($res);

                                                 for($i=1;$i<=mysqli_num_rows($res);$i++)
                                                 {



                                                 	$r=mysqli_fetch_array($res, MYSQLI_NUM);
                                                 	


												echo("<option value=".$r[1].">".$r[1]."</option>");
												
											
                                            
											}
											?>
											
					
				</select>
				<input placeholder="District" name="dis" class="name" type="text" required="">
				<input placeholder="Adhar UID" name="adhar" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
					<input placeholder="Account Number" name="account" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="House Name" name="dob" class="name2" type="date" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				
				
				<input type="submit" value="Register">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; 2019 NREMS . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>