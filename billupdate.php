<!DOCTYPE html>
<html>
<head>
 <link rel="shortcut icon" href="table/assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>Page 1</title>
  <link rel="stylesheet" href="table/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="table/assets/tether/tether.min.css">
  <link rel="stylesheet" href="table/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="table/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="table/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="table/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="table/assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="table/assets/theme/css/style.css">
  <link rel="stylesheet" href="table/assets/mobirise/css/mbr-additional.css" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
 <meta name="keywords" content="Square Profile Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!--webfonts-->

<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<!--//webfonts-->

</head>
<body>
	<?php
  function redirect($url)
  {
    ?><script type="text/javascript">window.location=("<?php echo $url?>");</script><?php
  }

  $con1=mysqli_connect("localhost:3307","root","",'nrems');
  $re1="select job_id from jobcard_register";


    $ansi=mysqli_query($con1,$re1);
    $ans7=mysqli_fetch_array($ansi);
     $tid=$_GET['id'];
     echo $tid;
 

 

	$con=mysqli_connect("localhost:3307","root","",'nrems');
  $n="select * from jobcard_register where job_id=$tid";
   $up="update jobcard_register set appr=1 where job_id=$tid";
   mysqli_query($con,$up);
//  echo $n;
  //$n1=mysqli_query($con,$n);
  //$n2=mysqli_fetch_array($n1);
 //$ph='91'.$n2['ph'];


  //  require('Textlocal.class.php');

  //$Textlocal = new Textlocal(false, false, 'B8SUfGNp4SI-8504yjmmwQSYNUqgEmDB2TVasAO7WD');

  //$numbers = array($ph);
  //$sender = 'TXTLCL';
  //$message = 'approved';

  //$response = $Textlocal->sendSms($numbers, $message, $sender);
  //print_r($response);
//  echo $message;
    //redirect("http://localhost/nrems2/profile/web/localadmin.php");
    ?><script type="text/javascript">alert("Bill Passed");</script><?php

     ?>

	<!-- main -->

		<div class="center-container">

			<div class="w3ls_banner_info">


				<h1>NREMS PLUS  </h1>
      </div>
      <h3><?php echo ("Approved");?></h3>
      <a href="http://localhost/nrems2/profile/web/approvedbill.php"><h2>BACK</h2></a>
    </div>
  </body>
  </html>
