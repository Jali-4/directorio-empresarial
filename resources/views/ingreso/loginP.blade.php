<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

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
                                    <a class="nav-link active" id="tab-login" href="{{ route('login') }}" role="tab"
                                        aria-controls="pills-login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" role="tab"
                                        aria-controls="pills-register" aria-selected="false">Registrarse</a>
                                </li>
                            </ul>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Correo Electronico</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            tabindex="1" required autofocus value="{{ old('email') }}">
                                        <div class="invalid-feedback">
                                            Ingrese su Correo
                                        </div>

                                        @if ($errors->has('email'))
                                            <code>{{ $errors->first('email') }}</code>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password" class="control-label">Contraseña</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Ingrese su Contraseña
                                        </div>
                                    </div>

                                    @if ($errors->has('password'))
                                        <code>{{ $errors->first('password') }}</code>
                                    @endif

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Ingresar
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
