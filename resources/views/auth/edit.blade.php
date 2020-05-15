@extends('layouts.logreg')

@section('content')
<div class="main">
        <section class="signup">
            <div class="container">
                <a class="btn btn-primary mt-4 ml-3" href="{{ url('/') }}"><i class="fas fa-arrow-left"></i>  Kembali ke Halaman Utama</a>
                <div class="signup-content">
                    <br>
                    <div class="signup-form">
                        <h1 class="form-title" align="center">Akun Dashboard</h1>
                        <hr>
                        <br>

                        <h4 align="center"><strong>Informasi Akun</strong></h4>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Nama</td>
                            <td width="5">:</td>
                            <td>{{ old('name', auth()->user()->name) }}</td>
                        </tr>    
                        <tr>
                            <td>Email</td>
                            <td width="5">:</td>
                            <td>{{ old('email', auth()->user()->email) }}</td>
                        </tr>
                        <tr>
                            <td>No. Handphone</td>
                            <td width="5">:</td>
                            <td>{{ old('no_hp', auth()->user()->no_hp) }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td width="5">:</td>
                            <td>{{ old('alamat', auth()->user()->alamat) }}</td>
                        </tr>  

                        </tbody>
                    </table>
                    <br><br>

                <!-- Form Edit Profile -->
                    <h4 align="center"><strong>Edit Profile</strong></h4>
                       <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                          @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <h6>Nama Lengkap : </h6>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                               <h6>Email : </h6>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                             <div class="form-group{{ $errors->has('no_hp') ? ' has-danger' : '' }}">
                               <h6>No. Handphone : </h6>
                                <input type="no_hp" name="no_hp" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" placeholder="{{ __('No. Handphone') }}" value="{{ old('no_hp', auth()->user()->no_hp) }}">
                                @include('alerts.feedback', ['field' => 'no_hp'])
                            </div>
                             <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                               <h6>Alamat : </h6>
                                <textarea type="alamat" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat') }}">{{ old('alamat', auth()->user()->alamat) }}</textarea>
                                @include('alerts.feedback', ['field' => 'alamat'])
                            </div>
                            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
					        {{ csrf_field() }}
                            
                            <div class="form-group">
                                <b>Upload KTP</b><br/>
                                <input type="file" name="file">
                            </div>
                            <br>
                             <button type="submit" class="btn btn-fill btn-primary">{{ __('Ubah Profil') }}</button>
                            <br>
                            <br>
                        </form>

                            <h4><strong>Ubah Password</strong></h4>
                            <hr>

                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">

                        <h6>Password Saat Ini : </h6>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password Saat Ini') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                         <h6>Password Baru : </h6>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password Baru (min. 8 karakter)') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                         <h6>Konfirmasi Password Baru : </h6>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Konfirmasi Password Baru') }}" value="" required>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Ubah Password') }}</button>
                        <!-- <span>
                            @auth
                            <a href="logout" class="btn btn-danger" style="margin-left: 100px;">Logout Akun</a>
                             @endauth
                        </span> -->
                </form>
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

