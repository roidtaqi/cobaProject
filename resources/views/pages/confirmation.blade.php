@extends('template')

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
              <p>Home <span>-</span> Konfirmasi Pembayaran</p>
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
            <span>Terima Kasih. Pesanan Anda Telah Kami Terima</span>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Info Pemesanan</h4>
            <ul>
              <li>
                <p>ID Order</p><span>:</span>
              </li>
              <li>
                <p>Data</p><span>:</span>
              </li>
              <li>
                <p>Total</p><span>: IDR 0</span>
              </li>
              <li>
                <p>Pembayaran</p><span>:</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
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
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Alamat Pengiriman</h4>
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
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>Rincian Pesanan</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Produk</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
               <!--  <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                  <th>x02</th>
                  <th> <span>$720.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">Subtotal</th>
                  <th> <span>$2160.00</span></th>
                </tr>
                <tr>
                  <th colspan="3">shipping</th>
                  <th><span>flat rate: $50.00</span></th>
                </tr>
              </tbody>
              <tfoot>
                <tr> -->
                  <!-- <th scope="col" colspan="3">Jumlah</th>
                  <th scope="col">Total</th>
                </tr> -->
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ confirmation part end =================-->
@stop

@section ('footer')
    @include ('footer')
@stop