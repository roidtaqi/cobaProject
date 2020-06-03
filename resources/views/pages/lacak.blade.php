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
              <h2>Tracking Pengiriman</h2>
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
       <a class="btn_1 mb-3" href="{{ url('riwayat')}}/{{ $pesanan->id }}"><i class="fas fa-arrow-left"> </i> Kembali Ke Rincian</a>
       <br><br>
      <h3 style="text-align: center;">Status Pengiriman</h3>
      <hr>
      <div class="cart_inner">
        <div class="table-striped table-responsive">
          <table class="table" style="text-align: center;">
            <thead>
              <tr>
                <th scope="col">ID Pesanan</th>
                <th scope="col">Nomor Resi</th>
                <th scope="col">Nama Kurir</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->resi }}</td>
                <td>{{ $pesanan->kurir }}</td>
                <td>
                  @if($pesanan->status_kirim == 0)
                  Pesanan Dalam Proses Konfirmasi
                  @elseif($pesanan->status_kirim == 1)
                  Paket Telah Dipacking
                  @elseif ($pesanan->status_kirim == 2)
                  Paket Dikirim Menuju Transit Hub
                  @elseif ($pesanan->status == 3)
                  Paket Menuju Alamat Penerima
                  @elseif ($pesanan->status == 4)
                  Paket Telah Diterima
                  @endif
                </td>
                
              </tr>
            </tbody>
          </table>
          <!-- <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="/">Lanjut Berbelanja</a>
            <a class="btn_1 checkout_btn_1" href="{{ url('confirm-cart') }}">Proses Checkout</a>
          </div> -->
        </div>
      </div>
  </section>

  <section class="confirmation_part padding_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="single_confirmation_details">
              <h4>Alamat Pengiriman</h4>
              <hr>
              <ul>
                <li>
                  <p>Nama Penerima</p><span>: {{ old('name', auth()->user()->name) }}</span>
                </li>
                <li>
                  <p>Alamat</p><span>: {{ old('alamat', auth()->user()->alamat) }}</span>
                </li>
                <li>
                  <p>No. Hp Penerima</p><span>: {{ old('no_hp', auth()->user()->no_hp) }}</span>
                </li>
                <li>
                  <p>Email</p><span>:  {{ old('email', auth()->user()->email) }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

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