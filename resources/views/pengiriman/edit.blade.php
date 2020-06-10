@extends('layouts.app', ['page' => __('Pengiriman'), 'pageSlug' => 'pengiriman'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <h5 class="title">Edit Pengiriman {{ $pesanan -> id }}</h5>
              </div>
              <div class="card-body">
              <form action="{{ route('pengiriman.update', $pesanan) }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              {{ method_field('PATCH') }}
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="user_id">User ID</label>
                      <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $pesanan->user_id }}" required autofocus disabled>
                          @error('user_id')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="kurir">Nama Kurir</label>
                      <input id="kurir" type="text" class="form-control @error('kurir') is-invalid @enderror" name="kurir" value="{{ $pesanan->kurir }}" required autofocus>
                          @error('kurir')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="resi">Resi</label>
                      <input id="resi" type="text" class="form-control @error('resi') is-invalid @enderror" name="resi" value="{{ $pesanan->resi }}" required autofocus>
                          @error('resi')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="jumlah_harga">Jumlah Harga</label>
                      <input id="jumlah_harga" type="text" class="form-control @error('jumlah_harga') is-invalid @enderror" name="jumlah_harga" value="{{ $pesanan->jumlah_harga }}" required autofocus disabled>
                          @error('jumlah_harga')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <div class="form-group">
                      <label for="status_kirim">Status Pengiriman</label>
                      <input id="status_kirim" type="text" class="form-control @error('status_kirim') is-invalid @enderror" name="status_kirim" value="{{ $pesanan->status_kirim }}" required autofocus>
                          @error('status_kirim')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div> -->
                    {{ method_field('PATCH') }}
  <div class="row">
  <div class="col-sm-3">
                    <div class="form-check">
                            <label class="form-check-label" >Pesanan Dalam Proses Konfirmasi
                              <input class="form-check-input" name="status_kirim" id="status_kirim" type="checkbox" value="0" @if($pesanan->status_kirim == 0) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Paket Telah Dipacking
                              <input class="form-check-input" name="status_kirim" id="status_kirim" type="checkbox" value="1" @if($pesanan->status_kirim == 1) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          </div>
                          <div class="col-sm-3">
                          <div class="form-check">
                            <label class="form-check-label" >Paket Dikirim Menuju Transit Hub
                              <input class="form-check-input" name="status_kirim" id="status_kirim" type="checkbox" value="2" @if($pesanan->status_kirim == 2) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Paket Menuju Alamat Penerima
                              <input class="form-check-input" name="status_kirim" id="status_kirim" type="checkbox" value="3" @if($pesanan->status_kirim == 3) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Paket Telah Diterima
                              <input class="form-check-input" name="status_kirim" id="status_kirim" type="checkbox" value="4" @if($pesanan->status_kirim == 4) checked @endif>
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          </div>
                          <br>
                      <div class="row">
                    <div class="col-2">
                    <button type="submit" class="btn btn-fill btn-primary">Update</button>
                    </div>
                    <div class="col-2">
                        <button href="{{ route('pengiriman.index')  }}" class="btn btn-fill btn-danger">Batal</button>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
@endsection
