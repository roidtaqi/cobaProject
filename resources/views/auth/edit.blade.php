@extends('layouts.logreg')

@section('content')
<div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <br>
                    <div class="signup-form">
                        <h2 class="form-title">Akun Dashboard</h2>
                        <form method="POST" class="register-form" id="register-form">
						@csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name"  placeholder="Nama Anda" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email Anda" required/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_confirmation" id="password" placeholder="Konfirmasi Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
                            </div>
                        </form>
                        <br>
                        @auth
                        <a href="logout" class="btn btn-danger">Logout</a>
                        @endauth
                    </div>
                    <div class="signup-image">
                        <figure class=""><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>        
@endsection

@section ('bawahan')
    @include ('bawahan')
@stop