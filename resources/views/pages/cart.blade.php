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
              @forelse($pesanan_details as $pd)
              <tr>
                <td>{{ $no++ }}</td>
                <td><img src="{{ url('uploads') }}/{{ $pd->barang->gambar }}" width="100" /></td>
                <td>{{ $pd->barang->namabarang }}</td>
                <td>{{ $pd->jumlah }} unit</td>
                <td align="left">Rp. {{ number_format($pd->barang->harga) }}</td>
                <td align="left">Rp. {{ number_format($pd->jumlah_harga) }}</td>
                <td>
                 
                   <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusCart">
                        <i class="fas fa-trash"></i>
                      </button>

                      <!-- The Modal -->
                      <div class="modal" id="hapusCart">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Peringatan</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              Anda Yakin akan menghapus barang ?
                            </div>
                           <form action="{{ url('cart') }}/{{ $pd->id }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-danger">Hapus</button>
                              <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                 
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
                <td colspan="1"></td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner">
            <a class="btn_1" style="float: left;" href="{{ url('/semua') }}"> <i class="fas fa-store"></i> Lanjut Berbelanja</a>
            <a class="btn_3 checkout_btn_1 mr-5" style="float: right;" href="{{ url('confirm-cart') }}">Proses Checkout  <i class="fas fa-cash-register"></i></a>
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