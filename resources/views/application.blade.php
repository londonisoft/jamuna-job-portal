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

   <link rel="stylesheet" href="https://joinairforce.baf.mil.bd/assets/frontend/sweetalert2/dist/sweetalert2.min.css">
    <script src="https://joinairforce.baf.mil.bd/assets/frontend/sweetalert2/dist/sweetalert2.all.min.js"></script>

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
        </header>
        <!--/ Header end -->

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
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-success bg-success text-light" href="/career">Apply Now</a>
                        </div>
                    </div>
                    
                        @if(Session::get('data'))
                        <!-- <p>For Apply your post please click on career</p> -->
                        <h3 class="title-border">Application Preview</h3>
                         @if ($data = Session::get('data'))
                        <script>
                            Swal.fire(
                              'Success!',
                              'Application successfully submited.',
                              'success'
                            )
                        </script>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <style>
                                          .table.table-sm td, .table.table-sm th {
                                              padding: 0.1rem .1rem;
                                              font-size: 12px;
                                          }
                                    </style>
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="text-center mt-3">
                                                    
                                            <input type="button" class="btn btn-success btn-sm text-center" onclick="printDiv('printableArea')" value="Print" />
                                                </div>
                                                <div class="row mt-3">
                                                    <div id="printableArea" class="col-xs-8 col-sm-8 col-md-8 offset-md-2" style="border: 1px solid gray; padding: 10px">
                                                        <table class="table">
                                                            <tr>
                                                                <td width="160px">
                                                                    <img width="100px" class="mt-4" src="{{asset('assets/images/Jamuna logo.png')}}" }}">
                                                                </td>
                                                                <td>
                                                                    <h4 class="mt-5 text-center" style="margin-right: 160px;">Jamuna Star Save Guard Services Ltd</h4>
                                                                    <p class="text-center text-primary" style="margin-right: 160px;"><u>www.jssgservices.com/</u></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class="text-center">
                                                            <p class="text-bold"><b><u>Application Form (Applicant's Copy)</u></b></p>
                                                        </div>
                                                        <table class="table table-sm table-bordered table-striped">
                                                            <tr>
                                                                <td width="50%"><b>Roll</b> : {{ $data->roll_number }}</td>
                                                                <td class="text-right"><b>Date</b> : {{ Carbon\Carbon::parse($data->date)->format('d-m-Y')  }}</td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-sm table-bordered table-striped">
                                                            <tr>
                                                                <td width="18%" rowspan="20">
                                                                    <img class="p-3" width="200px" height="220px" src="{{ image_url($data->applicant_image) }}"/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Position name</td>
                                                                <td>
                                                                @if($data['position_name'] == 1)
                                                                    Paking Supervisors
                                                                @elseif($data['position_name'] == 2)
                                                                    Machine Supervisors
                                                                @elseif($data['position_name'] == 3)
                                                                    Machine Operator
                                                                @elseif($data['position_name'] == 4)
                                                                    Despatched Operator
                                                                @elseif($data['position_name'] == 5)
                                                                    Paking Operator
                                                                @elseif($data['position_name'] == 6)
                                                                    Quality Assurance Incharge
                                                                @elseif($data['position_name'] == 7)
                                                                    Scanning Operator
                                                                @elseif($data['position_name'] == 8)
                                                                    Quality Assurance Operator
                                                                @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Candidate name</td>
                                                                <td>{{ $data->candidate_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Father name</td>
                                                                <td>{{ $data->father_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Mother name</td>
                                                                <td>{{ $data->mother_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Phone Number</td>
                                                                <td>{{ $data->phone_number }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Email Adress</td>
                                                                <td>{{ $data->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Date Of Birth</td>
                                                                <td>{{ $data->dob }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Age </td>
                                                                <td>{{ $data->age }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Religion  </td>
                                                                <td>{{ $data->religion }}</td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-sm table-bordered table-striped">
                                                            <tr>
                                                                <td width="25%">Gender</td>
                                                                <td>{{ $data->gender }}</td>
                                                                <td width="25%">Marital Status</td>
                                                                <td>{{ $data->marital_status }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Nationality</td>
                                                                <td>{{ $data->nationality }}</td>
                                                                <td width="25%">Blood Group</td>
                                                                <td>{{ $data->blood_group }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">National Id</td>
                                                                <td>{{ $data->national_id }}</td>
                                                                <td width="25%">Birth Registration </td>
                                                                <td>{{ $data->birth_number }}</td>
                                                            </tr>
                                                        </table>
                                                        <p style="font-size: 15px;" class="p-0 m-0"><b>Address Information:</b></p>
                                                        <table class="table table-sm table-bordered table-striped">
                                                            <tr>
                                                                <th width="25%" class="text-center" colspan="2">Present Address</th>
                                                                <th width="25%" class="text-center" colspan="2">Permanent Address</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Village</td>
                                                                <td>{{ $data->present_village }}</td>
                                                                <td>Village</td>
                                                                <td>{{ $data->permanent_village }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Post Office</td>
                                                                <td>{{ $data->present_post_office }}</td>
                                                                <td>Post Office</td>
                                                                <td>{{ $data->permanent_post_office }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thana/Upazila</td>
                                                                <td>{{ $data->present_thana }}</td>
                                                                <td>Thana/Upazila</td>
                                                                <td>{{ $data->permanent_thana }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>District</td>
                                                                <td>{{ $data->present_district }}</td>
                                                                <td>District</td>
                                                                <td>{{ $data->permanent_district }}</td>
                                                            </tr>
                                                        </table>
                                                        <p style="font-size: 15px;" class="p-0 m-0"><b>Academic Qualification:</b></p>
                                                        <table class="table table-sm table-bordered table-striped">
                                                            <tr>
                                                                <th>Examination</th>
                                                                <th>Roll Number</th>
                                                                <th>Group/Subject/Degree</th>
                                                                <th>University/Board</th>
                                                                <th>Passing Year</th>
                                                                <th>Result/GPA</th>
                                                            </tr>
                                                            <tr>
                                                                <td>SSC</td>
                                                                <td>{{ $data->ssc_roll }}</td>
                                                                <td>{{ $data->ssc_group }}</td>
                                                                <td>{{ $data->ssc_board }}</td>
                                                                <td>{{ $data->ssc_year }}</td>
                                                                <td>{{ $data->ssc_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>HSC</td>
                                                                <td>{{ $data->hsc_roll }}</td>
                                                                <td>{{ $data->hsc_group }}</td>
                                                                <td>{{ $data->hsc_board }}</td>
                                                                <td>{{ $data->hsc_year }}</td>
                                                                <td>{{ $data->hsc_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diploma</td>
                                                                <td>{{ $data->diploma_roll }}</td>
                                                               <td>{{ $data->diploma_group }}</td>
                                                                <td>{{ $data->diploma_board }}</td>
                                                                <td>{{ $data->diploma_year }}</td>
                                                                <td>{{ $data->diploma_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diploma In Computer	</td>
                                                                <td>{{ $data->diploma_com_roll }}</td>
                                                               <td>{{ $data->diploma_com_group }}</td>
                                                                <td>{{ $data->diploma_com_board }}</td>
                                                                <td>{{ $data->diploma_com_year }}</td>
                                                                <td>{{ $data->diploma_com_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diploma In Mechanical	</td>
                                                                <td>{{ $data->diploma_mech_roll }}</td>
                                                               <td>{{ $data->diploma_mech_group }}</td>
                                                                <td>{{ $data->diploma_mech_board }}</td>
                                                                <td>{{ $data->diploma_mech_year }}</td>
                                                                <td>{{ $data->diploma_mech_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Degree</td>
                                                                <td>{{ $data->degree_roll }}</td>
                                                               <td>{{ $data->degree_group }}</td>
                                                                <td>{{ $data->degree_board }}</td>
                                                                <td>{{ $data->degree_year }}</td>
                                                                <td>{{ $data->degree_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Honours</td>
                                                                <td>{{ $data->honours_roll }}</td>
                                                               <td>{{ $data->honours_group }}</td>
                                                                <td>{{ $data->honours_board }}</td>
                                                                <td>{{ $data->honours_year }}</td>
                                                                <td>{{ $data->honours_result }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Masters</td>
                                                                <td>{{ $data->masters_roll }}</td>
                                                               <td>{{ $data->masters_group }}</td>
                                                                <td>{{ $data->masters_board }}</td>
                                                                <td>{{ $data->masters_year }}</td>
                                                                <td>{{ $data->masters_result }}</td>
                                                            </tr>
                                                        </table>
                                                        <div class="row mt-0">
                                                            <div class="col-md-12">
                                                                <p style="font-size: 12px;" class="p-0 m-0"><b>Experience:</b> {{ $data->experience }}</p>
                                                            </div>
                                                            <div class="col-md-12 text-right">
                                                                <img class="p-3" width="150px" height="80px" src="{{ image_url($data->signature) }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function printDiv(divName) {
                                     var printContents = document.getElementById(divName).innerHTML;
                                     var originalContents = document.body.innerHTML;
                                
                                     document.body.innerHTML = printContents;
                                
                                     window.print();
                                
                                     document.body.innerHTML = originalContents;
                                }
                                </script>

                            </div>
                        </div>
                        @else
                          <script>window.location = "/career";</script>
                        @endif

                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni
					dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.
				</p> -->

              
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
								What’s in it for you?</a>
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
         <!-- Copyright start -->
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