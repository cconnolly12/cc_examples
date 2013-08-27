<?php /*?><?php include( 'mobile.php' ); ?><?php */?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex, nofollow">
<meta charset="utf-8" />
<!-- <meta name="description" content="Get StrongBox. Reduce video storage costs and empower faster file-based workflows with the StrongBox LTFS archive and file protection solution."> -->
<title>Get the StrongBox LTFS Archive | Accessible, Low-cost Video Storage with LTO </title>
<!-- start head -->
<?php include("includes/head.php"); ?>
<!--/ end head -->

<?php include_once("includes/analyticstracking.php") ?>
</head>

<body>

<!-- Preloader --
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<!-- Preloader -->

<style type="text/css">
/* Preloader */
#preloader {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color:#292727; /* change if the mask should have another color then white */
	z-index:99; /* makes sure it stays on top */
}

#status {
	width:200px;
	height:200px;
	position:absolute;
	left:50%; /* centers the loading animation horizontally one the screen */
	top:50%; /* centers the loading animation vertically one the screen */
	background-image:url(images/loader.gif); /* path to your loading animation */
	background-repeat:no-repeat;
	background-position:center;
	margin:-100px 0 0 -100px; /* is width and height divided by two */
}

#social_share_buttons_wrapper {
	position: fixed;
	right: 0;
	top: 45%;
	width: 30px;
	z-index: 303;
}
#social_share_buttons_wrapper ul, #social_share_buttons_wrapper ul li {
	height:27px;
	list-style-type:none;
	margin:0;
	padding:0;
}

#social_share_buttons_wrapper li>a>span {
	background-color: #4d4d4d;
	-webkit-transition: all 0.2s ease-in-out 0s;
	-moz-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
}

#social_share_buttons_wrapper li>a>span {
	display: block;
	width: 30px;
	height: 27px;
}
</style>

<div id="social_share_buttons_wrapper">
    <ul>
        <li><a href="" title="Strongbox Home"><span title="home" style="background-image:url(images/social/home.png);"></span></a></li>
        <li><a alt="email"class='iframe3' href="includes/form2.php"><span title="email" style="background-image:url(images/social/email.png);"></span></a></li>
        <li><a alt="facebook" target="_blank" href="http://www.facebook.com/CrossroadsSystems"><span title="facebook" style="background-image:url(images/social/facebook.png);"></span></a></li>
        <li><a alt="twitter" target="_blank" href="http://www.twitter.com/#!/getstrongbox"><span title="twitter" style="background-image:url(images/social/twitter.png);"></span></a></li>
        <li><a alt="youtube" target="_blank" href="http://www.youtube.com/user/CrossroadsSystems/feed"><span title="youtube" style="background-image:url(images/social/youtube.png);"></span></a></li>
    </ul>
</div> 
	<!--start header-->
     <?php include("includes/header.php"); ?>
	<!--/ end header-->
	<div class="clear"></div>
	<section id="parallax">
          <div class="wrapperWide">
               <div class="items">
                    <div class="item"> 
                    	<!-- start .section1 -->
                         <div id="scroll0"></div>
                         <div class="clear"></div>
                         <?php include("includes/home.php"); ?>
                         <!--/ end .section1 --> 
                         <div id="scroll1"></div>
                         <div class="clear"></div>
                         <!-- start .section2 -->
                         <?php include("includes/why-strongbox.php"); ?>
                         <!--/ end..section2 -->
                         <div id="scroll2"></div>
                         <div class="clear"></div>
                         <!-- start .section3 -->
                         <?php include("includes/open-strongbox.php"); ?>
                         <!--/ end .section3 --> 
                         <div id="scroll3"></div>
                         <div class="clear"></div>
                         <!-- start .section4 -->
                         <?php include("includes/empower.php"); ?>
                         <!--/ end .section4 -->
                         <div id="scroll4"></div>
                         <div class="clear"></div>
                         <!-- start .section5 -->
                         <?php include("includes/sb-platform.php"); ?>
                         <!--/ end .section5 --> 
                         <div id="scroll5"></div>
                         <div class="clear"></div>
                         <!-- start .section6 -->
                         <?php include("includes/track.php"); ?>
                         <!--/ end .section6 -->
                         <div id="scroll6"></div>
                         <div class="clear"></div>
                        <!-- start .section7 -->
                         <?php include("includes/connect.php"); ?>
                         <!--/ end connect -->
                         
                    </div>
                    <!--item--> 
               </div>
               <!--/items-->
          	<div id="tower"></div>
          </div>
          <!--wrapperWide--> 
     </section>
	<!-- start footer-->
	<?php include("includes/footer.php"); ?>
	<!--/ end footer -->   
    
     <div class="clear"></div>
<!--<div id="grass"></div>-->


<!-- Preloader -->
<script type="text/javascript">
	//<![CDATA[
		$(document).ready(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		})
	//]]>
</script>


</body>
</html>
