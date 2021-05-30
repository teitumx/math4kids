<!DOCTYPE html>
<html lang="ru">
@section('head')
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Math4Kids - обучение математике детей дошкольного возраста</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4868944d97.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Slick slider -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">

    <!-- Google Fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
    <!-- Google Fonts Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

</head>
@show
<body>

@section('scroll')
<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->
@show

@section('header')
<!-- Start Header -->
<header id="mu-hero">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mu-navbar">
            <!-- Text based logo -->
            {{--            TODO--}}
            <a class="navbar-brand mu-logo" href="#"><span>Math4Kids</span></a>
            <!-- image based logo -->
            <!-- <a class="navbar-brand mu-logo" href="index.html"><img src="../assets/image/logo.png" alt="logo"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mu-navbar-nav">
                    <li class="nav-item active">
                        {{--            TODO--}}
                        <a href="#">Главная</a></li>
                    <li class="nav-item"><a href="#">О нас</a></li>
                    <li class="nav-item"><a href="#">Примеры</a></li>
                    <li class="nav-item"><a href="#">Контакты</a></li>
                    <li class="nav-item"><a href="#">Логин</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->
@show

@section('slider')
<!-- Start slider area -->
<div id="mu-slider">
    <div class="mu-slide">
        <!-- Start single slide  -->
        <div class="mu-single-slide">

            <img src="{{url('./image/slider-img-1.jpg')}}" alt="slider img">
            <div class="mu-single-slide-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mu-single-slide-content">
                                <h1>Добро пожаловать на Math4Kids</h1>
                                <p>Дадим знания, которые пригодятся в школе и повседневной жизни.</p>
                                <a class="mu-primary-btn" href="#">Подробнее <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End single slide  -->

        <!-- Start single slide  -->
        <div class="mu-single-slide">
            <img src="image/slider-img-2.jpg" alt="slider img">
            <div class="mu-single-slide-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mu-single-slide-content">
                                <h1>Счет и арифметика</h1>
                                <p>Научимся считать до 100, понимать математические знаки, решать задачи и вычислять в уме.</p>
                                <a class="mu-primary-btn" href="#">Подробнее <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End single slide  -->

        <!-- Start single slide  -->
        <div class="mu-single-slide">
            <img src="image/slider-img-3.jpg" alt="slider img">
            <div class="mu-single-slide-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mu-single-slide-content">
                                <h1>Логика и мышление</h1>
                                <p>Математические примеры помогает развивать логику и мышление!</p>
                                <a class="mu-primary-btn" href="#">Подробнее <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End single slide  -->
    </div>
</div>
<!-- End Slider area -->
@show


@section('content')
@show

<!-- End main content -->

@section('footer')
<!-- Start footer -->
<footer id="mu-footer">
    <div class="mu-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mu-single-footer">
                        <p>Math4Kids - платформа для изучения математики для детей школьного и дошкольного возраста </p>
                        <div class="mu-social-media">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mu-single-footer">
                        <h3>Навигация</h3>
                        <ul class="mu-useful-links">
                            {{--                            TODO--}}
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Примеры</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Личный кабинет</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mu-single-footer">
                        <h3>Контакты</h3>
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="fa fa-home"></span>
                                <div class="media-body">
                                    <p>Москва, Тверская 1, 1</p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="fa fa-phone"></span>
                                <div class="media-body">
                                    <p>+1 234 56 78</p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="fa fa-envelope"></span>
                                <div class="media-body">
                                    <p>support@math4kids.fun</p>
                                    <p>help@math4kids.fun</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-footer-bottom-area">
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->
@show

@section('scripts')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous" defer></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
@show
