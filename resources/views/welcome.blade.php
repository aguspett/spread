<!DOCTYPE html>
<html>
    <head>
        <title>Spread Electric S.A.</title>
    <link href="css/login.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <img src="/images/logo.png" class="profile-img-card" alt="Logo Spread">
                   <p id="profile-name" class="profile-name-card">Inicie sesión por favor</p>
                <form class="form-signin" role="form" method="POST" action="{{ url('/') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div id="remember"  class="checkbox">
                        <label>
                            <input type="checkbox" name="remeberme" value="remember-me"> Recordarme
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sessión</button>
                </form><!-- /form -->
                <a href="{{ url('/password/email') }}" class="forgot-password">
                   Olvide mi contraseña
                </a>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div><!-- /card-container -->
        </div>
    </body>
</html>
