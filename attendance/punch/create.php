<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Attendance National Rural employement management scheme</title>
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
<body alink="white">
<!--header-->
<?php
$id=$_GET['id'];
?>
	<div class="header-w3l">
		<h3 align="right"><a href="http://localhost/nrems2/profile/web/localad/web/index.php?id=<?php echo $id;?>"><font color="white">Home</font></a>|</h3>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head"> Attendance</h2>
		<div class="sub-main">

		<?php
		if(isset($_POST['Punch']))
		{

          
          $app_id=$_POST['id'];
		  $w_id=$_POST['wid'];
          $con=mysqli_connect("localhost:3307","root","",'nrems');
          $s="select * from emp_reg where app_id=$app_id";
          $res=mysqli_query($con,$s);
          $res2=mysqli_fetch_array($res);
          echo($res2['name']);
          if($res2['name']=="")
          	echo("Cannot Find Employee");
          $mng="10:00:00";
          $evg="05:00:00";
          $r="update emp_wrk set attendance=attendance+0.5 where app_id=$app_id";
		  $q="update emp_wrk set w_id=$w_id where app_id=$app_id";
		  $qw=mysqli_query($con,$q);
          $ma="update emp_reg set work_day=work_day+1";
		  $we="update emp_wrk set Salary=attendance*320 where app_id=$app_id";
		  $er=mysqli_query($con,$we);
            if(time()<=strtotime($mng))
            {
            	 $res6=mysqli_query($con,$r);
            }


             if(time()>=strtotime($evg))
            {
            	 $res6=mysqli_query($con,$r);
            	 $res7=mysqli_query($con,$ma);
            }

		}	
		?>
			<form action="#" method="post">
				<input placeholder="Employee ID" name="id" class="name" type="text" required="">
				<input placeholder="Work id" name="wid" class="name" type="text" required="">
				
				<input type="submit" value="submit" name="Punch">
				
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; 2019 NREMS . All rights reserved | Design by <a href="http://w3layouts.com">.sreekutty saju</a></p>
</div>
<!--//footer-->

</body>
</html>