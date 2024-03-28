<?php
include("dbconnect.php");
include("email.php");
session_start();
extract($_POST);


$bid=$_REQUEST['bid'];
	$qt=mysql_query("select * from user_search where id='$bid'");
		while($r=mysql_fetch_array($qt))																									
			{
			$data=$r['data'];
			$user_email=$r['email'];
			}
if(isset($btn))
{

$qry=mysql_query("update user_search set plant='$plant',fertilizer='$fertilizer',Nitrogen='$nitro',Potassium='$potas',Phosphorous='$phos',status=1 where id=$bid");

$objEmail	=	new CI_Email();
	$objEmail->from("serverkey2018gmail.com", "Land Fertilizer");
 
	  $email=$user_email;
	 $otp="Your Query Was Updated By Admin";
	 
	 

	 
	/////////////////
	
									//$objEmail->from('cloudservice@projectone.in', "Cloud Service");
									$objEmail->to($email);
									//$objEmail->cc($txt_cc);
									//$objEmail->bcc($txt_bcc);
									$objEmail->subject("Report");
									
									$objEmail->message("$otp");
									
									if(file_exists($filename))
										{
											$objEmail->attach($filename);
										}
										if ($objEmail->send())
										{
										//echo "s";
										}
										else
										{
										//echo "n";
										}
	
if($qry)
{
?>
<script language="javascript">
alert("Answer Send Query....");
window.location.href="untrained_queries.php";
 </script>
<?php
}
else
{
echo "<script>alert('Not Answer Update...');</script>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Land Parcel Fertilizer</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farmland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Alegreya:400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="wthree_logo">
						<h1><a class="navbar-brand" href="#"><span>Soil</span>Yeild Prediction</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="admin.php" data-hover="Home">HOME</a></li>
							<li><a href="training_data.php" data-hover="TRAINING DATASET">TRAINING</a></li>
							<li><a href="user_details.php" data-hover="USER DETAILS">USER DETAILS</a></li>
							<li class="active"><a href="untrained_queries.php" data-hover="UNTRAINED QUERIES">UNTRAINED QUERIES</a></li>
							<li><a href="index.php" data-hover="LOGOUT">LOGOUT</a></li>
						</ul>
						<div class="w3_social_icons">
							<ul class="w3layouts_social">	
								
							</ul>
						</div>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->	
	
<!-- services -->
<div class="services">
		<div class="container">
			<!--<p class="w3ls_para">Admin Login</p>-->
			<h3 class="agileits_head" style="color:#FF6600">SEND QUERY </h3>
			<p class="agileits_head">&nbsp;</p>
		</div>
	   
	    <form name="form1" method="post" action="">
	      <table width="379" height="333" border="0" align="center">
            <tr>
              <th scope="row">Query</th>
              <td><?php echo $data;?></td>
            </tr>
            <tr>
              <th scope="row">Plant</th>
              <td><label>
			  <input name="plant" type="text" id="plant">
			  </label></td>
            </tr>
            <tr>
              <th scope="row">Fertilizer</th>
              <td><label>
                <input name="fertilizer" type="text" id="fertilizer">
              </label></td>
            </tr>
            <tr>
              <th scope="row"><span class="w3l_head ">Nitrogen</span></th>
              <td><label>
                <input name="nitro" type="text" id="nitro">
              </label></td>
            </tr>
            <tr>
              <th scope="row"><span class="w3l_head ">Potassium</span></th>
              <td><label>
                <input name="potas" type="text" id="potas">
              </label></td>
            </tr>
            <tr>
              <th scope="row"><span class="w3l_head ">Phosphorous</span></th>
              <td><label>
                <input name="phos" type="text" id="phos">
              </label></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td><label>
                <input name="btn" type="submit" id="btn" value="Send">
              </label></td>
            </tr>
          </table>
	      <p align="center">&nbsp;</p>
         		
						
							
							 <p align="center" style="color:#FF9933">&nbsp;</p>
							
							
							
						
		  
	    </form>
</div>
<!-- //services -->
	
<!-- services-bottom -->
<!-- //services-bottom -->
<!-- featured-services -->
<div class="featured-services"></div>
<!-- //featured-services -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Farmland
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/banner.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- footer -->
	<div class="footer">
		<div class="container">
		  <div class="clearfix"> </div>
			
			  
					<p align="center" style="color:#FFFFFF">© 2020. All rights reserved | Design by <a href="#">Admin</a></p>
				
				<div class="clearfix"> </div>
			
	  </div>
	</div>		
<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>