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
                <h1 class="wow fadeInDown" data-wow-delay="0.1s"><span><?php echo $brand_name; ?></span> Cookies Policy</h1>

                <p>We use cookies to help improve your experience of <?php echo $brand_name; ?></p>
                <p>This cookie policy is part of <?php echo $brand_name; ?>'s privacy policy and covers the use of cookies between your device and our site. We also provide basic information on third-party services we may use, who may also use cookies as part of their service, though they are not covered by our policy.</p>
                <h2>What is a cookie?</h2>
                <p>A cookie is a small piece of data that a website store on your device when you visit, typically containing information about the website itself, a unique identifier that allows the site to recognize your web browser when you return, additional data that serves the purpose of the cookie, and the lifespan of the cookie itself. Cookies are used to enable certain features (eg. logging in), to track site usage (eg. analytics), to store your user settings (eg. timezone, notification preferences), and to personalize your content (eg. advertising, language).</p>
                <h2>Only necessary cookies used on this website</h2>
                <p>This website uses only necessary cookies, i.e. cookies needed to ensure our website&acute;s functionality and to provide the services you request. These cookies cannot be disabled. These cookie does not gather any information about you that could be used for marketing purposes and does not remember where you have been on the internet. There are different types of cookies, but on this website, we only use a first-party cookie that is set directly by. This cookie is a session cookie, which is stored on your device during your browser session and expires at the end of your browser session (normally when a user exits a browser).</p>
                <h2>If you block cookies</h2>
                <p>If you disable all cookies in your browser settings, the functionality and performance of our website may be impaired as certain features are dependent on cookies. Blocking cookies can therefore cause the website&rsquo;s services to not work properly and some essential functionality may not work <?php echo $brand_name; ?></p>
                <p>takes your privacy seriously. Please read our Privacy Notice for more information about your data subject&rsquo;s rights and how we process personal data. You are always welcome to contact us if you have any questions or concerns. Our Cookie policy might be subject to changes in the future.</p>
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
