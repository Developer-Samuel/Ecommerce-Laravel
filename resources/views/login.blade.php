@extends('master')
@section('content')

    <main class="main-login-signup">
        <h1 class="main-login-signup__title-login">Prihlásenie</h1>
        <form action="/login" class="login-form" method="POST">
            @csrf
            <div class="login-form__data">
                <label for="email">E-mail:</label><br>
                <input name="email" class="input-text" type="email" value="{{old('email')}}"><br><br>
                <label for="password">Password:</label><br>
                <input name="password" class="input-text" type="password" value="{{old('password')}}"><br><br>
                <label for="remember"> Remember Me</label><br>
                <input type="checkbox" name="remember" id="remember"><br>
            </div>
            <div class="login-form__logreg" id="login-logreg">
                <span>Don't have an account? <a href="/register">Register here</a></span>
            </div>
            <input name="login" class="login-form__logregBtn" id="login-btn" type="submit" value="Prihlasiť sa">
        </form>

        <aside class="aside-darkmode">
            <div class="slideThree">
                <input onclick="darkMode()" type="checkbox" value="None" id="slideThree" name="check" />
                <label for="slideThree"></label>
            </div>
        </aside>
        <a href="#" class="go-top"><i class="arrow up"></i></a>

    </main>

@endsection



