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
                    <h2>Career</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white" aria-current="page">Career</li>
                        </ol>
                    </nav>
                </div>
            </div><!-- Subpage title end -->
        </div><!-- Banner area end -->

        <!-- Main container start -->
        <section id="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title-border">Application Form</h3>
                        @if ($message = Session::get('status'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <script>
                            Swal.fire(
                              'Success!',
                              '{{ $message }}',
                              'success'
                            )
                        </script>
                        @endif
                        <form action="{{url('store-form')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Position name <span>*</span></label>
                                    <select name="position_name" id="" class="form-control">
                                        <option value="">select</option>
                                        <option <?php if(old('position_name') == 1) { echo "selected"; } ?> value="1">Paking Supervisors</option>
                                        <option <?php if(old('position_name') == 2) { echo "selected"; } ?> value="2">Machine Supervisors</option>
                                        <option <?php if(old('position_name') == 3) { echo "selected"; } ?> value="3">Machine Operator</option>
                                        <option <?php if(old('position_name') == 4) { echo "selected"; } ?> value="4">Despatched Operator</option>
                                        <option <?php if(old('position_name') == 5) { echo "selected"; } ?> value="5">Paking Operator</option>
                                        <option <?php if(old('position_name') == 6) { echo "selected"; } ?> value="6">Quality Assurance Incharge</option>
                                        <option <?php if(old('position_name') == 7) { echo "selected"; } ?> value="7">Scanning Operator</option>
                                        <option <?php if(old('position_name') == 8) { echo "selected"; } ?> value="8">Quality Assurance Operator</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="" id="inputEmail4" placeholder=""> -->

                                    @error('position_name')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Candidate name <span>*</span></label>
                                    <input type="text" value="{{ old('candidate_name') }}" class="form-control" name="candidate_name" id="inputPassword4" placeholder="">

                                    @error('candidate_name')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Father name <span>*</span></label>
                                    <input type="text" value="{{ old('father_name') }}" class="form-control" name="father_name" id="inputEmail4" placeholder="">
                                    @error('father_name')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Mother name <span>*</span></label>
                                    <input type="text" value="{{ old('mother_name') }}" class="form-control" name="mother_name" id="inputPassword4" placeholder="">
                                    @error('mother_name')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Gender</label>
                                    <select id="inputEmail4" class="form-control" name="gender">
                                        <option <?php if(old('gender') == '') { echo "selected"; } ?> value="">Select Gender</option>
                                        <option <?php if(old('gender') == 'Male') { echo "selected"; } ?> value="Male">Male</option>
                                        <option <?php if(old('gender') == "Female") { echo "selected"; } ?> value="Female">Female</option>
                                        <option <?php if(old('gender') == "Other") { echo "selected"; } ?> value="Other">Other</option>
                                    </select>
                                    @error('gender')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Marital Status</label>
                                    <select id="inputEmail4" class="form-control" name="marital_status">
                                        <option <?php if(old('marital_status') == '') { echo "selected"; } ?> value="">Select Marital Status </option>
                                        <option <?php if(old('marital_status') == 'Married') { echo "selected"; } ?> value="Married">Married</option>
                                        <option <?php if(old('marital_status') == "Unmarried") { echo "selected"; } ?> value="Unmarried">Unmarried</option>
                                    </select>
                                    @error('marital_status')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Phone Number <span>*</span></label>
                                    <input type="number" value="{{ old('phone_number') }}" class="form-control" name="phone_number" id="inputPassword4" placeholder="">
                                    @error('phone_number')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Email Adress <span>*</span></label>
                                    <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="inputPassword4" placeholder="">
                                    @error('email')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Date Of Birth <span>*</span></label>
                                    <input type="date" value="{{ old('dob') }}" class="form-control" name="dob" id="inputEmail4" placeholder="">
                                    @error('dob')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Age <span>*</span></label>
                                    <input type="number" value="{{ old('age') }}" class="form-control" name="age" id="inputPassword4" placeholder="">
                                    @error('age')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Religion <span>*</span></label>
                                    <input type="text" value="{{ old('religion') }}" class="form-control" name="religion" id="inputEmail4" placeholder="">
                                    @error('religion')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nationality <span>*</span></label>
                                    <input type="text" value="{{ old('nationality') }}" class="form-control" name="nationality" id="inputPassword4" placeholder="">
                                    @error('nationality')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Blood Group</label>
                                    <select id="inputEmail4" class="form-control" name="blood_group">
                                        <option <?php if(old('blood_group') == '') { echo "selected"; } ?> value="">Select Blood Group</option>
                                        <option <?php if(old('blood_group') == 'A+') { echo "selected"; } ?> value="A+">A+</option>
                                        <option <?php if(old('blood_group') == "A-") { echo "selected"; } ?> value="A-">A-</option>
                                        <option <?php if(old('blood_group') == "B+") { echo "selected"; } ?> value="B+">B+</option>
                                        <option <?php if(old('blood_group') == "B-") { echo "selected"; } ?> value="B-">B-</option>
                                        <option <?php if(old('blood_group') == "O+") { echo "selected"; } ?> value="O+">O+</option>
                                        <option <?php if(old('blood_group') == "O-") { echo "selected"; } ?> value="O-">O-</option>
                                        <option <?php if(old('blood_group') == "AB+") { echo "selected"; } ?> value="AB+">AB+</option>
                                        <option <?php if(old('blood_group') == "AB-") { echo "selected"; } ?> value="AB-">AB-</option>
                                    </select>
                                    @error('blood_group')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">National Id Number<span>*</span></label>
                                    <input type="number" value="{{ old('national_id') }}" class="form-control" name="national_id" id="inputEmail4" placeholder="">
                                    @error('national_id')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Birth certificate Number </label>
                                    <input type="number" value="{{ old('birth_number') }}" class="form-control" name="birth_number" id="inputPassword4" placeholder="">
                                    @error('birth_number')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Experience</label>
                                    <input type="text" value="{{ old('experience') }}" class="form-control" name="experience" id="inputEmail4" placeholder="">
                                    @error('experience')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <fieldset>
                                <legend style="font-size: 20px">Present Address</legend>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Village <span>*</span></label>
                                        <input type="text" value="{{ old('present_village') }}" class="form-control" name="present_village" id="inputEmail4" placeholder="">
                                        @error('present_village')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Post Office <span>*</span></label>
                                        <input type="text" value="{{ old('present_post_office') }}" class="form-control" name="present_post_office" id="inputPassword4" placeholder="">
                                        @error('present_post_office')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Thana/Upazila <span>*</span></label>
                                        <input type="text" value="{{ old('present_thana') }}" class="form-control" name="present_thana" id="inputEmail4" placeholder="">
                                        @error('present_thana')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">District <span>*</span></label>
                                        <input type="text" value="{{ old('present_district') }}" class="form-control" name="present_district" id="inputPassword4" placeholder="">
                                        @error('present_district')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend style="font-size: 20px">Permanent Address</legend>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Village <span>*</span></label>
                                        <input type="text" value="{{ old('permanent_village') }}" class="form-control" name="permanent_village" id="inputEmail4" placeholder="">
                                        @error('permanent_village')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Post Office <span>*</span></label>
                                        <input type="text" value="{{ old('permanent_post_office') }}" class="form-control" name="permanent_post_office" id="inputPassword4" placeholder="">

                                        @error('permanent_post_office')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Thana/Upazila <span>*</span></label>
                                        <input type="text" value="{{ old('permanent_thana') }}" class="form-control" name="permanent_thana" id="inputEmail4" placeholder="">
                                        @error('permanent_thana')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">District <span>*</span></label>
                                        <input type="text" value="{{ old('permanent_district') }}" class="form-control" name="permanent_district" id="inputPassword4" placeholder="">
                                        @error('permanent_district')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <legend style="font-size: 20px">Educational Qualification</legend>
                                    <table class="table table-sm table-bordered mt-2 table-responsive">
                                        <tr>
                                            <th width="5%" class="text-center">Sl.</th>
                                            <th width="15%" class="text-center">Name of Exam</th>
                                            <th class="text-center">Roll Number</th>
                                            <th class="text-center">Group/Subject/Degree</th>
                                            <th class="text-center">University/Board</th>
                                            <th class="text-center">Passing Year</th>
                                            <th class="text-center">Result/GPA</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>SSC</td>
                                            <td>
                                                <input type="text" value="{{ old('ssc_roll') }}" class="form-control" name="ssc_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('ssc_group') }}" class="form-control" name="ssc_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('ssc_board') }}" class="form-control" name="ssc_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('ssc_year') }}" class="form-control" name="ssc_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('ssc_result') }}" class="form-control" name="ssc_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>HSC</td>
                                            <td>
                                                <input type="text" value="{{ old('hsc_roll') }}" class="form-control" name="hsc_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('hsc_group') }}" class="form-control" name="hsc_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('hsc_board') }}" class="form-control" name="hsc_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('hsc_year') }}" class="form-control" name="hsc_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('hsc_result') }}" class="form-control" name="hsc_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Diploma</td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_roll') }}" class="form-control" name="diploma_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_group') }}" class="form-control" name="diploma_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_board') }}" class="form-control" name="diploma_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_year') }}" class="form-control" name="diploma_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_result') }}" class="form-control" name="diploma_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Diploma In Computer</td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_com_roll') }}" class="form-control" name="diploma_com_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_com_group') }}" class="form-control" name="diploma_com_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_com_board') }}" class="form-control" name="diploma_com_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_com_year') }}" class="form-control" name="diploma_com_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_com_result') }}" class="form-control" name="diploma_com_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Diploma In Mechanical</td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_mech_roll') }}" class="form-control" name="diploma_mech_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_mech_group') }}" class="form-control" name="diploma_mech_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_mech_board') }}" class="form-control" name="diploma_mech_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_mech_year') }}" class="form-control" name="diploma_mech_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('diploma_mech_result') }}" class="form-control" name="diploma_mech_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Degree</td>
                                            <td>
                                                <input type="text" value="{{ old('degree_roll') }}" class="form-control" name="degree_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('degree_group') }}" class="form-control" name="degree_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('degree_board') }}" class="form-control" name="degree_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('degree_year') }}" class="form-control" name="degree_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('degree_result') }}" class="form-control" name="degree_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Honours</td>
                                            <td>
                                                <input type="text" value="{{ old('honours_roll') }}" class="form-control" name="honours_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('honours_group') }}" class="form-control" name="honours_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('honours_board') }}" class="form-control" name="honours_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('honours_year') }}" class="form-control" name="honours_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('honours_result') }}" class="form-control" name="honours_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Masters</td>
                                            <td>
                                                <input type="text" value="{{ old('masters_roll') }}" class="form-control" name="masters_roll" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('masters_group') }}" class="form-control" name="masters_group" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('masters_board') }}" class="form-control" name="masters_board" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('masters_year') }}" class="form-control" name="masters_year" id="inputPassword4" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text" value="{{ old('masters_result') }}" class="form-control" name="masters_result" id="inputPassword4" placeholder="">
                                            </td>
                                        </tr>
                                    <table>
                                </div>
                            </div>
                            <p><b>Note: </b>I undertake to the effect that my above resume and information are correct, if it is later proved to be incorrect, I will be liable to bear the responsibility as per the rules.</p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Applicant Photo (max-size:300kb) <span>*</span></label>
                                    <input type="file" class="form-control" name="applicant_image" id="inputEmail4" placeholder="">
                                    @error('applicant_image')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Signature (max-size:300kb) <span>*</span></label>
                                    <input type="file" class="form-control" name="signature" id="inputPassword4" placeholder="">
                                    @error('signature')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Apply Date <span>*</span></label>
                                    <input type="date" class="form-control" name="date" id="inputPassword4" placeholder="">
                                    @error('date')
                                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <fieldset>
                                <legend>Attach All Document</legend>
                                <ol>
                                    <li>Attested National Identity Card</li>
                                    <li>Attested copy of citizenship issued by the Chairman / Commissioner of UP / Municipal / City Corporation,</li>
                                    <li>Copy of all Certificate of Educational Qualification,</li>
                                    <li>Copy of Experience and Computer certificate</li>
                                </ol>
                            </fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="inputEmail4">All Document (Must be image or Pdf) </label>
                                        <input type="file" name="alldocument[]" multiple class="form-control" id="inputEmail4" placeholder="">
                                        @error('alldocument')
                                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div><br>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" href="#" class="btn text-light btn-success bg-success"><span class="mr-2">Submit</span></button>
                            </div>
                        </form>
                        <div class="gap-40"></div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section id="copyright" class="copyright angle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright-info">
                            &copy; Copyright 2021
                        </div>
                    </div>
                </div>
                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
                    <button class="btn btn btn-outline-white" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
                </div>
            </div>
        </section>
    </div>
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