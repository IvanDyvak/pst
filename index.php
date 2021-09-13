<?php
// make sure "0global_settings.php" file exists and require it
if(!isset($_SERVER["DOCUMENT_ROOT"])){trigger_error("_SERVER[\"DOCUMENT_ROOT\"] not set");header("HTTP/1.1 500 Internal Server Error");exit(0);}
$global_settings_php=$_SERVER["DOCUMENT_ROOT"]."/0global_settings.php";
if(!is_file($global_settings_php)){trigger_error("global_settings_php not found (at:".$global_settings_php.")");header("HTTP/1.1 500 Internal Server Error");exit(0);}
require($global_settings_php);
?>
<?php
// default branding values, set the actual values once in "0global_settings.php" file
if (!isset($domain_name))$domain_name="domain-name.com";
if (!isset($brand_name))$brand_name="Brand-Name";
if (!isset($brand_address))$brand_address="Brand-Address";
if (!isset($brand_phone))$brand_phone="Brand-Phone";

$current_year="2020";
$email = 'info@lacasan.com';
$default_timezone="UTC";
if((($default_timezone=ini_get('date.timezone'))===FALSE)||(1>strlen($default_timezone))){
    $default_timezone="UTC";
    date_default_timezone_set($default_timezone);
}
$current_year=@date("Y");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="Benaissa Ghrib" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php echo $brand_name; ?> - Develop Your Capacity to Communicate</title>
<!--Stylesheet-->

<!--[if IE 7]>
    <link rel="stylesheet" href="/assets/css/fontello-ie7.css"><![endif]-->

    <link href="/assets/css/font.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/fontello.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/base.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/skeleton.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/magnific-popup.css" rel="stylesheet"  />
    <link href="/assets/css/flexslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/jquery.cookieBar.css">




    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--[if lt IE 8]>
<style>
/* For IE < 8 (trigger hasLayout) */
.clearfix {
    zoom:1;
}
</style>
<![endif]-->


</head>

<body>

	<!-- Preloader -->
	<div id="loader">
	  <div id="loaderInner"></div>
	</div>

