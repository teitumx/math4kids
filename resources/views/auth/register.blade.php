<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="d-flex w-100 justify-content-center align-items-center" style="height: 100vh;">
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
            success: function () {
                // Код в этом блоке выполняется при успешной отправке сообщения
                alert("Вы успешно зарегистрировались!");
            }
        });
    })
</script>
</html>
