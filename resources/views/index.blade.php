@extends('layout.main')
@section('content')
    <!-- Start main content -->
    <main>
        <!-- Start About -->
        <section id="mu-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Кто мы такие</h2>
                                        <p>Рады видеть Вас на Math4Kids! Здесь дети развивают логику, мышление и учатся решать примеры с удовольствием!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Feature Content -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-about-left">
                                        <img class="" src="image/about-us.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-right">
                                        <ul>
                                            <li>
                                                <h3>Наши задачи</h3>
                                                <p>Главной задачей нашего проекта является то, что бы дети полюбили и поняли математику решая простые примеры у добном интерфейсе.</p>
                                            </li>
                                            <li>
                                                <h3>Наши решения</h3>
                                                <p>Мы создали уникальную платформу на которой помогаем детям подготовиться к школе, но делаем это удобно и не скучно!</p>
                                            </li>
                                            <li>
                                                <h3>Наша помощь</h3>
                                                <p>Мы создали уникальную систему рейтингов наших учеников с помощью которой дети сами захотят соревноваться с другими участниками и своими друзьями, тем самым совершенствуя свои зания в математике.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Call to Action -->
        <div id="mu-call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-call-to-action-area">
                            <div class="mu-call-to-action-left">
                                <h2>Начни решать примеры уже сейчас!</h2>
                                <p>Получай рейтинг за правильно решенные примеры и соревнуйся с друзьями.</p>
                            </div>
                            {{--                        TODO--}}
                            <a href="#" class="mu-primary-btn mu-quote-btn">Перейти к примерам <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Services -->
        <section id="mu-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-service-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Рейтинг наших учеников</h2>
                                        <p>Решай больше примеров, занимай лидирующие позиции тем самым увеличивая свои знания!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Service Content -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-borderless border-primary">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Имя</th>
                                                    <th scope="col">Правильных ответов</th>
                                                    <th scope="col">Время выполнения</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Ваня</td>
                                                    <td>150</td>
                                                    <td>2 минуты 45 секунд</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Маша</td>
                                                    <td>146</td>
                                                    <td>2 минуты 55 секунд</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Илон Маск</td>
                                                    <td>10</td>
                                                    <td>15 минут 55 секунд</td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Start Client Testimonials -->
        <section id="mu-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-testimonials-area">
                            <h2>Отзывы родителей наших учеников</h2>

                            <div class="mu-testimonials-block">
                                <ul class="mu-testimonial-slide">

                                    <li>
                                        <img class="mu-rt-img" src="image/traveler-1.jpg" alt="img">
                                        <p>Спасибо за прекрасный сайт! Раньше математика вызывала только ужас и полную не заинтересованность в обучении, теперь ждём каждого занятия!</p>
                                        <h5 class="mu-rt-name">Зинаида Павловна</h5>
                                        <span class="mu-rt-title">Просто мать </span>
                                    </li>

                                    <li>
                                        <img class="mu-rt-img" src="image/traveler-2.jpg" alt="img">
                                        <p>Отличный способ, что бы подготовить ребенка к школе и показать, что такое математика, тем более так интересно и увлекательно. </p>
                                        <h5 class="mu-rt-name">Александр Иванович</h5>
                                        <span class="mu-rt-title">Чей-то отец</span>
                                    </li>

                                    <li>
                                        <img class="mu-rt-img" src="image/traveler-3.jpg" alt="img">
                                        <p>Заметила, что с каждым новым занятием мой ребенок всё быстрее и бытрее решает примеры, а с помощью рейтингов ему самому интересно и увлекательно заниматься.</p>
                                        <h5 class="mu-rt-name">Джессика Альбертовна</h5>
                                        <span class="mu-rt-title">Мама Илона </span>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Testimonials -->

        <!-- Start Pricing Table -->
        <section id="mu-pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-pricing-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Наши цены</h2>
                                        <p>Вы можете подобрать любой удобный для Вас вариант подписки.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mu-pricing-content">
                                        <ul class="mu-pricing-table">
                                            <li>
                                                <div class="mu-pricing-single">
                                                    <div class="mu-pricing-single-icon">
                                                        <span class="fa fa-superscript"></span>
                                                    </div>
                                                    <div class="mu-pricing-single-title">
                                                        <h3>1 месяц</h3>
                                                    </div>
                                                    <div class="mu-pricing-single-content">
                                                        <ul>
                                                            <li>Отлично подходит для того</li>
                                                            <li>что бы обновоить свои знания.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mu-single-pricebox">
                                                        <h4>99 руб.</h4>
                                                    </div>
                                                    <a class="mu-buy-now-btn" href="#">Купить</a>
                                                </div>
                                            </li>
                                            <li class="mu-standard-pricing">
                                                <div class="mu-pricing-single">
                                                    <div class="mu-pricing-single-icon">
                                                        <span class="fa fa-infinity"></span>
                                                    </div>
                                                    <div class="mu-pricing-single-title">
                                                        <h3>Год</h3>
                                                    </div>
                                                    <div class="mu-pricing-single-content">
                                                        <ul>
                                                            <li>Если необходимо, что бы </li>
                                                            <li>ребенок занимался постоянно</li>
                                                            <li>и развивал логику. </li>
                                                        </ul>
                                                    </div>
                                                    <div class="mu-single-pricebox">
                                                        <h4>500 руб.</h4>
                                                    </div>
                                                    <a class="mu-buy-now-btn" href="#">Купить</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mu-pricing-single">
                                                    <div class="mu-pricing-single-icon">
                                                        <span class="fa fa-square-root-alt"></span>
                                                    </div>
                                                    <div class="mu-pricing-single-title">
                                                        <h3>3 Месяца</h3>
                                                    </div>
                                                    <div class="mu-pricing-single-content">
                                                        <ul>
                                                            <li>Идеально для подготовки</li>
                                                            <li>к школе.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mu-single-pricebox">
                                                        <h4>199 руб.</h4>
                                                    </div>
                                                    <a class="mu-buy-now-btn" href="#">Купить</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Table -->

        <!-- Start Newsletter -->
        <section id="mu-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-newsletter-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Подпишитесь на наши новости</h2>
                                        <p>Получайте письмо о нащих акциях, новостях и прочих бонусах.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mu-newsletter-content">
                                        <form class="mu-subscribe-form">
                                            <input type="email" placeholder="Введите Ваш e-mail">
                                            <button class="mu-subscribe-btn">Подписаться</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter -->
    </main>
@endsection
