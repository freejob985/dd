<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
        integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <style>
        * {
            /* font-family: 'Josefin Sans', sans-serif !important; */
            font-family: 'Cairo', sans-serif;
        }

        h3 {
            font-family: 'Cairo', sans-serif !important;
            ;
            font-size: 22px !important;
        }

        h1 {
            font-family: 'Cairo', sans-serif !important;
            font-size: 25px !important;
            color: white !important;
        }

        h4 {
            font-family: 'Cairo', sans-serif !important;
            font-size: 16px;
        }

    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">المجلة</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2 {{ Request::is('admin') ? 'active' : '' }}">
                        <a href="{{ route('admin') }}" class="nav-link">الصفحة الرئيسية</a>
                    </li>
                    {{-- <li class="nav-item px-2 {{ Request::is('admin/channels') ? 'active' : '' }}">
                <a href="{{route('admin.channels.index')}}" class="nav-link">المجلات</a>
            </li> --}}
                    <li class="nav-item px-2 {{ Request::is('admin/magazines') ? 'active' : '' }}">
                        <a href="{{ route('admin.magazines.index') }}" class="nav-link">الإصدرات</a>
                    </li>
                    <li class="nav-item px-2 {{ Request::is('admin/articles') ? 'active' : '' }}">
                        <a href="{{ route('admin.articles.index') }}" class="nav-link">المقلات</a>
                    </li>
                    <li class="nav-item px-2 {{ Request::is('admin/users') ? 'active' : '' }}">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">المؤلفين </a>
                    </li>
                    <li class="nav-item px-2 {{ Request::is('admin/categories') ? 'active' : '' }}">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link">الاقسام</a>
                    </li>
                    {{-- <li class="nav-item px-2 {{ Request::is('admin/comments') ? 'active' : '' }}">
                        <a href="{{ route('admin.comments.index') }}" class="nav-link">التعليقات</a>
                    </li> --}}
                    <li class="nav-item px-2 {{ Request::is('admin/sponsors') ? 'active' : '' }}">
                        <a href="{{ route('admin.sponsors.index') }}" class="nav-link">الرعاة</a>
                    </li>
                    <li class="nav-item px-2 {{ Request::is('admin/sites') ? 'active' : '' }}">
                        <a href="{{ route('admin.sites.index') }}" class="nav-link">المواقع</a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="fas fa-user"></i> مرحبا {{ Auth::user()->first_name }}
                            {{ Auth::user()->last_name }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                            {{ __('تسجيل الخروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <h1>
                        <i class="fas fa-cog"></i> لوحة التحكم
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="py-5 clearfix">
        @include('includes.messages')
        @yield('content')
    </div>




    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')

</body>

</html>
