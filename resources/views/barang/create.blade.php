@extends('layouts.app', ['page' => __('Barang'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <h2>Tambah Barang</h2>

<form action="{{ url('barang') }}" method="POST" enctype="multipart/form-data">
  @csrf <!--pengiriman data ke session error 419-->
  <div class="form-group">
    <label for="kodebarang" class="control-label">Kode Barang</label>
    <input type="text" name="kodebarang" id="kodebarang" class="form-control">
  </div>
  <div class="form-group">
    <label for="namabarang" class="control-label">Nama Barang</label>
    <input type="text" name="namabarang" id="namabarang" class="form-control">
  </div>
  <div class="form-group">
    <label for="harga" class="control-label">Harga</label>
    <input type="text" name="harga" id="harga" class="form-control" placeholder="Rp1.000.000,00">
  </div>
  <div class="form-group">
    <label for="status" class="control-label">Stok</label>
    <input type="text" name="status" id="status" class="form-control">
  </div>
  <div class="form-group">
    <label for="gambar"><p class="text-info">Klik Disini Untuk Upload Gambar</p></label>
    <input type="file" name="gambar">
    {{ $errors->first('gambar') }}
  </div>
  <form action="/upload/proses" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          
  {{ method_field('POST') }}
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
  <div class="form-group">
    <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Simpan">
  </div>

</form>
        </div>
      </div>
    </div>
  </div>
@endsection
