<!-- Navigation -->
<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container-fluid container-semi-fluid nav__container">
            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="https://deothemes.com/envato/margin/html/index.html" class="logo-container flex-child">
                        <img class="logo" src="{{asset('img/logo.svg')}}" alt="logo">
                    </a>

                    <!-- Mobile toggle -->
                    <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                    </button>
                </div>

                <!-- Navbar -->
                <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                    <ul class="nav__menu">
                        <li class="active">
                            <a href="{{route('home')}}">Главное</a>
                        </li>
                        <li>
                            <a href="#offers">Офферы</a>
                        </li>
                        <li>
                            <a class="singUp" role="button" data-toggle="modal" data-target="#login-modal">Регистрация</a>
                        </li>
                        <li>
                            <a id="login"  role="button" data-toggle="modal" data-target="#login-modal">Авторизация</a>
                        </li>
                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->

                <div class="modal fade text-center py-5 my-model" id="loginModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="top-strip"></div>
                                <h3 class="pt-5 mb-0 text-secondary">Авторизация</h3>
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="input-group mb-3 w-75 mx-auto">
                                        <input type="email" class="form-control" placeholder="Email" aria-describedby="button-addon1" required>
                                        <input type="password" class="form-control" placeholder="Пароль"  aria-describedby="button-addon1" required>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" 'checked'>
                                        <br>
                                        <a class="h2" id="resetpassword">Востановление пароля</a>
                                        <p>
                                            @if ($errors->has('password') || $errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Вы ошиблись либо в пароле либо в email.</strong>
                                                </span>
                                            @endif
                                        </p>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" id="button-addon1">Войти</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom-strip"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade text-center py-5 my-model" id="singUpModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="top-strip"></div>
                                <h3 class="pt-5 mb-0 text-secondary">Регистрация</h3>
                                <form method="POST" id="singUpForm" action="{{ route('register') }}">
                                  @csrf
                                    <div class="input-group mb-3 w-75 mx-auto">
                                        <input name="first_name" type="text" class="form-control" placeholder="Имя" aria-describedby="button-addon2" required>
                                        <input name="last_name" type="text" class="form-control" placeholder="Фамилия" aria-describedby="button-addon2" required>
                                        <input name="email" type="email" class="form-control" placeholder="email" aria-describedby="button-addon2" required>
                                        <input name="password" id="password" type="password" class="form-control" placeholder="Пароль"  aria-describedby="button-addon2" required>
                                        <input name="password_confirmation" id="password-confirm" type="password" placeholder="Повторите пароль" class="form-control"  aria-describedby="button-addon2" name="password_confirmation" required>
                                        <p id="textSingUp"></p>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-modal" id="singUp" type="button" id="button-addon2">Зарегистрироваться</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom-strip"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade text-center py-5 my-model" id="resetpasswordModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="top-strip"></div>
                                <h3 class="pt-5 mb-0 text-secondary">Востановление пароля</h3>
                                <form method="POST" action="{{ route('password.email') }}" id="resetPasswordForm">
                                  @csrf
                                    <div class="input-group mb-3 w-75 mx-auto">
                                        <input name="email" type="email" class="form-control" placeholder="email" required>
                                        <p id="textResetPassword"></p>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-modal" type="button" id="resetPasswordButton">Востановление пароля</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom-strip"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav__btn-holder nav--align-right">
                </div>

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header> <!-- end navigation -->

<!-- Triangle Image -->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 600 480" style="enable-background:new 0 0 600 480;" xml:space="preserve" class="triangle-img triangle-img--align-right">
    <g>
        <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z"
            fill="url(#img1)"></path>
        <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z"
            fill="url(#triangle-gradient)" fill-opacity="0.7"></path>
    </g>
    <defs>
        <pattern id="img1" patternUnits="userSpaceOnUse" width="500" height="500">
            <image xlink:href="{{asset('img/hero.jpg')}}" x="50" y="70" width="500" height="500"></image>
        </pattern>

        <lineargradient id="triangle-gradient" y2="100%" x2="0" y1="50%" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#4C86E7"></stop>
            <stop offset="1" stop-color="#B939E5"></stop>
        </lineargradient>
    </defs>
</svg>

<script>
    @if($errors->has('password') || $errors->has('email'))
        var errorLogin = {{ $errors->has('password') || $errors->has('email') }};
    @else
        var errorLogin = '';
    @endif
</script>