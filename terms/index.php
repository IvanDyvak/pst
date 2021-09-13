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

    <link href="../assets/css/font.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/fontello.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/base.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/skeleton.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet"  />
    <link href="../assets/css/flexslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/jquery.cookieBar.css">




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
                        <a href="/"><img src="../assets/images/logo.png" alt="logo"></a>
                    </div>
                    <!--End logo-->
                </div>


                <div class="two-thirds column">
                    <!--Navigation-->
                    <nav id="mainNav" >
                        <a href="#" class="mobileBtn"><i class="icon-menu"></i></a>

                        <ul>
                            <li><a href="/#about">About us</a></li>
                            <li><a href="/#services">Services</a></li>
                            <li><a href="/#portfolio">Portfolio</a></li>
                            <li><a href="/#contact">Contact</a></li>

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

    <section id="projectDesc" class="bBottom" style="margin-top: 115px;">


        <!--Container-->
        <div class="container clearfix">


            <div class="sixteen columns bottom3">
                <h1 class="wow fadeInDown" data-wow-delay="0.1s"><span><?php echo $brand_name; ?></span> Terms and Conditions</h1>
                <p>These are the terms and conditions (Terms) which govern your use of (1) the website and any of the '<?php echo $brand_name; ?>' branded microsites, and (2) any of the apps available for use on a Mobile Device (Site). </p>

                <p> For the purpose of these Terms “Mobile Device” includes a Smartphone or other mobile or handheld device (such as a tablet) with an open operating system capable of exchanging data via 3G, 4G or wirelessly over a computer network (for example Apple OS iPhones, iPads, Kindle, Kindle Fire, Android OS phones tablets and Symbian OS phones and tablet devices). </p>

                <p> These Terms apply regardless of whatever user device you are using (including desktop, laptop, or mobile web browser, digital television, mobile phones, automobile-based personal computers, handheld digital devices, and any other Mobile Device or technology whether now known or developed in the future).</p>

                <p> You will be deemed to have agreed to be bound by these Terms when you use, access, or browse the Site, register your details with us or subscribe for email or online services or send us an email. </p>

                <p> For the purposes of these Terms: """"Content"""" includes all or part of any text, graphics, layout, logos, images, audio material, films or other moving images, product details and/or software published or otherwise available on the Site from time to time (including, anything made available for download); “including” and its derivations mean “including, without limitation”; """"material"""" includes all or part of any text, graphics, layout, logos, images, audio material, films or other moving images; and """"Trade Marks"""" means the trademarks, logos and service marks (whether or not registered) displayed on the Site.</p>

                <p><strong>Changes to these Terms</strong></p>

                <p>We may change these Terms from time to time. Please check these Terms regularly as any changes are effective immediately upon posting to the Site. Your continued use of the Site after posting will be deemed acceptance of the changes.</p>

                <p><strong>About us and our business</strong></p>

                <p><strong>Registration</strong></p>

                <p>Access to our email services and to some areas of the Site is restricted to users who have registered their details with us. You must not use a false name or email or provide any false information nor impersonate another person when registering for use of the Site and our email services. If you have a password for registration, you shall not share or disclose it to any third party, nor allow any third party to use your password to gain access to the areas and services for registered users. We may refuse or remove or suspend your registration at any time.</p>

                <p><strong>Intellectual Property</strong></p>

                <p> We are the owner or the licensee of all intellectual property rights in the Site the Content and the Trade Marks. Subject to these Terms, we grant you a limited, temporary, revocable, and non-exclusive license to access, browse and use the Site (including the Content and Trade Marks) in accordance with paragraph 6 below. </p>

                <p><strong> Access and use of the Site</strong></p>

                <p> You may use the Site for personal non-commercial use only. You may only download and print extracts of the Content for your own personal non-commercial use. </p>

                <p>You may not:</p>

                <p>(1) download or print any Content or extracts in a systematic or regular manner or otherwise so as to create a database in electronic or paper form comprising all or part of the Content from the Site; nor</p>

                <p>(2) reproduce, republish, modify, archive, distribute, store, archive, or commercially exploit the Content without our prior written consent; nor</p>

                <p> (3) modify or adapt or create derivative works of the Content; nor</p>

                <p> (4) utilize links to this website received as part of a paid-for media monitoring service; nor</p>

                <p>(5) systematically forward links to this website within a business or outside a business for business purposes; nor</p>

                <p>(6) copy or extract data from this website by means of robots, spiders, crawlers or other automatic devices or by any manual process used to systematically extract or copy web content.</p>

                <p> Any such use of this website or the content is prohibited without an appropriate license. <br>

                    If you see something which you reasonably believe breaches these Terms or our House Rules, please use the Report Abuse facility. If there is no facility available, please contact our company <?php echo $company_name; ?> on <?php echo $brand_email; ?> or by phone <?php echo $brand_phone; ?>. Or visit us at <?php echo $brand_address; ?>, <?php echo $zip_code ?>, <?php echo $brand_country ?>.
                    <br>
                    At all times when you are accessing, browsing or using, or registering for use of the Site, you must do so lawfully and legitimately and without infringing or restricting anyone else’s rights or use and enjoyment of the Site. In particular, you must not use the Site in a manner or upload any material or link to any material which is false, fraudulent, inaccurate or misleading, obscene, offensive, defamatory, abusive, or in breach of any third party rights (including intellectual property right).<br>

                    At any time without notice and at our absolute discretion, we may permanently or temporarily terminate, suspend or deny your access to the Site. At any time without notice and at our absolute discretion, we may remove or edit any Content on the Site. To the fullest extent permitted by law, in both cases, none of TMG, its directors, employees, or other representatives has any liability to you whatsoever for any loss or damage arising from such removal or editing or any restriction or hindrance to your use of the Site, email services or password.</p>


            </div>






        </div>
        <!--End container-->
    </section>


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
                        <li><a href="/#about">About us</a></li>
                        <li><a href="/#services">Services</a></li>
                        <li><a href="/#portfolio">Portfolio</a></li>
                        <li><a href="/#contact">Contact</a></li>
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


</div> <!-- Main -->
</div><!-- Wrapper -->


<!-- Jquery and Js Plugins -->
<script src="../assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery-migrate-1.2.1.js"></script>
<script src="../assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../assets/js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="../assets/js/waypoints.js" type="text/javascript"></script>
<script src="../assets/js/jquery.parallax-1.1.3.js"></script>
<script src="../assets/js/modernizr.custom.js"></script>
<script src="../assets/js/jquery.ui.totop.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="../assets/js/jquery.appear.min.js"></script>
<script src="../assets/js/jquery.timer.js"></script>
<script src="../assets/js/script.js" type="text/javascript"></script>
<script src="../assets/jquery.cookieBar.js"></script>
<script>
    // Cookies popup
    $(function() {
        $.cookieBar({
            infoLink: '/cookies_policy/',
            style: 'bottom',
            wrapper: 'body'
        });
    });
</script>
</body>
</html>
