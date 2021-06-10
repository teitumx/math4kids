@extends('layout.main')

@section('slider')
@endsection


@section('content')

<body>
    <!-- <div class="d-flex w-100 justify-content-center align-items-center" style="height: 100vh;">
    <form action="/auth/register" method="post" class="d-flex flex-column">
        <input type="hidden" name="csrfToken" value="{{ csrf_token() }}">
        <input type="text" name="first_name" placeholder="first_name">
        <input type="text" name="last_name" placeholder="last_name">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="password_confirmation">
        <input type="file" name="avatar" placeholder="avatar">
        <input type="date" name="birthday" placeholder="birthday">
        <input type="submit" class="btn btn-primary" value="Отправить">
    </form>
</div> -->
    <!-- РЕГИСТРАЦИЯ -->
    <div class="container">
        <div class="row">
            <div class="form-area">
                <div class="col-md-offset-3 col-md-6 w-50 mx-auto">

                    <form class="form-horizontal" action="/auth/register" method="post">
                        <input type="hidden" name="csrfToken" value="{{ csrf_token() }}">
                        <span class="heading">РЕГИСТРАЦИЯ</span>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="Имя">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" placeholder="Логин">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group help">
                            <input type="password" class="form-control" name="password" placeholder="Пароль">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="form-group help">
                            <input type="password" class="form-control" name="password" placeholder="Повторите пароль">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="form-group">
                            <span>Загрузить аватар: </span>
                            <br>
                            <div class="btn-register">
                                <input type="file" name="avatar" placeholder="avatar">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Дата Рождения" name="birthday" onfocus="(this.type='date')">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" value="Отправить">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    const form = document.querySelector('form')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        var form_data = $(event.target).serialize(); // Собираем все данные из формы
        $.ajax({
            type: "POST", // Метод отправки
            url: "/auth/register", // Путь до php файла отправителя
            data: form_data,
            success: function() {
                // Код в этом блоке выполняется при успешной отправке сообщения
                alert("Вы успешно зарегистрировались!");
            }
        });
    })
</script>

@endsection