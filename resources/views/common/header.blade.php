<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>UAjobs.cz</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./jobhub_frontend/assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="./jobhub_frontend/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./jobhub_frontend/assets/css/main.css?v=1.0" />

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
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="./jobhub_frontend/assets/imgs/theme/loading.gif" alt="jobhub" />
                </div>
            </div>
        </div>
    </div>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="./" class="d-flex">
                            <img alt="jobhub" src="./jobhub_frontend/assets/imgs/uajobs_logo.png" width="300" />
                        </a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <!--<li>
                                    <a class="active" href="./">Nabídky práce</a>
                                </li>
                                <li>
                                    <a  href="{{ route('Hledám práci') }}">Hledám práci</a>
                                </li>-->
                                <li>
                                    <a href="{{ route('Nový inzerát') }}"><i class="bi bi-megaphone"></i> Nabízím práci</a>

                                </li>

                                {{--<li>
                                    <a href="{{ route('Další pomoc UA') }}"><i class="bi bi-question-circle-fill"></i> Další pomoc UA</a>
                                </li>--}}

                                <li>
                                    <a href="{{ route('Pomoc UAjobs.cz') }}"><i class="bi bi-suit-heart-fill"></i> Spolupráce a partneři</a>

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
