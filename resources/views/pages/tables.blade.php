@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <h2>Tambah Barang</h2>

<form action="{{ url('barang') }}" method="POST">
  @csrf <!--pengiriman data ke session error 419-->
  <div class="form-group">
    <label for="kodebarang" class="control-label">Kode Barang</label>
    <input type="text" name="kodebarang" id="nis" class="form-control">
  </div>
  <div class="form-group">
    <label for="nama" class="control-label">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control">
  </div>
  <div class="form-group">
    <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
    <div class="radio">
      <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-Laki
      </label>
    </div>
    <div class="radio">
    <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin"  value="P">Perempuan
    </div>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" id="submit" class="btn btn-primary form-control" value="Simpan">
  </div>

</form>
        </div>
      </div>
    </div>
  </div>
@endsection
