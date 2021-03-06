<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K92WJ5X');</script>
	<!-- End Google Tag Manager -->

    <meta charset="utf-8" />
    <title>UAjobs.cz</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/shareOnFB3.png" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/jobhub_frontend/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/jobhub_frontend/assets/css/main.css?v=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $( "#contactForm" ).hide();

        $( "#reply" ).on( "click", function() {
          $( "#contactForm" ).toggle();
        });

    });


    </script>


    <!-- Foxentry start -->
    <script type="text/javascript" async>
    var Foxentry;
    (function () {
    var e = document.querySelector("script"), s = document.createElement('script');
    s.setAttribute('type', 'text/javascript');
    s.setAttribute('async', 'true');
    s.setAttribute('src', 'https://cdn.foxentry.cz/lib');
    e.parentNode.appendChild(s);
    s.onload = function(){ Foxentry = new FoxentryBase('2Tsj9rMD6e'); }
    })();
    </script>
    <!-- Foxentry end -->



</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K92WJ5X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/loading.gif" alt="jobhub" />
                </div>
            </div>
        </div>
    </div>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="{{ env('APP_URL') }}" class="d-flex">
                            <img alt="jobhub" src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/uajobs_logo.png" width="300" />
                        </a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <!--<li>
                                    <a class="active" href="./">Nab??dky pr??ce</a>
                                </li>
                                <li>
                                    <a  href="{{ route('Hled??m pr??ci') }}">Hled??m pr??ci</a>
                                </li>-->
                                
                                <li class="has-children">
                                    <a href="{{ env('APP_URL') }}">?? ?????????? ????????????</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ env('APP_URL') }}/it-jobs">???????????? ?? ????</a></li>
                                        <!--<li><a href="job-grid-2.html">Job Grid 2</a></li>
                                        <li><a href="job-list.html">Job List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="job-single.html">Job Single 01</a></li>
                                        <li><a href="job-single-2.html">Job Single 02</a></li>
                                        <li><a href="job-single-3.html">Job Single 03</a></li>-->
                                    </ul>
                                </li>
                                
                                
                                <li>
                                    <a href="{{ route('Nov?? inzer??t') }}"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/czech.png" height="10"> Nab??z??m pr??ci</a>

                                </li>

                                {{--<li>
                                    <a href="{{ route('Dal???? pomoc UA') }}"><i class="bi bi-question-circle-fill"></i> Dal???? pomoc UA</a>
                                </li>--}}

                                <li>
                                    <a href="{{ route('Pomoc UAjobs.cz') }}"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/czech.png" height="10"> Spolupr??ce a partne??i</a>

                                </li>

                                <li>
                                    <a href="{{ route('Kontakt UAjobs.cz') }}"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/czech.png" height="10"> Kontakt</a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                </div>
                <!--<div class="header-right">
                    <div class="block-signin">
                        <a href="#" class="text-link-bd-btom hover-up">Apply Now</a>
                        <a href="job-grid-2.html" class="btn btn-default btn-shadow ml-40 hover-up">Sign in</a>
                    </div>
                </div>-->
            </div>
        </div>
    </header>

    <!--End header-->

