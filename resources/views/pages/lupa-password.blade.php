@extends('layouts.logreg')

@section('content')
<div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                <div class="signin-content">
                    <div class="signin-image">
                      <figure><img src="images/lupa.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="forgot-form" style="padding-right: 50px">
                    <br>
                        <h2 class="form-title">Lupa Password</h2>
                            <form method="POST" class="forgot-form" id="forgot-form">
                                {{ method_field('POST') }}
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="email"> <i class="zmdi zmdi-email"> </i></label>
                                <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" required autocomplete="email"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>EMAIL YANG ANDA MASUKKAN SALAH</strong>
                                    </span>
                                @enderror
                            </div>
                            <div><h5 style="font-style: oblique; font-family: serif; font-size: 15px;">Dengan mengklik "Reset Password" kami akan mengirimkan tautan untuk mengatur ulang kata sandi anda</h5></div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Reset Password"/>
                            </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section ('bawahan')
    @include ('bawahan')
@stop
