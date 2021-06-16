@extends('layout.main')

@section('slider')
@endsection


@section('content')

<div class="container">
    <div class="row">

        <div class="form-area">


            <div class="col-md-offset-3 col-md-6 w-50 mx-auto">

                <form class="form-horizontal" action="/auth/login" method="post">
                    @csrf
                    <span class="heading">АВТОРИЗАЦИЯ</span>
                    <div class="form-group">
                        <input type="text" class="form-control" id="login" name="login" placeholder="Логин">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group help">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Пароль">
                        <i class="fa fa-lock"></i>
                        <a href="#" class="fa fa-question-circle"></a>
                    </div>
                    <div class="form-group">
                        <div class="main-checkbox">
                            <input type="checkbox" value="none" id="checkbox1" name="check" />
                            <label for="checkbox1"></label>
                        </div>
                        <span class="text">Запомнить</span>
                        <button type="submit" class="btn btn-default" value="Вход">ВХОД</button>

                        <a href="/auth/register">Регистрация (TODO)</a> <!-- TODO Оформить ссылку -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    const form = document.querySelector('form')
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form_data = $(event.target).serialize();
        $.ajax({
            type: "POST",
            url: "/auth/login",
            data: form_data,
            success: function(isSuccess) {
                if (isSuccess) {
                    alert("Вы успешно вошли!")
                    console.log(data)
                } else {
                    alert("Не удалось войти!")
                }
            },
            fail: function() {
                alert("Не удалось войти!")
            }
        });
    })
</script>
@endsection
