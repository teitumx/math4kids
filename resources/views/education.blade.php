<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Math4Kids - обучение математике детей дошкольного возраста</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4868944d97.js" crossorigin="anonymous" defer></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
    <!-- Google Fonts Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

</head>
<body>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start Header -->
<header id="mu-hero">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mu-navbar">
            <!-- Text based logo -->
{{--            TODO--}}
            <a class="navbar-brand mu-logo" href="#"><span>Math4Kids</span></a>
            <!-- image based logo -->
            <!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/image/logo.png" alt="logo"></a> -->
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
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Логин</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <span>Войти</span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->

<!-- Start main content -->
<main>
    <!-- Start About -->
    <div class="container">
        <div class="row">
            <div class="counter">
                <h2>1 / 40</h2>
            </div>
            <div class="col-md-12">
                <div class="examples-area">
                    <span class="num-one">4</span> <span class="operation">+ </span> <span class="num-two">3</span>  = <input type="text" class="example-input">
                    <div class=""><button class="btn">Cледующий пример</button></div>
                </div>

            </div>

        </div>
    </div>
    <!-- End About -->
</main>

<!-- End main content -->


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
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
{{--                            TODO--}}
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


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- Slick slider -->
</body>
</html>
