@extends('layouts.app', ['page' => __('Pembelian'), 'pageSlug' => 'checkout'])

@section('content')
<h2>Detail Data Pesanan</h2>
	<table class="table table-striped">
		<tr>
			<th>Kode Barang</th>
			<td>{{ $pesanan_detail->barang_id }}</td>
		</tr>
		<tr>
			<th>Kode Pesanan</th>
			<td>{{ $pesanan_detail->pesanan_id }}</td>
		</tr>
		<tr>
			<th>Jumlah</th>
			<td>{{ $pesanan_detail->jumlah }}</td>
		</tr>
		<tr>
			<th>Subtotal</th>
			<td>{{ $pesanan_detail->jumlah_harga }}</td>
    </tr>
    <tr>
    <th>Status Pengiriman</th>
    <td>
    @if($pesanan_detail->pesanan->status == 1)
                  Menunggu Pembayaran
                  @elseif ($pesanan_detail->pesanan->status == 2)
                  Pesanan Sedang Diproses
                  @elseif ($pesanan_detail->pesanan->status == 3)
                  Pesanan Telah Selesai
                  @endif
                  </td>
    </tr>
    <tr>
			<th>Status Pengiriman</th>
      <td>
      @if($pesanan_detail->pesanan->status_kirim == 0)
                  Pesanan Dalam Proses Konfirmasi
                  @elseif($pesanan_detail->pesanan->status_kirim == 1)
                  Paket Telah Dipacking
                  @elseif ($pesanan_detail->pesanan->status_kirim == 2)
                  Paket Dikirim Menuju Transit Hub
                  @elseif ($pesanan_detail->pesanan->status_kirim == 3)
                  Paket Menuju Alamat Penerima
                  @elseif ($pesanan_detail->pesanan->status_kirim == 4)
                  Paket Telah Diterima
                  @endif
      </td>
    </tr>
  </table>
  
  <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Barang Yang Dipesan</h4>
              </div>
                <div class="card-body ">
                    <div class="table-responsive">
                    <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>{{ $pesanan_detail->barang->kodebarang }}</td>
                    <td>{{ $pesanan_detail->barang->namabarang }}</td>
                    <td>{{ $pesanan_detail->barang->kategori }}</td>
                    <td>{{ $pesanan_detail->barang->harga }}</td>
                      </tr>
                    </tbody>
                  </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Pesanan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                    <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Tanggal Pemesanan</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Jumlah Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>{{ $pesanan_detail->pesanan->user_id }}</td>
                            <td>{{ $pesanan_detail->pesanan->tanggal }}</td>
                            <td>{{ $pesanan_detail->pesanan->kode }}</td>
                            <td>{{ $pesanan_detail->pesanan->jumlah_harga }}</td>
                            </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>

  <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Data Pelanggan</h4>
              </div>
                <div class="card-body ">
                    <div class="table-responsive">
                    <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                      <tr>
                      <th>Nama Pemesan</th>
                      <th>Email Pemesan</th>
                      <th>No Hp Pemesan</th>
                      <th>Alamat</th>
                      <th>Status Verifikasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>{{ $pesanan_detail->pesanan->user->name }}</td>
                      <td>{{ $pesanan_detail->pesanan->user->email }}</td>
                      <td>{{ $pesanan_detail->pesanan->user->no_hp }}</td>
                      <td>{{ $pesanan_detail->pesanan->user->alamat }}</td>
                      <td>{{ $pesanan_detail->pesanan->user->status_verified }}</td>
                      </tr>
                    </tbody>
                  </table>
                    </div>
                    </div>
                    </div>

<table class="table table-striped">
    <tr>
      <th>Bukti Pembayaran</th>
            <td>
                <img src="{{ url('uploads') }}/{{ $pesanan_detail->pesanan->file }}"/>
                  @empty($pesanan_detail->pesanan->file)
                    Pelanggan Belum Upload Bukti Pembayaran
                  @endempty
            </td>
    </tr>
</table>
  <div>
		<a href="/pembelian" class="btn btn-primary"><i class="tim-icons icon-minimal-left"></i></a>
	</div>
@endsection
