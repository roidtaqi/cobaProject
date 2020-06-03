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
              <h2>Detail Pemesanan</h2>
              <!-- <p>Home <span>-</span>Keranjang</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================ confirmation part start =================-->
  <section class="confirmation_part padding_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <h3><span>Terima Kasih. Pesanan Anda Telah Kami Terima<span></h3>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
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
                <p>Status pemesanan</p><span>:</span> 
                 <u>
                  @if($pesanan->status == 1)
                  Menunggu Pembayaran
                  @elseif ($pesanan->status == 2)
                  Pesanan Sedang Diproses
                  @elseif ($pesanan->status == 3)
                  Pesanan Telah Selesai
                  @endif
                </u>
              </li>
              <li>
                <p>Total Bayar</p><span>: Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</span>
              </li>
              <li>
                <p>Rekening Transfer</p><span>: BRI 6392019373 a/n Paparara</span>
              </li>
              <li>
                <a href="{{ url('bayar') }}/{{ $pesanan->id }}" class="btn_2 mt-4" style="margin-left: -230px;"><i class="fas fa-tags"></i> Konfirmasi Bayar</a>
                <a href="{{ url('lacak') }}/{{ $pesanan->id }}" class="btn_2 mt-4 ml-4"><i class="fas fa-shipping-fast"></i> Lacak Pesanan</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Alamat Penagihan</h4>
            <ul>
              <li>
                <p>Jalan</p><span>: </span>
              </li>
              <li>
                <p>Kota</p><span>: </span>
              </li>
              <li>
                <p>Provinsi</p><span>: </span>
              </li>
              <li>
                <p>Kode Pos</p><span>: </span>
              </li>
            </ul>
          </div>
        </div> -->
        <div class="col-lg-6 col-lx-4">
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
      <div class="row">
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
      <br>
      <!-- <form action="/upload/proses" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
                                
          <div class="form-group">
            <b>Upload Bukti Pembayaran</b>
            <input type="file" name="file">
          </div> -->
        <br>
        <div class="col-lg-12" align="center">
          <a href="/semua" class="btn_3 mb-4"><i class="fas fa-shopping-basket"></i>Ingin Berbelanja Lagi ?</a>
        </div>
    </div>
  </section>
  <!--================ confirmation part end =================-->
@stop

@section ('footer')
    @include ('footer')
@stop