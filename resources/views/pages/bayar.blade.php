@extends('layouts.template')

@section ('header')
    @include ('header')
@stop

@section('content')

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Konfirmasi Pembayaran</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <div class="container" style="padding-top:30px;">
     <a class="btn_1 mb-3" href="{{ url('riwayat')}}/{{ $pesanan->id }}"><i class="fas fa-arrow-left"> </i> Kembali Ke Rincian</a>
  </div>

  @isset($pesanan->file)
  <div class="container" align="center" style="padding-top:30px;">

    <b style="font-size: 20pt;">Bukti Pembayaran Telah Diupload!</b>
  </div>
    
@endisset
          @empty($pesanan->file)
          <section class="cart_area padding_top">
    <div class="container">
        <!-- DISINI FORM UPLOAD BUKTI PEMBAYARAN -->
        @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
          {{ $error }} <br/>
          @endforeach
        </div>
        @endif
        <form action="/bayar/proses/{{$pesanan->id}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <Input type="hidden" name="user_id" value="{{ $pesanan->user_id }}">
          <Input type="hidden" name="tanggal" value="{{ $pesanan->tanggal }}">
          <Input type="hidden" name="status" value="{{ $pesanan->status }}">
          <Input type="hidden" name="kode" value="{{ $pesanan->kode }}">
          <Input type="hidden" name="jumlah_harga" value="{{ $pesanan->jumlah_harga }}">
          <Input type="hidden" name="resi" value="{{ $pesanan->resi }}">
          <Input type="hidden" name="kurir" value="{{ $pesanan->kurir }}">
          <Input type="hidden" name="status_kirim" value="{{ $pesanan->status_kirim }}">
					<div class="form-group">
						<b>Upload Bukti Pembayaran</b><br></br>
						<input type="file" name="file">
					</div>
 
					<input type="submit" name="submit" value="Upload" class="btn btn-primary">
        </form>
        </div>
    </section>
                    @endempty
    
  <!--================Cart Area =================-->
  <section class="confirmation_part padding_top">
      <div class="container mb-3">
        <div class="row">
            <div class="col-lg-8">
              <div class="order_details_iner">
                <h3>Rincian Pesanan</h3>
                <table class="table table-borderless mt-3">
                  <thead>
                   <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php $no = 1; ?>
                      @foreach($pesanan_details as $pd)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ url('uploads') }}/{{ $pd->barang->gambar }}" width="100" /></td>
                        <td>{{ $pd->barang->namabarang }}</td>
                        <td>{{ $pd->jumlah }} unit</td>
                        <td align="left">Rp. {{ number_format($pd->barang->harga) }}</td>
                        <td align="left">Rp. {{ number_format($pd->jumlah_harga) }}</td>
                      </tr>

                      @endforeach

                      <tr>
                        <td colspan="5" align="right"><strong>Total Harga  : </strong></td>
                        <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                      </tr>
                      <tr>
                        <td colspan="5" align="right"><strong>Transfer  : </strong></td>
                        <td><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                      </tr>
                      <tr>
                        <td colspan="5" align="right"><strong>Total Bayar : </strong></td>
                        <td><strong>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</strong></td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>

        <div class="col-lg-4" style="margin-top: 50px;">
          <div class="single_confirmation_details">
            <h4>Info Pemesanan</h4>
            <hr>
            <ul>
              <li>
                <p>ID Pemesanan</p><span>: {{ $pesanan->id }}</span>
              </li>
              <li>
                <p>Kode Transaksi</p><span>: {{ $pesanan->kode }}</span>
              </li>
              <li>
                <p>Total Bayar</p><span>: <b>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}<b></span>
              </li>
              <li>
                <p>Rekening Transfer</p><span>: <b>BRI 6392019373 a/n PT Symfony<b></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



    <section class="cart_area padding_top">
    <div class="container">
        <!-- DISINI FORM UPLOAD BUKTI PEMBAYARAN -->

        </div>
    </section>
    
     



  <br><br><br>
  <!--================End Cart Area =================-->
@stop

@section ('footer')
    @include ('footer')
@stop