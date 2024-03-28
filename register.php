 <?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
 $rdate =date("d-m-y");
$max_qry = mysql_query("select max(id) from user_register");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
  $qry=mysql_query("insert into user_register values('$id','$name','$contact','$address','$email','$district','$area','$uname','$pass','$rdate')");
if($qry)
{
?>
<script language="javascript">
alert("Register Successfully..");
window.location.href="user.php"
 </script>
<?php
}
else
{
?>
<script language="javascript">
alert("Failed..");
window.location.href="register.php"
 </script>
<?php
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



<script language="javascript">
            function validate()
            {
              // alert("");
                if (document.form1.name.value == "")
                {
				
                    alert("Enter the Name");
                    document.form1.name.focus();
					//document.getElementById("demo1").innerHTML = text;
                    return false;
                }
				

				
                if (document.form1.contact.value == "")
                {
                    alert("Enter the Contact");
                    document.form1.contact.focus();
                    return false;
                } 
                if (document.form1.contact.value != "")
                {
                  var z = document.form1.contact.value;
             if(!/^[0-9]+$/.test(z)){
   
        alert("enter 0-9")
       document.form1.contact.focus();
        return false;
        }   
                }
                  
                      
               if (document.form1.contact.value != "")
                {
                   var a=document.form1.contact.value;
                   if(!(a.length ==10)) //i got a problem with this one i think
  {
  alert("Enter  10 character length");
    document.form1.contact.focus();

  return false;
  }
  
 
                }
				 
				
                      
     	
				if (document.form1.address.value == "")
                {
                    alert("Enter the address");
                    document.form1.address.focus();
                    return false;
                }	
                if (document.form1.email.value == "")
                {
                    alert("Enter the email");
                    document.form1.email.focus();
                    return false;
                }
                if (document.form1.email.value != "")
                {
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(document.form1.email.value.match(mailformat))  
{  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.email.focus();  
return false;  
}  
                }
                 
				 if (document.form1.district.value == "")
                {
                    alert("Enter the District");
                    document.form1.district.focus();
                    return false;
                }
				if (document.form1.area.value == "")
                {
                    alert("Enter the Area");
                    document.form1.area.focus();
                    return false;
                }
                if (document.form1.uname.value == "")
                {
                    alert("Enter the uname");
                    document.form1.uname.focus();
                    return false;
                }
                if (document.form1.pass.value == "")
                {
                    alert("Enter the pass");
                    document.form1.pass.focus();
                    return false;
                }
				if (document.form1.cpass.value == "")
                {
				
                    alert("Enter the confirm pass");
                    document.form1.cpass.focus();
                    return false;
                }
				if (document.form1.cpass.value != "")
                {
				var p=document.form1.pass.value;
				//alert(p);
				var c=document.form1.cpass.value;
				//alert(c);
				 if(c!=p) //i got a problem with this one i think
  {
  alert("Not Matching Confirm Password");
    document.form1.cpass.focus();

  return false;
  }
                   
                }
				
				
               
                //finishMD();
                return true;
            }
        </script>
		
		
		
<script language="javascript">
            function myfuction()
            {
					
			var x = document.getElementById("name").value;
 		 	if (x=="") {
    		text = "Enter Your Name";
			document.getElementById("demo").innerHTML = text;
			return false;
  			} 
			else{
			text = "";
			document.getElementById("demo").innerHTML = text;
			}
  			
			var e = document.getElementById("contact").value;
 		 	if (e=="") {
    		text6 = "Enter Your Contact";
			document.getElementById("demo3").innerHTML = text6;
			return false;
  			}
			else{
			text6 = "";
			document.getElementById("demo3").innerHTML = text6;
			} 
			
			var h = document.getElementById("address").value;
 		 	if (h=="") {
    		text9 = "Enter Your Address";
			document.getElementById("demo5").innerHTML = text9;
			return false;
  			} 
			else{
			text9 = "";
			document.getElementById("demo5").innerHTML = text9;
			} 
			
			var g = document.getElementById("email").value;
 		 	if (g=="") {
    		text8 = "Enter Your Email";
			document.getElementById("demo4").innerHTML = text8;
			return false;
  			} 
			else{
			text8 = "";
			document.getElementById("demo4").innerHTML = text8;
			} 
			
			
			
			
			
			
			var d = document.getElementById("district").value;
 		 	if (d=="") {
    		text5 = "Enter Your district";
			document.getElementById("demo6").innerHTML = text5;
			return false;
  			}
			else{
			text5 = "";
			document.getElementById("demo6").innerHTML = text5;
			} 
			
			
			var d = document.getElementById("area").value;
 		 	if (d=="") {
    		text5 = "Enter Your Area";
			document.getElementById("demo9").innerHTML = text5;
			return false;
  			}
			else{
			text5 = "";
			document.getElementById("demo9").innerHTML = text5;
			} 
			
			
			var i = document.getElementById("uname").value;
 		 	if (i=="") {
    		text10 = "Enter Your Username";
			document.getElementById("demo7").innerHTML = text10;
			return false;
  			}
			else{
			text10 = "";
			document.getElementById("demo7").innerHTML = text10;
			} 
			
			 
			
			var j = document.getElementById("pass").value;
 		 	if (j=="") {
    		text11 = "Enter Your Password";
			document.getElementById("demo8").innerHTML = text11;
			return false;
  			}
			else{
			text11 = "";
			document.getElementById("demo8").innerHTML = text11;
			} 
			
			 
			
			 	
			
			//finishMD();
                return true;
            }
        </script>
		





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
							<li><a href="index.php" data-hover="Home">Home</a></li>
							<li><a href="admin.php" data-hover="Admin">ADMIN</a></li>
							<li class="active"><a href="user.php" data-hover="User">USER</a></li>
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
			<h3 class="agileits_head" style="color:#FF6600">USER REGISTRATION</h3>
			<p class="agileits_head">&nbsp;</p>
		</div>
	   
	    <form name="form1" method="post" action="">
	      <table width="416" height="413" border="0" align="center">
            <tr>
              <th scope="row">Name</th>
              <td><label>
			  <input name="name" type="text" id="name" onChange="myfuction()">&nbsp;<label id="demo" style="color:#FF0000"></label>
			  </label></td>
            </tr>
            <tr>
              <th scope="row">Contact</th>
              <td><label>
			  <input name="contact" type="text" id="contact" onChange="myfuction()">&nbsp;<label id="demo3" style="color:#FF0000"></label>
			  </label></td>
            </tr>
            <tr>
              <th scope="row">Address</th>
              <td><label>
                <label>
                <textarea name="address" id="address"></textarea>
                </label>
                &nbsp;
                <label id="demo5" style="color:#FF0000"></label>
			  </label></td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td><label>
			  <input name="email" type="text" id="email" onChange="myfuction()">&nbsp;<label id="demo4" style="color:#FF0000"></label>
			  </label></td>
            </tr>
            <tr>
              <th scope="row">District</th>
              <td><label>
			  <input name="district" type="text" id="district" onChange="myfuction()">&nbsp;<label id="demo6" style="color:#FF0000"></label>
			  </label></td>
            </tr>
            <tr>
              <th scope="row">Area</th>
              <td><label>
			  <input name="area" type="text" id="area" onChange="myfuction()">&nbsp;<label id="demo9" style="color:#FF0000"></label>
			  </label></td>
            </tr>
            <tr>
              <th scope="row">Username</th>
              <td><label>
                <input name="uname" type="text" id="uname" onChange="myfuction()">&nbsp;<label id="demo7" style="color:#FF0000"></label>
              </label></td>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <td><label>
                <input name="pass" type="text" id="pass" onChange="myfuction()">&nbsp;<label id="demo8" style="color:#FF0000"></label>
              </label></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td><label>
                <input name="btn" type="submit" id="btn" value="Register" onClick="return validate()">
              </label></td>
            </tr>
          </table>
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