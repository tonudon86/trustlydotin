<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Enquiry | Trustly Technology Solutions Pvt. Ltd.">
    <meta name="description" content="Enquiry | Trustly Technology Solutions Pvt. Ltd.">

    <!-- ========== Page Title ========== -->
    <title>Enquiry | Trustly Technology Solutions Pvt. Ltd.</title>
<link rel="canonical" href="https://trustly.co.in/enquire-now.php" />
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="images/brand/favicon.jpg" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>    
    
    <?php require_once('header.php');?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(images/topbg/enquiry.jpg);    background-position: center center;
    background-attachment: unset;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Enquire now</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
                    <div class="col-md-8 contact-form">
                        <h2>Enquire now</h2>
                        <p>There must be no barriers to freedom of inquiry.
                        </p>
                        <form id="contactform" action="sendenquirydetails.php" method="POST" class="contact-form">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="company" name="company" placeholder="Company Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="projectdetails" name="projectdetails" placeholder="Project Details"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="button" onclick="sendcontact()">
                                        Send Enquiry <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-md-4 address">
                        <div class="address-items">
                            <ul class="info">
                                <li>
                                    <h4>Office Location</h4>
                                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                    <span>19/144, M.H.B. Colony, Sarvoday Nagar,<br>Meghwadi, Jogeshwari East,<br>Mumbai - 400060</span>
                                </li>
                                <li>
                                    <h4>Phone</h4>
                                    <div class="icon"><i class="fas fa-phone"></i></div> 
                                    <span>+91 9284352261 <br>+91 7977350294</span>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                    <span>sales@trustly.co.in<br>info@trustly.co.in</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
    <hr>
    
    <?php require_once('footer.php');?>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

    
        <script>
    
     function sendcontact()
{
var flag=1;
var x=document.getElementById("email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if ((atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)){
flag=0;
document.getElementById('email').value="";
document.getElementById('email').style.border="1px #f00 solid";
}else{
document.getElementById('email').style.border="1px solid #ccc";
}
if(flag!=0)
{document.getElementById('contactform').submit();
alert(`thanks for contacting us ${x} `);
}else{alert('Please fill the correct details');}


}
    </script>
    
</body>
    
</html>