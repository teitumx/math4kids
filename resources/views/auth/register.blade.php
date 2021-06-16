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
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
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
<script src="{{ asset('js/app.js') }}" defer></script>
<script defer>
    const form = document.querySelector('form')
    function getCookie(name) {
        if (!document.cookie) {
            return null;
        }

        const xsrfCookies = document.cookie.split(';')
            .map(c => c.trim())
            .filter(c => c.startsWith(name + '='));

        if (xsrfCookies.length === 0) {
            return null;
        }
        return decodeURIComponent(xsrfCookies[0].split('=')[1]);
    }


    form.addEventListener('submit', (event) => {
        event.preventDefault();
        var form_data = $(event.target).serialize(); // Собираем все данные из формы
        // const csrfToken = getCookie('XSRF-TOKEN');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST", // Метод отправки
            url: "/auth/register", // Путь до php файла отправителя
            data: form_data,
            success: function(isSuccess) {
                // Код в этом блоке выполняется при успешной отправке сообщения
                if (isSuccess) {
                    alert("Вы успешно зарегистрировались!")
                    console.log(data)
                } else {
                    alert("Не удалось зарегистрировать пользователя!")
                }
            },
            fail: function() {
                alert("Не удалось зарегистрировать пользователя!")
            }
        });
    })
</script>

@endsection