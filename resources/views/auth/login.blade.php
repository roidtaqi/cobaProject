@extends('layouts.logreg')

@section('content')
<div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                      <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <div class="signup-image-link">Tidak punya akun buat<a href="register"> di sini.</a></div>
                    </div>

                    <div class="signin-form">
                      <br>
                        <h2 class="form-title">Masuk</h2>
                            <form method="POST" class="register-form" id="login-form">
                                {{ method_field('POST') }}
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="email"> <i class="zmdi zmdi-email"> </i></label>
                                <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" required autocomplete="email"/>
                                @error('email')
                                    <script>
                                        alert("Email atau password yang anda masukkan salah.");
                                    </script>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" required autocomplete="current-password"/>
                                @error('password')
                                    <script>
                                        alert("Email atau password yang anda masukkan salah.");
                                    </script>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Ingat saya</label>
                            <div class="form-group float-right">
                                <a href="/lupa">Lupa Password</a>
                            </div>
                        </div>
                            <br>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Masuk"/>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
@endsection

@section ('bawahan')
    @include ('bawahan')
@stop
