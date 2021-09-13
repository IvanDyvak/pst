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
                    <h1 class="wow fadeInDown" data-wow-delay="0.1s"><span><?php echo $brand_name; ?></span> Privacy Policy</h1>
                    <p>This policy sets out how we collects and uses the information that we collect about you when you use our services. This policy also explains the choices that you can make about the way that we use your information.</p>
                    <p><strong>Information we collect and its use</strong></p>
                    <p>We collect the following types of information about you:</p>
                    <p><strong>Information you provide us directly</strong></p>
                    <p>We may ask for certain information such as a username, your first and last name, birthdate, phone number, profession and e-mail address when you register for our website, or if you correspond with us. We may also retain any messages you send through the Service, and may collect information you provide in User Content you post to the Service. We use this information to operate, maintain, and provide to you the features and functionality of the Service. We may also use this information to correspond with you, and to address any issues you raise about the Service.</p>
                    <p><strong>Information we may receive from third parties</strong></p>
                    <p>We may receive information about you from third parties. For example, if you access our websites or Service through a third-party connection or log-in, for example, through Facebook Connect, by “following,” “liking,” adding our page, that third party may pass certain information about your use of our service. This information could include, but is not limited to, the user ID associated with your account (for example, your Facebook UID), an access token necessary to access that service, any information that you have permitted the third party to share with us, and any information you have made public in connection with that service. You should always review, and if necessary, adjust your privacy settings on third-party websites and services before linking or connecting them to our Service. You may also unlink your third party account from the Service by adjusting your settings on the third party service. If you unlink your third party account, we will no longer receive information collected about you in connection with that service.</p>
                    <p><strong>Information we collect from you automatically</strong></p>
                    <p>We may directly collect analytics data, or use third-party analytics tools, to help us measure traffic and usage trends for the Service. These tools collect information sent by your browser or mobile device, including the pages you visit and other information that assists us in improving the Service.</p>
                    <p>To help us improve our service we keep info about how you use our service.</p>
                    <p><strong>Cookies information</strong></p>
                    <p>When you visit the Service, we may send one or more cookies — a small text file containing a string of alphanumeric characters — to your computer that uniquely identifies your browser and lets the website help you log in faster and enhance your navigation through the site. A cookie may also convey information to us about how you use the Service (e.g., the pages you view, the links you click and other actions you take on the Service), and allow us or our business partners to track your usage of the Service over time.</p>
                    <p>You can control or reset your cookies through your web browser, which will allow you to customise your cookie preferences and to refuse all cookies or to indicate when a cookie is being sent. However, some features of the Service may not function properly if the ability to accept cookies is disabled.</p>
                    <p><strong>Device identifiers</strong></p>
                    <p>When you access the Service by or through a mobile device (including but not limited to smart-phones or tablets), we may access, collect, monitor and/or remotely store one or more “device identifiers,” such as a universally unique identifier (“UUID”). Device identifiers are small data files or similar data structures stored on or associated with your mobile device, which uniquely identify your mobile device. A device identifier may be data stored in connection with the device hardware, data stored in connection with the device’s operating system or other software, or data sent to the device by the website. A device identifier may convey information to us about how you browse and use the Service. A device identifier may remain persistently on your device, to help you log in faster and enhance your navigation through the Service. Some features of the Service may not function properly if use or availability of device identifiers is impaired or disabled.</p>
                    <p><strong>Location data</strong></p>
                    <p>When you access the Service by or through a mobile device, we may access, collect, monitor and/or remotely store “location data,” which may include GPS coordinates (e.g. latitude and/or longitude) or similar information regarding the location of your mobile device. Location data may convey to us information about how you browse and use the Service. Some features of the Service, particularly location-based services, may not function properly if use or availability of location data is impaired or disabled.</p>
                    <p><strong>How we use your information</strong></p>
                    <p>We use the information we collect about you for the following purposes:</p>
                    <ul>
                        <li>Providing you with the Service: We use the information that you provide us to provide the Service to you. </li>
                        <li>For data analytics: We use information about you to help us improve our Service and our users’ experience, including by monitoring aggregate metrics such as total number of visitors, traffic, and demographic patterns.</li>
                        <li>Customising the Service for you: We use information you provide us and information about you to make sure that your use of the Service is customised to your needs. </li>
                        <li>To communicate with you about the Service: We use your contact information to get in touch with you and to send communications about critical elements of the Service. </li>
                        <li>Customer happiness: We use information about you, information that you provide to our customer happiness team, and information about your interactions with the Service to resolve technical issues you experience with the Service, and to ensure that we can repair and improve the Service for all of our users.</li>
                        <li>For security measures: We use information about you to monitor activity that we think is suspicious or potentially fraudulent, and to identify violations or this Privacy Policy or our Terms of Service.</li>
                        <li>For matters that we are required to use your information by law: we will use or disclose your information where we reasonably believe that such action is necessary to (a) comply with the law and the reasonable requests of law enforcement; (b) to enforce our Terms of Use or to protect the security or integrity of our Service; and/or (c) to exercise or protect the rights, property, or personal safety of the website, our Users or others.</li></ul>
                    <p><strong>Sharing your information</strong></p>
                    <p>We will not rent or sell your information into third parties outside of the website and its group companies (including any parent, subsidiaries and affiliates) without your consent, except as noted in this section:</p>
                    <p><strong>Who we may share your information with</strong></p>
                    <p>We may share your information with third-party service providers for the purpose of providing the Service to you and to facilitate the website’s interests, as outline above . Those service providers will only be provided with access to your information as is reasonably necessary, and we will require that such third parties comply with this Privacy Policy and any applicable laws.</p>
                    <p><strong>Who you may choose to share your User Content with</strong></p>
                    <p>Any information or content that you voluntarily disclose for posting to the Service, such as User Content, becomes available to the public, as controlled by any applicable privacy settings. Subject to your profile and privacy settings, any User Content that you make public is searchable by other Users. If you remove information that you posted to the Service, copies may remain viewable in cached and archived pages of the Service, or if other Users have copied or saved that information.</p>
                    <p><strong>How we transfer, store and protect your data</strong></p>
                    <p>Your information collected through the Service may be stored and processed in the United States or any other country in which the website or its subsidiaries, affiliates or service providers maintain facilities. We may transfer information that we collect about you, including personal information, to affiliated entities, or to other third parties across borders and from your country or jurisdiction to other countries or jurisdictions around the world. As a result, we may transfer information, including personal information, to a country and jurisdiction that does not have the same data protection laws as your jurisdiction, and you consent to the transfer of information to the U.S. or any other country in which the website or its parent, subsidiaries, affiliates or service providers maintain facilities and the use and disclosure of information about you as described in this Privacy Policy.</p>
                    <p><strong>Keeping your information safe</strong></p>
                    <p>We cares about the security of your information, and uses appropriate safeguards to preserve the integrity and security of all information collected through the Service. To protect your privacy and security, we take reasonable steps (such as requesting a unique password) to verify your identity before granting you access to your account. You are responsible for maintaining the secrecy of your unique password and account information, and for controlling access to your email communications from our website, at all times. </p>
                    <p><strong>How long we keep your User Content</strong></p>
                    <p>Following termination or deactivation of your User account, we may retain your profile information and User Content for a commercially reasonable time, and for as long as we have a valid purpose to do so. In particular, we may retain your information for the purpose of comply with its legal and audit obligations, and for backup and archival purposes.</p>
                    <p><strong>Links to other websites and services</strong></p>
                    <p>We are not responsible for the practices employed by websites or services linked to or from the Service, including the information or content contained therein. Please remember that when you use a link to go from the Service to another website, our Privacy Policy does not apply to third-party websites or services. Your browsing and interaction on any third-party website or service, including those that have a link or advertisement on our website, are subject to that third party’s own rules and policies. In addition, you agree that we are not responsible for and we do not exercise control over any third-parties that you authorize to access your User Content. If you are using a third-party website or service (like Facebook) and you allow such a third-party access to your User Content you do so at your own risk. This Privacy Policy does not apply to information we collect by other means (including offline) or from other sources other than through the Service.</p>
                    <p><strong>How to contact us</strong></p>
                    <p>If you have any questions about this Privacy Policy or the Service, please contact us at <a href="mailto:<?php echo $brand_email; ?>"><?php echo $brand_email; ?></a>.</p>


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
