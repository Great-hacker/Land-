<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uname=$_SESSION['uname'];

$query1=mysql_query("select * from user_register where uname='$uname'");
$row1=mysql_fetch_array($query1);
$email=$row1['email'];
$msg="";
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
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
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
							<li><a href="user_home.php" data-hover="Home">HOME</a></li>
							<li class="active"><a href="query_path.php" data-hover="QUERY PATH">QUERY PATH</a></li>
							<!--<li><a href="graph_analysis.php" data-hover="GRAPH ANALYSIS">GRAPH ANALYSIS</a></li>-->
							<li><a href="untrained_query_send.php" data-hover="UNTRAINED QUERIES">UNTRAINED QUERIES</a></li>
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
			<h3 class="agileits_head" style="color:#FF6600">QUERY PATH</h3>
			<p class="agileits_head">&nbsp;</p>
		</div>
	   
	    <form name="form1" method="post" action="">
	      <p align="center">&nbsp;</p>
         		
				
		  
	      <table width="429" height="76" border="0" align="center">
            <tr>
              <th scope="row">&nbsp;</th>
              <th scope="row"><label></label></th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><select name="path">
               <option value="Soil">Soil</option>
                <option value="Fertilizer">Fertilizer</option>
                <option value="Plant">Plant</option>
                
              </select></th>
              <th scope="row"><label>
                <input name="query" type="text" id="query" placeholder="Query Path">
              </label></th>
              <td><label>
                <input name="btn" type="submit" id="btn" value="Search">
              </label></td>
            </tr>
          </table>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	    </form>
		<p>
		  <?php
		if(isset($btn))
{
	  $q2=mysql_query("truncate table fertilizer");
		  $q2;
$value=$query;
$data=strtolower($value);

$qry_path=$_REQUEST['path'];

//echo $qry_path;

if($qry_path=="Soil")
{
/*$max_qry = mysql_query("select max(id) from user_search");
$max_row = mysql_fetch_array($max_qry); 
$id1=$max_row['max(id)']+1;
$qry=mysql_query("insert into user_search values('$id1','$data','1','0')");
$qry;*/
$input_word_list = explode(" ", $data);
//echo $input_word_list;
		?>
  </p>
		<p align="center" class="style1">Soil Type</p>
		<p align="center" class="style1">&nbsp; </p>
		<table width="45%" height="113" border="0" align="center">
          <tr>
            <td width="11%"> <h3 align="center" class="w3l_head ">Plant</h3></td>
            <td width="20%"><h3 align="center" class="w3l_head ">Fertilizer</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Nitrogen</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Potassium</h3></td>
            <td width="31%"> <h3 align="center" class="w3l_head ">Phosphorous</h3></td>
          </tr>
		   <?php
		 
		$count=0;
			$file = fopen('upload/Fertilizer.csv', 'r');
			while (($line = fgetcsv($file)) !== FALSE) 
			{
			$load=0;
			$load1=0;
			$queries=$line[3];
			
			$pieces = explode(" ", $queries);
			foreach($pieces as $value)
			{
			 if($value==$data)
			 {
			 $load=$load+1;
			 }
			 
			 foreach($input_word_list as $d1)
				{
				 $t=strtolower($d1);
				 $t1=strtolower($value);

				
				if($t==$t1)
			 {
			 $load1=$load1+1;
			 }
			 }//secforeach
			}//foreach
			if(($load==1)||($load1>=1))
			{
			$count++;
			$r=0;
		  ?>
           <tr>
             <td><div align="center">
               <?php  print_r($val4=$line[4]);?>
             </div></td>
             <td><div align="center">
               <?php  print_r($val8=$line[8]);?>
             </div></td>
             <td><div align="center">
               <?php  print_r($val1=$line[5]);?>
             </div></td>
             <td><div align="center">
               <?php  print_r($val2=$line[6]);?>
             </div></td>
             <td><div align="center">
               <?php  print_r($val3=$line[7]);?>
             </div></td>
           </tr>
          <tr>
            <td colspan="5">&nbsp;</td>
          </tr>
		   <?php
		 
		 $tot1=$val1+$val2+$val3;
		$max_qry = mysql_query("select max(id) from fertilizer");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		$qry=mysql_query("insert into fertilizer values('$id','$qry_path','$data','$val8','$val1','$val2','$val3','$tot1','1')");
		$qry;
		  }
		  }
		  
		 ?>
  </table>
   <?php
		  
		 if($count==0)
		 {
		$qt=mysql_query("select * from user_search where data='$data'");
		if($r=mysql_fetch_array($qt))																									
		{
		$count=$r['data'];	
		//$count=$count+1;
		}
		else
		{
		
		
		$max_qry = mysql_query("select max(id) from user_search");
		$max_row = mysql_fetch_array($max_qry); 
		$id1=$max_row['max(id)']+1;
		$qry=mysql_query("insert into user_search values('$id1','$uname','$data','0','0','0','0','0','0','1','$email')");
		$qry;
		}
		 }
		 // Graph link 
		if($count==0)
		{
		$value="Not Found Data!!";
		?>
		<h3 align="center"><strong><?php echo $value;?></strong></h3>
		<?php
		//echo "value";
		}
		else
		{
		?>
		 <div align="center"><a href="graph_analysis.php?value1=<?php echo $line[1];?>&&value2=<?php echo $line['2'];?>">Graph Analysis</a></div>
		<?php
		}
  		?>
		<p>
		<?php
		}
		
		
		
		//search Fertilizer
		if($qry_path=="Fertilizer")
		{
		
		$input_word_list = explode(" ", $data);

		?>
  </p>
		
		<p>&nbsp;</p>
		<p align="center" class="style1">Fertilizer</p>
		<p align="center" class="style1">&nbsp;</p>
		<table width="45%" height="113" border="0" align="center">
          <tr>
            <td width="11%"> <h3 align="center" class="w3l_head ">Plant</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Fertilizer</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Nitrogen</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Potassium</h3></td>
            <td width="31%"> <h3 align="center" class="w3l_head ">Phosphorous</h3></td>
          </tr>
		   <?php
		 
			$count2=0;
			$file = fopen('upload/Fertilizer.csv', 'r');
			while (($line = fgetcsv($file)) !== FALSE) 
			{
			$load=0;
			$load1=0;
			$queries=$line[8];
			
			$pieces = explode(" ", $queries);
			//echo "Qry=".$queries.",pic=".$piceces.";";
			foreach($pieces as $value)
			{
			 if($value==$data)
			 {
			 $load=$load+1;
			 }
			 foreach($input_word_list as $d1)
				{
				 $t=strtolower($d1);
				 $t1=strtolower($value);

				
				if($t==$t1)
			 {
			 $load1=$load1+1;
			 }
				}
			}
			if(($load==1)||($load1>=1))
			{
			$count2++;
		  ?>
          <tr>
            <td><div align="center">
              <?php  print_r($num4=$line[4]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($num8=$line[8]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($num5=$line[5]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($num6=$line[6]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($num7=$line[7]);?>
            </div></td>
          </tr>
		  <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
		   <?php
		  
	
		   
		$tot=$num5+$num6+$num7;
		$max_qry = mysql_query("select max(id) from fertilizer");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		$qry=mysql_query("insert into fertilizer values('$id','$qry_path','$data','$num8','$num5','$num6','$num7','$tot','1')");
		$qry;	
		 }	
		
		  }
		 ?>
		  </table>
		  <?php
		  if($count2==0 && $qry_path=="Fertilizer")
		 {
		$qt=mysql_query("select * from user_search where data='$data'");
		if($r=mysql_fetch_array($qt))																									
		{
		$count=$r['data'];	
		//$count=$count+1;
		}
		else
		{
		
		
		$max_qry = mysql_query("select max(id) from user_search");
		$max_row = mysql_fetch_array($max_qry); 
		$id1=$max_row['max(id)']+1;
		$qry=mysql_query("insert into user_search values('$id1','$uname','$data','0','0','0','0','0','0','1')");
		$qry;
		}
		 }
		  // Graph link 
		if($count2==0 && $qry_path=="Fertilizer")
		{
		$value="Not Found Data!!";
		?>
		<h3 align="center"><strong><?php echo $value;?></strong></h3>
		<?php
		//echo "value";
		}
		else
		{
		?>
		 <div align="center"><a href="graph_analysis.php?value1=<?php echo $line[1];?>&&value2=<?php echo $line['2'];?>">Graph Analysis</a></div>
		<?php
		}
  		?>
		<?php
		}
		
		
		
		//search Plant
		if($qry_path=="Plant")
		{
		
		
		$input_word_list = explode(" ", $data);
//echo $input_word_list;
		?>
  </p>
		<p align="center" class="style1">Plant</p>
		<p align="center" class="style1">&nbsp;</p>
		<table width="45%" height="113" border="0" align="center">
          <tr>
            <td width="20%"><h3 align="center" class="w3l_head ">Soil</h3></td>
            <td width="20%"><h3 align="center" class="w3l_head ">Fertilizer</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Nitrogen</h3></td>
            <td width="19%"><h3 align="center" class="w3l_head ">Potassium</h3></td>
            <td width="31%"> <h3 align="center" class="w3l_head ">Phosphorous</h3></td>
          </tr>
		   <?php
		 $count3=0;
			
			$file = fopen('upload/Fertilizer.csv', 'r');
			while (($line = fgetcsv($file)) !== FALSE) 
			{
			$load=0;
			$load1=0;
			$queries=$line[4];
			
			$pieces = explode(" ", $queries);
			//echo "Qry=".$queries.",pic=".$piceces.";";
			foreach($pieces as $value)
			{
			 if($value==$data)
			 {
			 $load=$load+1;
			 }
			 foreach($input_word_list as $d1)
				{
				 $t=strtolower($d1);
				 $t1=strtolower($value);

				
				if($t==$t1)
			 {
			 $load1=$load1+1;
			 }
				}
			}
			if(($load==1)||($load1>=1))
			{
			$count3++;
			$r=0;
		  ?>
          <tr>
            <td><div align="center">
              <?php  print_r($row4=$line[3]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($row8=$line[8]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($row1=$line[5]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($row2=$line[6]);?>
            </div></td>
            <td><div align="center">
              <?php  print_r($row3=$line[7]);?>
            </div></td>
          </tr>
		  <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
		   <?php
		   
		  $tot3=$row1+$row2+$row3;
		$max_qry = mysql_query("select max(id) from fertilizer");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		$qry=mysql_query("insert into fertilizer values('$id','$qry_path','$data','$row8','$row1','$row2','$row3','$tot3','1')");
		$qry;
		   }
		   $r++;
		  }
		  ?>
  </table>
		  <?php
		  if($count3==0 && $qry_path=="Plant")
		 {
		$qt=mysql_query("select * from user_search where data='$data'");
		if($r=mysql_fetch_array($qt))																									
		{
		$value=$r['data'];
		
		}
		else
		{
		
		
		$max_qry = mysql_query("select max(id) from user_search");
		$max_row = mysql_fetch_array($max_qry); 
		$id1=$max_row['max(id)']+1;
		$qry=mysql_query("insert into user_search values('$id1','$uname','$data','0','0','0','0','0','0','1')");
		$qry;
		}
		
		 }
		 // Graph link 
		if($count3==0 && $qry_path=="Plant")
		{
		$value="Not Found Data!!";
		?>
		<h3 align="center"><strong><?php echo $value;?></strong></h3>
		<?php
		//echo "value";
		}
		else
		{
		?>
		 <div align="center"><a href="graph_analysis.php?value1=<?php echo $row8;?>&&value2=<?php echo $row8;?>">Graph Analysis</a></div>
		<?php
		}
  		?>
 
		<div align="center">
		  <?php
		}
		
		
		}
		?>
		  
		  
		  
		  
		  
		  
		  
        </div>
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