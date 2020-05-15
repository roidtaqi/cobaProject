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
              <h2>Keranjang</h2>
              <p>Home <span>-</span>Keranjang</p>
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
      <div class="cart_inner">
        <div class="table-striped table-responsive">
          <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No. </th>
                <th colspan="2" style="text-align: center;">Produk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @forelse($pesanan_details as $pd)
              <tr>
                <td>{{ $no++ }}</td>
                <td><img src="{{ url('uploads') }}/{{ $pd->barang->gambar }}" width="100" /></td>
                <td>{{ $pd->barang->namabarang }}</td>
                <td>{{ $pd->jumlah }} buah</td>
                <td align="left">Rp. {{ number_format($pd->barang->harga) }}</td>
                <td align="left">Rp. {{ number_format($pd->jumlah_harga) }}</td>
                <td>
                  <form action="{{ url('cart') }}/{{ $pd->id }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Anda yakin akan menghapus data ?');">
                        <i class="fa fa-trash"></i>
                    </button>

                  </form>
                </td>
              </tr>

              @empty
              <tr>
                <td colspan="6" align="center"><strong> Tidak ada Data Belanjaan </strong></td>
              </tr>
              @endforelse

              <tr>
                <td colspan="5" align="right"><strong>Total  : </strong></td>
                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="/">Lanjut Berbelanja</a>
            <a class="btn_1 checkout_btn_1" href="{{ url('confirm-checkout') }}">Proses Checkout</a>
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