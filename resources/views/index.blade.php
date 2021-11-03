<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>@yield('title') | {{ $settings["web_name"] }}</title>
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/441f292d9e.js" crossorigin="anonymous"></script>
</head>
<body class="vh-100">
    <div class="wrapper">
        <div class="mobileLeftBar">
            <ul class="mobileMenu_Main">
                <li><a href="/" class="active">Anasayfa</a> </li>
                <li><a href="{{route('urunlerimiz')}}">Ürünlerimiz</a></li>
                <li><a href="#">Hakkımızda</a></li>
                <li><a href="#">İletişim</a></li>
            </ul>
        </div>
        <div class="header">
            <div class="container headerMain">
                <div class="logo">
                    <a href="/">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="menus">
                    <ul class="main_menu">
                        <li><a href="{{route('anasayfa')}}">Anasayfa</a> </li>
                        <li><a href="{{route('urunlerimiz')}}">Ürünlerimiz</a></li>
                        <li><a href="#">Hakkımızda</a></li>
                        <li><a href="#">İletişim</a></li>
                    </ul>
                </div>
                <div class="mobileMenus" id="mobileMenu">
                    <i class="fas fa-bars fa-2x"></i>
                </div>
                <div class="headerRight d-flex align-items-center">
                    <div class="cart mr-4">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </div>
                    <div class="user">
                        @auth 
                            <div class="userIcon">
                                <i class="fas fa-user-circle fa-2x"></i> 
                                <div class="userDropdown rounded">
                                    <a href="#"><i class="fas fa-shopping-basket"></i> Siparişlerim</a>
                                    <a href="#"><i class="fas fa-user-cog"></i> Hesap Ayarları</a>
                                    <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a>
                                </div>
                            </div>
                        @else
                            <div class="loginOrRegister rounded">
                                <a href="{{route('login')}}">Giriş Yap</a>
                                <span>veya</span>
                                <a href="{{route('register')}}">Hesap Oluştur</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        <div class="footer">
            <div class="footerUp">
                <div class="row container">
                    <div class="col-md-4">
                        <h1>Hakkımızda</h1><br>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, iusto obcaecati accusamus modi nisi unde. Blanditiis illum aspernatur ad iste maiores commodi laboriosam maxime asperiores ratione, repellendus, optio minus deserunt!</p>
                    </div>
                    <div class="col-md-4">
                        <h1>Vizyonumuz</h1><br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quis perferendis nam facilis dolores, odit ad nostrum nesciunt harum, error quod! Nesciunt, maiores aut! Nulla quia tenetur rem repellat qui?</p>
                    </div>
                    <div class="col-md-4">
                        <h1>İletişim</h1><br>
                        <span class="d-block"><a href="{{ $settings["adress_link"] }}" target="_blank"><i class="fas fa-map-marker-alt"></i> {{ $settings["adress"] }}</a></span>
                        <span class="d-block"><a href="mailto:{{ $settings["mail"] }}"><i class="fas fa-envelope"></i> {{ $settings["mail"] }}</a></span>
                        <span class="d-block"> <a href="tel:{{ $settings["tel"] }}"><i class="fas fa-phone-alt"></i> {{ $settings["tel"] }}</a></span>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-md-12 p-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223.77794065432104!2d28.96479926464627!3d41.00807683571476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab99002c1d38b%3A0x5c7430314c8339de!2zQWxrYW4gQXRhbWFuIMSwxZ8gSGFuxLE!5e0!3m2!1str!2str!4v1634819282299!5m2!1str!2str" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="footerDown">
                ©2021 Pantera All rights reserved | Developer by {{ $settings["author"] }}
            </div>
        </div>
        
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>
