<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Registro</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .login-brand img {
            width: 100px;
            border-radius: 50%;
        }

        .card-primary {
            border-color: #007bff;
        }

        .card-primary .card-header {
            background-color: #007bff;
            color: white;
        }

        .simple-footer {
            margin-top: 10px;
        }
    </style>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="login-brand text-center">
                            {{-- <img src="assets/img/stisla-fill.svg" alt="logo" class="shadow-light"> --}}
                        </div>

                        <div class="card card-primary">
                            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="tab-login" href="{{ route('login') }}" role="tab"
                                        aria-controls="pills-login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-register" href="{{ route('register') }}"
                                        role="tab" aria-selected="false">Registrarse</a>
                                </li>
                            </ul>

                            <div class="card-body">

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                        <input id="name" class="form-control" type="text" name="name"
                                            value="{{ old('name') }}" required autofocus autocomplete="name">
                                        @if ($errors->has('name'))
                                            <div class="text-danger mt-2">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('Correo') }}</label>
                                        <input id="email" class="form-control" type="email" name="email"
                                            value="{{ old('email') }}" required autocomplete="username">
                                        @if ($errors->has('email'))
                                            <div class="text-danger mt-2">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                        <input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="new-password">
                                        @if ($errors->has('password'))
                                            <div class="text-danger mt-2">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label for="password_confirmation"
                                            class="form-label">{{ __('Confirmar Contraseña') }}</label>
                                        <input id="password_confirmation" class="form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password">
                                        @if ($errors->has('password_confirmation'))
                                            <div class="text-danger mt-2">
                                                {{ $errors->first('password_confirmation') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <a class="text-decoration-underline text-muted" href="{{ route('login') }}">
                                            {{ __('Ir al Login') }}
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="simple-footer text-center">
                            Copyright &copy; Grupo 1-5
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>
