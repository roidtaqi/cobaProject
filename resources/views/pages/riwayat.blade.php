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
              <h2>Riwayat Pemesanan</h2>
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
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No. </th>
                <th scope="col">ID Pesanan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Total Harga</th>
                <th scope="col" style="text-align: center;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @forelse($pesanans as $ps)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ps->id }}</td>
                <td>{{ $ps->tanggal }}</td>
                <td>
                  @if($ps->status == 1)
                  Menunggu Pembayaran
                  @elseif ($ps->status == 2)
                  Pesanan Sedang Diproses
                  @elseif ($ps->status == 3)
                  Pesanan Telah Selesai
                  @endif
                </td>
                <td>Rp. {{ number_format($ps->jumlah_harga+$ps->kode) }}</td>
                <td align="center">
                  <a href="{{ url('riwayat') }}/{{ $ps->id }}" class="btn btn-primary btn-sm"> <i class="fa fa-info"></i> Detail</a>
                </td>
              </tr>

               @empty
              <tr>
                <td colspan="6" align="center"><strong> Tidak ada Riwayat Belanjaan </strong></td>
              </tr>

             @endforelse
            </tbody>
          </table>
          <p align="right">Note : Pastikan Anda Memiliki akun untuk melihat detail pemesanan !</p>
          <!-- <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="/">Lanjut Berbelanja</a>
            <a class="btn_1 checkout_btn_1" href="{{ url('confirm-cart') }}">Proses Checkout</a>
          </div> -->
        </div>
      </div>
      @isset($pesanans)
      @endisset
      @empty($pesanans)
      <form action="{{ route('riwayat.proses') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
      @endempty
  </section>
  <br><br><br>
  <!--================End Cart Area =================-->
@stop

@section ('footer')
    @include ('footer')
@stop