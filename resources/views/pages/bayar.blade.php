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
						<b>Upload Bukti Pembayaran</b><br/>
						<input type="file" name="file">
					</div>
 
					<input type="submit" name="submit" value="Upload" class="btn btn-primary">
        </form>
        </div>
    </section>
    
     <section class="confirmation_part padding_top">
        <div class="col-lg-12">
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
      </div>
  </section>



  <br><br><br>
  <!--================End Cart Area =================-->
@stop

@section ('footer')
    @include ('footer')
@stop