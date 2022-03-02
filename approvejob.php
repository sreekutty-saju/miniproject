<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<style>
.b{
  background-color:#4CAF50; 
  border:none; 
  color:white;
  padding:15px 32px;
  display:inline-block;
  font-size:16px;
  cursor:pointer
}
.b2{
  background-color:#008CBA; 
  border:none; 
  color:white;
  padding:15px 32px;
  display:inline-block;
  font-size:16px;
  cursor:pointer
}
</style>
</head>
<body>
	<?php
	$con=mysqli_connect("localhost:3307","root","",'nrems');
	$re="select count(*) from emp_reg";
    $re2="select count(*) from work_reg";
    $re3="select count(*) from work_reg where status='c'";
    $male="select count(*) from emp_reg where sex='m'";
    $female="select count(*) from emp_reg where sex='f'";
    $inj="select count(*) from injury";
    $ans1=mysqli_query($con,$re);
    $ans2=mysqli_query($con,$re2);
    $ans3=mysqli_query($con,$re3);
    $male1=mysqli_query($con,$male);
    $female1=mysqli_query($con,$female);
    $inj1=mysqli_query($con,$inj);
    $re1=mysqli_fetch_array($ans1);
     $re2=mysqli_fetch_array($ans2);
     $current=mysqli_fetch_array($ans3);
     $male2=mysqli_fetch_array($male1);
     $female2=mysqli_fetch_array($female1);
     $inj2=mysqli_fetch_array($inj1);
    ?>

	<!-- main -->
	
		<div class="center-container">
		
			<div class="w3ls_banner_info">
			
				
				<h1>NREMS PLUS  </h1>

				 <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-8">

    

    

<section class="engine"><a href="https://mobirise.info/w">National RUral Employement Management Scheme</a></section><section class="section-table cid-rdMFDnAcbe" id="table1-9">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          JOB CARD Requests
      </h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
               
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      JOB_ID</th><th class="head-item mbr-fonts-style display-7">
                      JOB_NAME</th><th class="head-item mbr-fonts-style display-7">
                      AREA_OF_COVERAGE</th><th class="head-item mbr-fonts-style display-7">
                      START DATE</th><th class="head-item mbr-fonts-style display-7">
                      END DATE</th><th class="head-item mbr-fonts-style display-7">
                      LOCAL ADMIN ID</th><th class="head-item mbr-fonts-style display-7">
                      ESTIMATED AMOUNT</th>
                      </tr>
            </thead>

            <tbody>
              
            <?php
            
            $c=mysqli_connect("localhost:3307","root","",'nrems');
            

$a=" select job_id,job_name,area_coverage,str_date,end_date,localAdmin_id,esitmated_amt FROM jobcard_register where status=0";
$b=mysqli_query($c,$a);
//$d=mysqli_fetch_array($b);

               while($r=mysqli_fetch_array($b))
            {
              
           echo "<tr>";
                
                
                
             echo "<td class=body-item mbr-fonts-style display-7>";
                            echo $r['job_id'];
            echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo $r['job_name'];
            echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo $r['area_coverage'];
             echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo $r['str_date'];
             echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo $r['end_date'];
             echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo $r['localAdmin_id'];
             echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo $r['esitmated_amt'];
            echo "</td><td class=body-item mbr-fonts-style display-7>";
            echo "<a href=http://localhost/nrems2/profile/web/jobupdate.php?id=$r[job_id]><button name=accept class=b>APPROVE</button></a>";
            echo "</td></tr>";

          }

            ?>
                
                
                
                
              </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
   <a href="http://localhost/nrems2/profile/web/viewapprovedjob.php"> <button class="b2">View Approved jobs</a></button>
   <a href="http://localhost/nrems2/profile/web/index.php"> <button class="b2">BACK</a></button>
</section>


  <script src="table/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="table/assets/popper/popper.min.js"></script>
  <script src="table/assets/tether/tether.min.js"></script>
  <script src="table/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="table/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="table/assets/dropdown/js/script.min.js"></script>
  <script src="table/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="table/assets/datatables/jquery.data-tables.min.js"></script>
  <script src="table/assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="table/assets/theme/js/script.js"></script>
  
			

 
</body>
</html>