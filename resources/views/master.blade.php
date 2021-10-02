<!DOCTYPE html>
<html lang="en">

    <head>
        <title>@yield('title')</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="description" content="" />
          <meta name="keywords" content="" />
          <meta name="author" content="">


          <meta name="csrf-token" content="{{ csrf_token() }}" />

          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <link rel="icon" href="{{ asset('/assets/admin') }}/images/favicon.ico" type="image/x-icon">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin') }}/css//bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin') }}/css/style.css">
          <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin') }}/css/css-loader.css">
          <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin') }}/css/jquery.mCustomScrollbar.css">
          <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin') }}/icon/themify-icons.css">
          <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin') }}/icon/icofont.css">

          <link href="{{ asset('/assets/admin') }}/toast/toastr.min.css" rel="stylesheet" type="text/css" />
    </head>
<body>
    <div id='load_active' class="loader loader-default"></div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">

            @include('include.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('include.menu')

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        @yield('body')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{ asset('/assets/admin') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/admin') }}/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/admin') }}/js/popper.min.js"></script>

<script type="text/javascript" src="{{ asset('/assets/admin') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/admin') }}/js/script.js"></script>

<script src="{{ asset('/assets/admin') }}/js/pcoded.min.js"></script>
<script src="{{ asset('/assets/admin') }}/js/vartical-demo.js"></script>

<script src="{{ asset('/assets/admin') }}/toast/toastr.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }



</script>

@yield('page_script')


</body>

</html>
