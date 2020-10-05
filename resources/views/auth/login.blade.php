
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('img/favicon2.ico')}}" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" type="text/css"/>

</head>

<body>
<div class="main-container">
    <!-- Sidebar Access -->
    <aside class="sidebar-large">
        <div class="user-access">
            <div class="user-access-header">
                <img src="{{asset('img/ipeg-logo.png')}}" alt="logo_principal" style="object-fit: contain;"  width="250" height="250">
            </div>
            <div class="user-access-form">
                <p class="intro-title">@yield('title-form')</p>
                <p class="intro-summary">@yield('intro-form')</p>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <p>Tienes los siguientes errores: </p>
                        <ul style="color: red;">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="input-wrapper">
                        <input type="email" name="email" id="email" class="email" placeholder="Correo" required value="{{old('email')}}" />
                    </div>
                    <div class="input-wrapper">
                        <input type="password" name="password"  class="clave" placeholder="Contraseña" required />
                    </div>
                    <input type="submit" value="INGRESAR" class="enviar">
                </form>
            </div>

        </div>
    </aside>
    <!-- Content Slideshow    -->
    <div class="carrousel-wrapper carrousel-login" id="slider-login">
        <div class="carrousel-slide active"  style="background: url({{asset('img/img_super_admin_2.jpg')}}) center center no-repeat;">

        </div>
        <div class="carrousel-footer-wrapper">
            <div class="carrousel-footer-content">
                <div class="carrousel-controls"></div>
                <div class="carrousel-advertising">
                    <span style="padding-right: 10px; padding-top: 5px;">Síguenos en nuestras redes sociales</span>

                    <a href="" class="button-circle" target="_blank">
                        <i class="fa fa-linkedin fa-2x" style="margin-left: 13px;margin-top: 8px;" ></i>
                    </a>

                    <a href="" class="button-circle" target="_blank">
                        <i class="fa fa-facebook fa-2x" style="margin-left: 16px;margin-top: 9px;" ></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
