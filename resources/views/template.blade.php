<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ASG</title>

    <!-- 

Sentra Template

https://templatemo.com/tm-518-sentra

-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/light-box.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--/.navbar-header-->
    </header>

    <div class="sidebar-navigation hidde-sm hidden-xs">
        <div class="logo">
            <a href="#">AS<em>G</em></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('') }}">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Strona główna
                    </a>
                </li>
                <li>
                    <a href="{{ url('/imprezy') }}">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Kalendarz imprez
                    </a>
                </li>
                <li>
                    <a href="{{ url('/news') }}">
                        <span class="rect"></span>
                        <span class="circle"></span>
                       Newsy
                    </a>
                </li>
                <li>
                    <a href="{{ url('/repliki') }}">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Dostępne repliki
                    </a>
                </li>
                <li class="collapse_menu">
                    <a href="{{ url('/home') }}">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Moje konto
                    </a>
                    @if (!auth::check())
                        <ul>
                            <li><a href="{{ url('/login') }}">Zaloguj się</a></li>
                            <li><a href="{{ url('/register') }}">Zarejestruj się</a></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </div>
    <div class="page-content">
        @Yield('content')
        <div id="contact-content">
            <div class="section-heading">
                <h1>ASG<br><em>Guns</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum.
                    <br>Phasellus luctus odio eget dui imperdiet.</p>

            </div>

        </div>
        </section>
        <section class="footer">
            <p>Copyright &copy; 2019 Company Name

                . Design: TemplateMo</p>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')

    </script>

    <script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event) {
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }

    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    </div>
</body>

</html>
