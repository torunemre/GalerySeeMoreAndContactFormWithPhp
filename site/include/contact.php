<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Iletisim</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<div role="main" class="main">
				<div class="container">
                                    

					<div class="row">
                                            <div class="col-md-3"></div>
                                            
                                            <div class="col-md-6">

                                                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                                                            <strong>Success!</strong> Your message has been sent to us.
                                                    </div>

                                                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                                                            <strong>Error!</strong> There was an error sending your message.
                                                            <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                                                    </div>

                                                    <h2 class="mb-sm mt-sm"><strong>Bize Ulaşın</strong></h2>
                                                    
                                                    <form  method="POST" action="iletisim-post.php" >
                                                        <?php if(isset($_GET['success'])):?>
                                                        <div class="alert alert-success">Mesajınız başarıyla iletildi.</div>
                                                        <?php endif ?>
                                                            <div class="row">
                                                                    <div class="form-group">
                                                                            <div class="col-md-6">
                                                                                    <label>Adınız *</label>
                                                                                    <input type="text" value="" data-msg-required="Please enter your name." 
                                                                                           maxlength="100" class="form-control" name="name" id="name" required>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                    <label>Email Adresiniz *</label>
                                                                                    <input type="email" value="" data-msg-required="Please enter your email address." 
                                                                                           data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" 
                                                                                           name="email" id="email" required>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                    <label>Mesaj Konusu</label>
                                                                                    <input type="text" value="" data-msg-required="Please enter the subject." 
                                                                                           maxlength="100" class="form-control" name="subject" id="subject" required>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                    <label>Mesajınız *</label>
                                                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." 
                                                                                              rows="10" class="form-control" name="message" id="message" required></textarea>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                            <input type="submit" value="Gönder" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                                                                    </div>
                                                            </div>
                                                    </form>
                                            </div>
					</div>
				</div>
			</div>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
