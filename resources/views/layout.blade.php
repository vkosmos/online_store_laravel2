<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">--}}
    <title>
        @yield('title')
    </title>
</head>

<body>

<!--    HEADER    -->
<header id="main-header" class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-1">
                <h2><i class="fas fa-tree text-warning"></i> Online Store</h2>
            </div>
            <div class="col-md-8 py-1">

                <form action="#" method="post" class="mr-5 py-1">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Введите поисковый запрос">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button">Search</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</header>

<!--    ВЕРХНЕЕ МЕНЮ    -->
<nav class="navbar navbar-expand-sm navbar-dark bg-info py-2 mb-4">
    <div class="container">
        <a href="/" class="navbar-brand">Laravel</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="{{route('catalog.index')}}" class="nav-link @if('catalog' == $active) active @endif">Каталог</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('actions')}}" class="nav-link @if('actions' == $active) active @endif">Акции</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('contacts')}}" class="nav-link @if('contacts' == $active) active @endif">Контакты</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="{{route('basket.index')}}" class="nav-link @if(null !== session('basket')) active @endif">
                        <i class="fas fa-shopping-basket"></i> Корзина
                        @if(null !== session('basket'))
                            {{count(session('basket'))}}
                        @endif
                    </a>
                </li>

                @if(!Auth::check())
                <li class="nav-item dropdown mr-3">
                    <a href="/register" class="nav-link @if('register' == $active) active @endif"><i class="fas fa-user"></i>Зарегистрироваться</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="/login" class="nav-link"><i class="fas fa-user"></i>Войти</a>
                </li>
                @endif

                @if(Auth::check())
                    <li class="nav-item mr-3">
                        <a href="/profile" class="nav-link"><i class="fas fa-user-circle"></i>Профиль</a>
                    </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link"><i class="fas fa-user-times"></i>Выйти</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


<!--    ОСНОВНОЙ БЛОК САЙТА    -->
<section id="content">
    <div class="container">
        <div class="row">

            <!--    ЛЕВОЕ МЕНЮ - КАТЕГОРИИ    -->
            <div class="col-md-3">
                <nav class="navbar navbar-expand-sm navbar-light bg-light mb-5">
                    <div class="container">
                        <ul class="navbar-nav flex-column">

                            @foreach ($categories as $cat)
                            <li class="nav-item dropdown my-3">
                                <a href="{{route('catalog.childs', $cat->link)}}" class="text-dark pl-2">{{$cat->name}}</a>
                                <a href="#" class="dropdown-toggle bg-light text-dark" data-toggle="dropdown" data-target="#test{{$cat->id}}"></a>
                                <div id="test{{$cat->id}}" class="dropdown-menu">

                                    @foreach($cat->childs as $child)
                                    <a href="{{route('catalog.childs', $child->link)}}" class="dropdown-item">{{$child->name}}</a>
                                    @endforeach

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </nav>
            </div>

            <!--    ГЛАВНЫЙ БЛОК    -->
            <div class="col-md-9">

                @yield('content')

            </div>
        </div>
    </div>
</section>

@yield('pagination')

<!--    FOOTER    -->
<footer id="main-footer" class="bg-dark text-white mt-5 p-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">
                    Пример Интернет-магазина &copy; <span id="year"></span> all-is-magic
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>

<script>
    //Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    //Connecting WYSWIG editor
    //CKEDITOR.replace( 'editor1' );

</script>

</body>
</html>
