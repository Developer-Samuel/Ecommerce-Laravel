@extends('master')
@section('content')

    <main class="main-login-signup">
        <h1 class="main-login-signup__title-signup">Registrácia</h1>
        <form action="/register" class="signup-form" method="POST">
            @csrf
            <div class="signup-form__data">
                <label for="fname">Meno *</label><br>
                <input name="fname" class="input-text" type="text" placeholder="John"><br><br>
                <label for="lname">Priezvisko *</label><br>
                <input name="lname" class="input-text" type="text" placeholder="Smith"><br><br>
                <label for="email">E-mail *</label><br>
                <input name="email" class="input-text" type="email" placeholder="example@gmail.com"><br><br>
                <label for="mobile">Telefonné číslo *</label><br>
                <input name="mobile" class="input-text" type="number" placeholder="+421949025300"><br><br>
                <label for="password">Heslo *</label><br>
                <input name="password" class="input-text" type="password" placeholder="********"><br><br>
                <!--<label for="confirm_password">Potvrdiť Heslo *</label><br>
                <input name="confirm_password" class="input-text" type="password" placeholder="********"><br>-->
            </div>
            <div class="signup-form__logreg" id="signup-logreg">
                <span>Already have an account? <a href="login">Login here</a></span>
            </div>
            <input name="signup" class="signup-form__logregBtn" id="signup-btn" type="submit" value="Zaregistrovať sa">

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

