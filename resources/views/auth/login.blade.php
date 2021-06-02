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
    <form action="/auth/login" method="post" class="d-flex flex-column">
        @csrf
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
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
        var form_data = $(event.target).serialize();
        $.ajax({
            type: "POST",
            url: "/auth/login",
            data: form_data,
            success: function () {
                alert("Вы успешно авторизовались!");
            }
        });
    })
</script>
</html>
