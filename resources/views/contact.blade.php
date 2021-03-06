<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Jamuna</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/font-awesome.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{asset('assets/plugins/prettyPhoto.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/plugins/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl/owl.theme.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('assets/plugins/flex-slider/flexslider.css')}}">
    <!-- Slick-slider -->
    <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{asset('assets/css/presets/preset2.css')}}" media="screen" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

    <!-- fonts -->
    <!-- <link rel="stylesheet" href="fonts/jaapokki/style.css"> -->

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="img/favicon/favicon-32x32.html" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.html">
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.html">

    <style>
        input[type=checkbox],
        input[type=radio] {
            margin-left: 4px;
        }

        label span {
            color: red;
        }

        .navbar-brand img {
            width: 90px;
        }

        .fixed-top {
            position: absolute;
            top: -5px;
        }
    </style>

</head>

<body>

    <!-- Style switcher start -->
    <!-- <div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn btn-outline-white"></button>
		<button id="preset2" class="btn btn-sm btn btn-outline-white"></button>
		<button id="preset3" class="btn btn-sm btn btn-outline-white"></button>
		<button id="preset4" class="btn btn-sm btn btn-outline-white"></button>
		<button id="preset5" class="btn btn-sm btn btn-outline-white"></button>
		<button id="preset6" class="btn btn-sm btn btn-outline-white"></button>
		<br /><br />
		<a class="btn btn-outline-white close-styler float-right">Close X</a>
	</div> -->
    <!-- Style switcher end -->

    <div class="body-inner">

        <!-- Header start -->
<!-- Header start -->
        <header id="header" class="fixed-top header" role="banner">
            <!-- <a class="navbar-brand navbar-bg" href="index.html"><img class="img-fluid float-right" src="images/logo.png')}}" alt="logo"></a> -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <a class="navbar-brand navbar-bg" href="/"><img class="img-fluid float-right" src="{{asset('assets/images/Jamuna logo.png')}}" alt="logo"></a>
                            <button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fa fa-bars"></span>
                            </button>

                            <div class="collapse navbar-collapse text-center" id="navigation">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle" href="{{ url('/') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                        <!-- <div class="dropdown-menu">
									<a class="dropdown-item" href="index-2.html">Homepage 1</a>
									<a class="dropdown-item" href="index-3.html">Homepage 2</a>
									<a class="dropdown-item" href="index-4.html">Homepage 3</a>
									<a class="dropdown-item" href="index-5.html">Homepage 4</a>
								</div> -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Company
                                        </a>
                                        <!-- <div class="dropdown-menu">
									<a class="dropdown-item" href="about.html">About Us</a>
									<a class="dropdown-item" href="service.html">Services</a>
									<a class="dropdown-item" href="career.html">Career</a>
									<a class="dropdown-item" href="testimonial.html">Testimonials</a>
									<a class="dropdown-item" href="faq.html">Faq</a>
								</div> -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Portfolio
                                        </a>
                                        <!-- <div class="dropdown-menu">
									<a class="dropdown-item" href="portfolio-classic.html">Portfolio Classic</a>
									<a class="dropdown-item" href="portfolio-static.html">Portfolio Static</a>
									<a class="dropdown-item" href="portfolio-item.html">Portfolio Single</a>
								</div> -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <!-- <div class="dropdown-menu">
									<a class="dropdown-item" href="blog-rightside.html">Blog with Sidebar</a>
									<a class="dropdown-item" href="blog-item.html">Blog Single</a>
								</div> -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Features
                                        </a>
                                        <!-- <div class="dropdown-menu">
									<a class="dropdown-item" href="typography.html">Typography</a>
									<a class="dropdown-item" href="elements.html">Elements</a>
								</div> -->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/career">Career</a></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">Contact</a></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>        <!--/ Header end -->

        <div id="banner-area">
            <img src="{{asset('assets/images/banner/banner1.jpg')}}" alt="" />
            <div class="parallax-overlay"></div>
            <!-- Subpage title start -->
            <div class="banner-title-content">
                <div class="text-center">
                    <h2>Welcome to Jamuna Star Save Guard Services LTD.</h2>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white" aria-current="page">Career</li>
                        </ol>
                    </nav> -->
                </div>
            </div><!-- Subpage title end -->
        </div><!-- Banner area end -->

        <!-- Main container start -->
        <section id="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 500px;">
                        <!-- <p>For Apply your post please click on career</p> -->
                        <!-- <h3 class="title-border">For Apply to  your post please click on <a href="/career">Career</a></h3> -->
                        <div class="contact-info">
                            <h3>Contact Details</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna. Pellentesque justo
                                ante</p> -->
                            <br>
                            <p><i class="fa fa-home info"></i>Road #20 House #45 (1st Floor), DOHS Mohakhali Dhaka.</p>
                            <p><i class="fa fa-phone info"></i> <a href="tel:+8801950-777281">01950-777281,01742061107</a> </p>
                            <p><i class="fa fa-envelope-o info"></i> jamunastar2008@gmail.com</p>
                            <p><i class="fa fa-globe info"></i> www.jssgservices.com</p>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni
					dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.
				</p> -->

                        <!-- <div class="accordion" id="accordion">
					<div class="card border rounded mb-2">
						<div class="card-header p-0">
							<a class="h4 mb-0 font-weight-bold text-uppercase d-block p-2 pl-5" data-toggle="collapse" data-target="#collapseOne"
								aria-expanded="true" aria-controls="collapseOne">Job Requirements</a>
						</div>
						<div id="collapseOne" class="collapse show" data-parent="#accordion">
							<div class="card-body">
								<ul class="list-unstyled arrow">
									<li>B.Sc. from any reputed university</li>
									<li>MBA in Marketing from any reputed university is very much desired</li>
									<li>Two (02) years of experience in Software Company is an advantage.</li>
									<li>Experience as Business Analyst will be an added advantage</li>
									<li>Manage and execute lead generation activities.</li>
									<li>Help building marketing strategy, tool and approach by thorough research</li>
								</ul>
							</div>
						</div>
					</div>
					/ Panel 1 end

					<div class="card border rounded mb-2">
						<div class="card-header p-0">
							<a class="h4 collapsed mb-0 font-weight-bold text-uppercase d-block p-2 pl-5" data-toggle="collapse" data-target="#collapseTwo"
								aria-expanded="true" aria-controls="collapseTwo">
								Job Responsibilities</a>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordion">
							<div class="card-body">
								<ul class="list-unstyled arrow">
									<li>Global Business Development &amp; Strategic Account Management</li>
									<li>Marketing Research</li>
									<li>Marketing Collaterals development</li>
									<li>Business Analysis</li>
									<li>Manage and execute lead generation activities.</li>
									<li>Help building marketing strategy, tool and approach by thorough research</li>
								</ul>
							</div>
						</div>
					</div>
					/ Panel 2 end


					<div class="card border rounded mb-2">
						<div class="card-header p-0">
							<a class="h4 collapsed mb-0 font-weight-bold text-uppercase d-block p-2 pl-5" data-toggle="collapse" data-target="#collapseThree"
								aria-expanded="true" aria-controls="collapseThree"> What???s in it for you?</a>
						</div>
						<div id="collapseThree" class="collapse" data-parent="#accordion">
							<div class="card-body">
								<ul class="list-unstyled arrow">
									<li>Very Competitive Salary and Long Term Benefits with Excellent Career Opportunity in a Focused
										&amp; Stable organization.</li>
									<li>Training on new technology.</li>
									<li>Overseas Tour with Opportunity to work with Global Companies.</li>
									<li>Most importantly a friendly work environment with opportunity to learn from a number of highly
										skilled mentors.</li>
								</ul>
							</div>
						</div>
					</div>
					/ Panel 3 end
					<div class="gap-20"></div>
					<p><a href="#" class="btn btn-outline-primary"><span class="mr-2">Apply Now</span> <i class="fa fa-long-arrow-right"></i></a></p>
				</div> -->
                        <!--/ Accordion end -->

                        <!--/ 1st career end -->
                        <!-- <div class="gap-40"></div> -->
                        <!-- <h3 class="title-border">Assistent Manager (P&amp;L)</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni
					dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.
				</p> -->

                        <!-- <div class="accordion" id="accordion2">
					<div class="card border rounded mb-2">
						<div class="card-header p-0">
							<a class="h4 collapsed mb-0 font-weight-bold text-uppercase d-block p-2 pl-5" data-toggle="collapse" data-target="#collapseA"
								aria-expanded="true" aria-controls="collapseA">Job Requirements</a>
						</div>
						<div id="collapseA" class="collapse" data-parent="#accordion2">
							<div class="card-body">
								<ul class="list-unstyled arrow">
									<li>B.Sc. from any reputed university</li>
									<li>MBA in Marketing from any reputed university is very much desired</li>
									<li>Two (02) years of experience in Software Company is an advantage.</li>
									<li>Experience as Business Analyst will be an added advantage</li>
									<li>Manage and execute lead generation activities.</li>
									<li>Help building marketing strategy, tool and approach by thorough research</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card border rounded mb-2">
						<div class="card-header p-0">
							<a class="h4 collapsed mb-0 font-weight-bold text-uppercase d-block p-2 pl-5" data-toggle="collapse" data-target="#collapseB"
								aria-expanded="true" aria-controls="collapseB">
								Job Responsibilities</a>
						</div>
						<div id="collapseB" class="collapse" data-parent="#accordion2">
							<div class="card-body">
								<ul class="list-unstyled arrow">
									<li>Global Business Development &amp; Strategic Account Management</li>
									<li>Marketing Research</li>
									<li>Marketing Collaterals development</li>
									<li>Business Analysis</li>
									<li>Manage and execute lead generation activities.</li>
									<li>Help building marketing strategy, tool and approach by thorough research</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="card border rounded mb-2">
						<div class="card-header p-0">
							<a class="h4 collapsed mb-0 font-weight-bold text-uppercase d-block p-2 pl-5" data-toggle="collapse" data-target="#collapseC"
								aria-expanded="true" aria-controls="collapseC">
								What???s in it for you?</a>
						</div>
						<div id="collapseC" class="collapse" data-parent="#accordion2">
							<div class="card-body">
								<ul class="list-unstyled arrow">
									<li>Very Competitive Salary and Long Term Benefits with Excellent Career Opportunity in a Focused
										&amp; Stable organization.</li>
									<li>Training on new technology.</li>
									<li>Overseas Tour with Opportunity to work with Global Companies.</li>
									<li>Most importantly a friendly work environment with opportunity to learn from a number of highly
										skilled mentors.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="gap-20"></div>
					<p><a href="#" class="btn btn-outline-primary"><span class="mr-2">Apply Now</span><i class="fa fa-long-arrow-right"></i></a></p>
				</div> -->
                        <!--/ Accordion end -->
                    </div>
                    <!--/ Content col end -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <!-- <div class="sidebar sidebar-right">
					category start
					<div class="widget widget-categories">
						<h3>How to Apply</h3>
						<p>Send your cv, relevant work experience and anything else that will make you stand out to
							career@bizcraft.com</p>
					</div>category end

					tags start
					<div class="widget widget-tags">
						<h3>Why Us</h3>
						<p>We are an awward winning company. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus
							voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae
							autem libero ullam omnis cupiditate quam.</p>
					</div>tags end
				</div> -->
                        <!--/ Sidebar end -->
                    </div>
                    <!--/ Sidebar col end -->
                </div>
                <!--/ row end -->
            </div>
            <!--/ container end -->
        </section>
        <!--/ Main container end -->

        <!-- <section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="d-flex justify-content-between flex-column flex-lg-row align-items-center align-items-lg-start">

				<h3 class="mb-3 mb-lg-0">Join with BizCraft and Give Your Website a Brand New Look</h3>
				<a href="#" class="float-right btn btn btn-outline-white white">Purchase Now</a>
				</div>
			</div>
		</div>
	</div>
</section> -->

        <!-- Footer start -->
        < <!-- Copyright start -->
            <section id="copyright" class="copyright angle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul> -->
                        </div>
                    </div>
                    <!--/ Row end -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="copyright-info">
                                &copy; Copyright 2021
                                <!-- <span>Designed by <a
	              href="https://themefisher.com/">Themefisher.com</a></span> -->
                            </div>
                        </div>
                    </div>
                    <!--/ Row end -->
                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
                        <button class="btn btn btn-outline-white" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
                    </div>
                </div>
                <!--/ Container end -->
            </section>
            <!--/ Copyright end -->

    </div><!-- Body inner end -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Style Switcher -->
    <script type="text/javascript" src="{{asset('assets/plugins/style-switcher.js')}}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('assets/plugins/owl/owl.carousel.js')}}"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="{{asset('assets/plugins/jquery.prettyPhoto.js')}}"></script>
    <!-- Bxslider -->
    <script type="text/javascript" src="{{asset('assets/plugins/flex-slider/jquery.flexslider.js')}}"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="{{asset('assets/plugins/isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/ini.isotope.js')}}"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="{{asset('assets/plugins/wow.min.js')}}"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="{{asset('assets/plugins/jquery.easing.1.3.js')}}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{asset('assets/plugins/jquery.counterup.min.js')}}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{asset('assets/plugins/waypoints.min.js')}}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&amp;libraries=places"></script>
    <script src="{{asset('assets/plugins/google-map/gmap.js')}}"></script>

    <!-- Main Script -->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body>


<!-- Mirrored from demo.themefisher.com/bizcraft/career.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Sep 2021 17:25:24 GMT -->

</html>