<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">
    <title>Document</title>
</head>
<header>
    <div class="card-header">
        <nav class="header_1">
            <ul>
                <li> <a href="{{route('accounting.index')}}"> Главная </a> </li>
                <li> <a href="{{route('accounting.products')}}" > Товары </a> </li>
                <li> <a href="{{route('accounting.writeOff')}}"> Списания </a> </li>
                <li> <a href="{{route('accounting.sales')}}"> Продажи </a> </li>
            </ul>
        </nav>
    </div>
</header>
<body>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
<footer id="footer">
    <div class="advertising">
        Тут могла бы быть Ваша реклама!
        Но, а пока, дайте просто так деняк!
    </div>
</footer>
</html>