<!--Wrapper-->
<div id="wrapper">


	<!--Header-->
	<header id="header">
		
		<!--Main header-->
			<div class="mainHeader">
				
				
				<!--Container-->
			<div class="container clearfix">
			<div class="one-third column">
				<!--Logo-->
				<div class="logo">
                    <a href="/"><img src="assets/images/logo.png" alt="logo"></a>
				</div>
				<!--End logo-->
			</div>
			
			
				<div class="two-thirds column">
						<!--Navigation-->
							<nav id="mainNav" >
								<a href="#" class="mobileBtn"><i class="icon-menu"></i></a>

							<ul>
								<li><a href="#about">About us</a></li>
								<li><a href="#services">Services</a></li>
								<li><a href="#portfolio">Portfolio</a></li>
								<li><a href="#contact">Contact</a></li>

							</ul>

							</nav>
						<!--End navigation-->
	
				</div>
			<!--End container-->
			
			
		
 
			</div>
		<!--End main header-->
		
			<!--Top socials-->
			<div class="topSocials">
				<ul class="one columns">
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-gplus"></i></a></li>
				</ul>
						<ul class="one columns">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
			</div>
			<!--End top socials-->
			</div>
	</header>
	<!--End header-->
	
	
	
	<!--Slider-->
	<div class="slider">
		
		<!--Main slider-->
		<div class=" mainSlider flexslider">
			
			
			
			
			<ul class="slides">
				
				<li><img src="/assets/images/sliderImages/slide1.jpg" alt=""/>
				<div class="caption">
					<h1><span class="new"><?php echo $company_name; ?></span> is all about design passion </h1>
				</div>
				</li>
					
					<li><img src="/assets/images/sliderImages/slide2.jpg" alt="" />

						<div class="caption">
							<h1>Crafted and designed with <span class="new">simplicity</span></h1>	
						</div>	
					</li>
			</ul>
			
			
			
		</div>
		<!--End main slider-->
	</div>
	<!--End  slider-->
	
	
	<!--About section-->
	<section id="about" class="offset section">
		
				
				<!--Inner content-->
				<div class="innerContent bBottom bottom2">
					
				<!--Container-->
				<div class="container clearfix">
					
					<div class="sixteen columns">
					<h1 class="titleBig">About Us</h1>
					<p class="intro"><span class="black"><?php echo $company_name; ?></span> is a visual and interactive communication agency specialized in internet industry,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						 Duis aute irure dolor in reprehenderit in voluptate velit ut et voluptates repudiandae sint et molestiae non recusandae.</p>
						
						
						<div class="ctl">
							<a class="regButton" href="#portfolio"><i class="icon-picture"></i>our portfolio</a>
						</div>	
					</div>
				</div>
				<!--End container-->
				
				</div>
				<!--End inner content-->
				
				
				
					<!--Inner content-->
					<div class="innerContent bBottom bottom2">

					<!--Container-->
					<div class="container clearfix">

						<div class="sixteen columns">
							<h2 class="titleSmall">Our Team</h2>	
						</div>
						
						<div class="one-third column team">
							<img src="/assets/images/t1.jpg" alt="">
							<h2>Carl Doe<br><span>founder</span></h2>
							
							<ul class="tSocials">
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-gplus"></i></a></li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
							</ul>
							
						</div>
						
						
							<div class="one-third column team">
								<img src="/assets/images/t2.jpg" alt="">
								<h2>John Doe<br><span>designer</span></h2>

								<ul class="tSocials">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-gplus"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
								</ul>

							</div>
							
							
							
								<div class="one-third column team">
									<img src="/assets/images/t3.jpg" alt="">
									<h2>Jenny Doe<br><span>developer</span></h2>

									<ul class="tSocials">
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-vimeo"></i></a></li>
										<li><a href="#"><i class="icon-twitter"></i></a></li>
									</ul>

								</div>
						
						
					</div>
					<!--End container-->

					</div>
					<!--End inner content-->
					
					
						<!--Inner content-->
						<div class="innerContent">

						<!--Container-->
						<div class="container clearfix">

							<div class="sixteen columns">
								<h2 class="titleSmall">Our Skills</h2>	
							</div>
							
							
								<div class="nine columns skill">
									<h1>You have a project in your mind ? </h1>
									<h2>Or simply you want to say hello ?</h2>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
										 praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
										 excepturi sint occaecati cupiditate non provident,
										 similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
										 </p>
									<a class="regButton" href="#contact"><i class="icon-mail"></i>contact us</a>
								</div>
								
								
								
								
									<div class="seven columns ">
										
										<div class="skillHolder ">
										<!--Skill-->
										<div class="skillBar">            
										     <div class="skillbarHolder">
										      <div class="skillbarTitle">Web Design</div>
										      <div class="percentage percent90"><span>90%</span></div>    
										      </div>              
										</div>
										<!--End skill-->
										
										
											<!--Skill-->
											<div class="skillBar">            
											     <div class="skillbarHolder">
											      <div class="skillbarTitle">Internet Marketing</div>
											      <div class="percentage percent50"><span>50%</span></div>    
											      </div>              
											</div>
											<!--End skill-->
											

										<!--Skill-->
										<div class="skillBar">            
										     <div class="skillbarHolder">
										      <div class="skillbarTitle">Graphic design</div>
										      <div class="percentage percent95"><span>95%</span></div>    
										      </div>              
										</div>
										<!--End skill-->
										

										<!--Skill-->
										<div class="skillBar">            
										     <div class="skillbarHolder">
										      <div class="skillbarTitle">Javascript</div>
										      <div class="percentage percent70"><span>70%</span></div>    
										      </div>              
										</div>
										<!--End skill-->
										
										
											<!--Skill-->
											<div class="skillBar">            
											     <div class="skillbarHolder">
											      <div class="skillbarTitle">HTML &amp; CSS</div>
											      <div class="percentage percent90"><span>90%</span></div>    
											      </div>              
											</div>
											<!--End skill-->
										
										
										
										<!--Skill-->
										<div class="skillBar">            
										     <div class="skillbarHolder">
										      <div class="skillbarTitle">SEO</div>
										      <div class="percentage percent60"><span>60%</span></div>    
										      </div>              
										</div>
										<!--End skill-->

									
										
										
										</div>
									</div>
							
						</div>
						<!--End container-->

						</div>
						<!--End inner content-->
					
					
	</section>
	<!--End about section-->
	
	
		<!--Facts section-->
		
		<section id="facts" class="factsContainer">

					<!--Overlay-->
					<div class="overlay">
						
						
							<!--Container-->
							<div class="container clearfix">
								
								<div class="sixteen columns">
									
									
							<!--Facts slider-->
									<div class="factSlider clearfix flexslider">

										
										<ul class="slides">
											<li class="timer" data-perc="1300">
											<i class="icon-thumbs-up icoF"></i>
											<span class="fc">FaceBook Likes</span>
											<span class="count">1300</span>
											</li>
											
											<li class="timer" data-perc="100">
											<i class="icon-rocket icoF"></i>
											<span class="fc">Projects Achieved</span>
											<span class="count">100</span>
											
											</li>
											
											<li class="timer" data-perc="60">
											<i class="icon-briefcase icoF"></i>
											<span class="fc">Trusted Clients</span>
											<span class="count">120</span>
											
											</li>
											
											<li class="last timer" data-perc="20">
											<i class="icon-trophy icoF"></i>
											<span class="fc">Awards Won</span>
											<span class="count">100</span>
											
											</li>
											
										</ul>	

									</div>

							<!--End fact slider-->
									
										
								</div>
								
								
								</div>
								<!--End container-->

					</div>
					<!--End overlay-->
					

					</section>
					<!--End facts section-->
					
					
					
					<!--Services section-->
					<section id="services" class="offset section">


								<!--Inner content-->
								<div class="innerContent ">

								<!--Container-->
								<div class="container clearfix">
												
										<div class="sixteen columns">
										<h1 class="titleBig">our services</h1>
										</div>
										
								
							<!--Service-->	
							<div class="one-third column service bottom3">
								<h3><i class="icon-cloud"></i>Web Design</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
										 voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
							</div>
							<!--End service-->
							
							<!--Service-->	
							<div class="one-third column service bottom3">
								<h3><i class="icon-mobile"></i>Mobile Application</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
										 voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
							</div>
							<!--End service-->
							
							<!--Service-->	
							<div class="one-third column service bottom3">
								<h3><i class=" icon-palette"></i>Graphic Design</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
										 voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
							</div>
							<!--End service-->

								
							<!--Service-->	
							<div class="one-third column service bottom3">
								<h3><i class="icon-megaphone"></i>Branding</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
										 voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
							</div>
							<!--End service-->
							
							<!--Service-->	
							<div class="one-third column service bottom3">
								<h3><i class="icon-paper-plane"></i>Social Media</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
										 voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
							</div>
							<!--End service-->
							
							<!--Service-->	
							<div class="one-third column service bottom3">
								<h3><i class="icon-bell"></i>Motion Graphic</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
										 voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
							</div>
							<!--End service-->
		
								</div>
								<!--End container-->

								</div>
								<!--End inner content-->
	
					</section>
					<!--End facts section-->
					
					
					
					
					<!--Testimonials and client section-->

					<section id="testiCli" class="testiCliContainer">

								<!--Overlay-->
								<div class="overlay">


										<!--Container-->
										<div class="container clearfix">

											<div class="sixteen columns">


										<!--Testimonials slider-->
												<div class="testiSlider clearfix flexslider">


													<ul class="slides">
													<li><blockquote>Being the richest man in the cemetery doesn't matter to me.
														Going to bed at night saying we've done something wonderful... that's what matters to me</blockquote>
														<h3 class="testiProfile">Steve Jobs <span>&#8213; Founder</span></h3> </li>
														<li><blockquote>Being the richest man in the cemetery doesn't matter to me.
															Going to bed at night saying we've done something wonderful... that's what matters to me </blockquote>
															<h3 class="testiProfile">Steve Jobs <span>&#8213; Founder </span></h3></li>	
														
						
													</ul>	

														</div>
												<!--End testimonials slider-->
													</div>

													</div>
													<!--End container-->
													
										
										<div class="clientHolder">
											
												<!--Container-->
												<div class="container clearfix">
													
													<div class="one-third column cIntro">
													<h2>Our Cient</h2>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
														 deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati  et.  </p>	
													</div>
													
													<div class="two-thirds column">
														
									<!--Clients slider-->
										
									<div class="clientSlider clearfix flexslider">


										<ul class="slides">
										<li><a href="#"><i class="icon-google-circles"></i></a></li>
										<li><a href="#"><i class="icon-renren"></i></a></li>
										<li><a href="#"><i class="icon-sina-weibo"></i></a></li>
										<li><a href="#"><i class="icon-evernote"></i></a></li>
										<li><a href="#"><i class="icon-dropbox"></i></a></li>
										<li><a href="#"><i class="icon-google-circles"></i></a></li>
										<li><a href="#"><i class="icon-dropbox"></i></a></li>
										<li><a href="#"><i class="icon-sina-weibo"></i></a></li>
										<li><a href="#"><i class="icon-evernote"></i></a></li>
										<li><a href="#"><i class="icon-stumbleupon"></i></a></li>	


										</ul>	

										</div>
											
											<!--End clients slider-->
														
													</div>
													
													
													</div>
													<!--End container-->
										</div>
										

										</div>
										<!--End overlay-->


										</section>
										<!--End testimonials and client section-->
										
										
										
							<!--Portfolio section-->
							<section id="portfolio" class="offset section">


										<!--Inner content-->
										<div class="innerContent bBottom">

										<!--Container-->
										<div class="container clearfix">
											
											
										
											<div class="sixteen columns">
											<h1 class="titleBig">portfolio</h1>
											</div>
											
											
												<!--Container-->
											<div class="container clearfix">
											<div class="two-thirds column bottom4 item">
												<a href="/project/">
													<div class="desc">
													<h3 class="projDesc">Project Name <span>&#8213; external &#8213;</span></h3>
														
													</div>
													<img src="/assets/images/portfolioImages/w1.jpg" alt="">
												</a>
												
												
												
													
											</div>
												
												
											
											<div class="one-third column  item bottom4">
												<a href="/assets/images/portfolioImages/wb3.jpg" class="folio">
													<div class="desc">
													<h3 class="projDesc">Project Name <span>&#8213; logo identity &#8213;</span></h3>
													</div>
													<img src="/assets/images/portfolioImages/w3.jpg" alt="">
												</a>
												
											</div>
											
											</div>
											<!--End container-->
											
											
											<!--Container-->
											<div class="container clearfix">
													
											<div class="one-third column  item bottom4">
												<a href="/assets/images/portfolioImages/wb2.jpg" class="folio">
													<div class="desc">
													<h3 class="projDesc">Project Name <span>&#8213; graphic design &#8213;</span></h3>
													</div>
													<img src="/assets/images/portfolioImages/w2.jpg" alt="">
												</a>
												
											</div>
												
											<div class="one-third column  item bottom4">
												<a href="/project/">
													<div class="desc">
													<h3 class="projDesc">Project Name <span>&#8213; external &#8213;</span></h3>
													</div>
													<img src="/assets/images/portfolioImages/w4.jpg" alt="">
												</a>
												
											</div>
														
											<div class="one-third column  item bottom4">
												<a href="/assets/images/portfolioImages/wb5.jpg" class="folio">
													<div class="desc">
													<h3 class="projDesc">Project Name <span>&#8213; Motion &#8213;</span></h3>
													</div>
														<img src="/assets/images/portfolioImages/w5.jpg" alt="">
												</a>
											
											</div>
											</div>
											<!--End container-->
											
											
											<!--Container-->
											<div class="container clearfix">
												
											<div class="one-third column  bottom5 item">
												<a href="/assets/images/portfolioImages/w6.jpg" class="folio">
													<div class="desc">
													<h3 class="projDesc">Project Name <span>&#8213; website &#8213;</span></h3>
													</div>
													<img src="/assets/images/portfolioImages/w6.jpg" alt="">
												</a>
												
											</div>

											<div class="two-thirds column  bottom5 item">
													<a href="/assets/images/portfolioImages/w7.jpg" class="folio">
														<div class="desc">
														<h3 class="projDesc">Project Name <span>&#8213; branding &#8213;</span></h3>
														</div>
															<img src="/assets/images/portfolioImages/w7.jpg" alt="">
													</a>
											

											</div>
											</div>
											<!--End container-->
											
											</div>
											<!--End container-->
											
					
										</div>
										<!--End inner content-->
					
					</section>
					<!--End portfolio section-->
					
					
					
										
							<!--Contact section-->
							<section id="contact" class="offset section">


										<!--Inner content-->
										<div class="innerContent">

										<!--Container-->
										<div class="container clearfix">

											<div class="sixteen columns">
											<h1 class="titleBig">contact us</h1>
											</div>
											
											<div class="one-third column info">
												<h2>Office Work Hours</h2>
												<p>Our support services are available <br>10 Hours a day : <?php echo $brand_phone; ?></p>
												<ul class="workHours">
													<li>Monday - Friday : <span>09am - 18pm</span></li>
													<li>Saturday : <span>09am - 1pm</span> </li>
													<li>Sunday : <span>closed</span></li>
												</ul>
											</div>
											
												<div class="two-thirds column contactForm">
													<h2>Get In Touch With Us</h2>
													<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
														 Duis aute irure dolor in reprehenderit in voluptate velit ut et voluptates repudiandae
														 sint et molestiae non recusandae.</p>
														
													<div class="cForm">
													<form method="post" action="send.php">


														<p>
														<label for="name">Name <span class="required">*</span></label>
												        <input type="text" name="name" id="name">
														</p>

														<p>
														<label for="email">Email <span class="required">*</span></label>
												        <input type="text" name="email" id="email">
														</p>


															<p>
															<label for="subject">Subject</label>
													        <input type="text" name="subject" id="subject">
															</p>




															<p>
															<label for="subject">Message <span class="required">*</span></label>
												 <textarea name="message" id="message" cols="45" rows="10"></textarea>
												</p>
												        <div id="submit" class="regButton"><i class="icon-mail"></i>Send message</div>
												      </form>
													<div id="success"><h2>Your message has been sent. Thank you!</h2></div>
													<div id="error"><h2>Sorry your message can not be sent.</h2></div>


												</div>			
														
											
												</div>
											
											
											
					
												</div>
												<!--End container-->


											</div>
											<!--End inner content-->

											</section>
												
												<!--End contact section-->
												
								
								<!--Footer-->				
									<footer class="footer  offset">
										
										<!--Top footer-->
										<div class="topFooter">
											<!--Container-->
											<div class="container clearfix">

												<div class="four columns widget">
												<h2>Address</h2>
													<p><?php echo $company_name; ?><br>
                                                        <?php echo $brand_address; ?> <?php echo $zip_code ?> <br>
                                                        <?php echo $brand_country ?></p>
												</div>
												
												
													<div class="four columns widget">
													<h2>Navigation</h2>
														<ul>
                                                            <li><a href="#about">About us</a></li>
                                                            <li><a href="#services">Services</a></li>
                                                            <li><a href="#portfolio">Portfolio</a></li>
                                                            <li><a href="#contact">Contact</a></li>
														    <li><a href="/privacy/">Privacy Policy</a>
                                                            <li><a href="/terms/">Terms and Conditions</a>
                                                        </ul>
													</div>
													
													
														<div class="four columns widget">
														<h2>Call Us</h2>
															
															
															
															<ul>
															<li><?php echo $brand_phone; ?></li>
															</ul>
														</div>
														
														
														<div class="four columns widget">
														<h2>Our Email</h2>
															
															
															<ul>
															<li><?php echo $brand_email; ?></li>
															</ul>
					
														</div>
										
												</div>
												<!--End container-->
										</div>
										<!--End top footer-->
										
										<!--Bottom footer-->
										<div class="bottomFooter">
												<!--Container-->
												<div class="container clearfix">

													<div class="eight columns">
												
														<p>© <?php echo $current_year; ?> <span class="bLogo"><?php echo $company_name; ?></span> All Rights Reserved.</p>
													</div>


														<div class="eight columns ">
													<div class="right"><p>Made With <i class="icon-heart"></i> In My Home Sweet Home.</p></div>
														
														</div>
													
										</div>
											<!--End container-->
										</div>
											<!--End bottom footer-->
										
										
									</footer>
					
						<!--End footer-->
						
										
				
								
</div>
<!--ENd wrapper-->

	
<!--Javascript-->
<script src="/assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/assets/js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="/assets/js/waypoints.js" type="text/javascript"></script>
<script src="/assets/js/jquery.parallax-1.1.3.js"></script>
<script src="/assets/js/modernizr.custom.js"></script>
<script src="/assets/js/jquery.ui.totop.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="/assets/js/jquery.appear.min.js"></script>
<script src="/assets/js/jquery.timer.js"></script>
<script src="/assets/js/script.js" type="text/javascript"></script>
    <script src="/assets/jquery.cookieBar.js"></script>


    <script>

        $.cookieBar({
            infoLink: '/cookies/',
            style: 'bottom',
            wrapper: 'body'
        });
    </script>

</body>
</html>