@extends('layouts.app', ['page' => __('Barang'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <h5 class="title">Edit Barang {{ $barang -> namabarang }}</h5>
              </div>
              <div class="card-body">
              <form action="{{ route('barang.update', $barang) }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              {{ method_field('PATCH') }}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="namabarang">Nama Barang</label>
                      <input id="namabarang" type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{ $barang->namabarang }}" required autofocus>
                          @error('namabarang')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input id="harga" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $barang->harga }}" required autofocus>
                          @error('harga')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="stok">Stok</label>
                      <input id="stok" type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $barang->stok }}" required autofocus>
                          @error('stok')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="gambar"><p class="text-info">Klik Disini Untuk Ubah Gambar</p></label>
                          <input type="file" name="gambar">
                          {{ $errors->first('gambar') }}
                      </div>
                    </div>
                    {{ method_field('PATCH') }}
  <div class="row">
  <div class="col-sm-2">
                    <div class="form-check">
                            <label class="form-check-label" >Ruang Makan
                              <input class="form-check-input" name="kategori" id="kategori" type="checkbox" value="rmakan">
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Ruang Tamu
                              <input class="form-check-input" name="kategori" id="kategori" type="checkbox" value="rtamu">
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                          </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Ruang Kerja
                              <input class="form-check-input" name="kategori" id="kategori" type="checkbox" value="rkerja">
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Kamar Tidur
                              <input class="form-check-input" name="kategori" id="kategori" type="checkbox" value="rkerja">
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-check">
                            <label class="form-check-label" >Dekorasi
                              <input class="form-check-input" name="kategori" id="kategori" type="checkbox" value="rkerja">
                              <span class="form-check-sign">
                                <span class=""></span>
                              </span>
                            </label>
                            </div>
                          </div>
                          </div>
                          <br>
                      <button type="submit" class="btn btn-fill btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>
@endsection
