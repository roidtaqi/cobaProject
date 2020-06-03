@extends('layouts.app', ['pageSlug' => 'users'])

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile {{ $user -> name }}</h5>
              </div>
              <div class="card-body">
              <form action="{{ route('admin.users.update', $user) }}" method="POST">
              {{ method_field('POST') }}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Nama Lengkap</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="status_verfied">Status Verfikasi</label>
                      <input id="status_verfied" type="text" class="form-control @error('status_verfied') is-invalid @enderror" name="status_verfied" value="{{ $user->status_verfied }}" placeholder="Terverifikasi / Belum Terverfikasi" required autofocus>
                          @error('status_verfied')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  @csrf
                  {{ method_field('PUT') }}
                    @foreach ($roles as $role)
                    <div class="form-check">
                            <label class="form-check-label" >{{ $role->name }}
                              <input class="form-check-input" name="roles[]" type="checkbox" value="{{ $role->id }}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          @endforeach
                          <br>
                      <button type="submit" class="btn btn-fill btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Sympfony
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Sympfony</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection