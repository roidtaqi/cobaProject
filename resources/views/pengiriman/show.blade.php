@extends('layouts.app', ['page' => __('Pengiriman'), 'pageSlug' => 'pengiriman'])

@section('content')
<h2>Detail Data Pesanan</h2>
	<table class="table table-striped">
        <tr>
			<th>Nama Pelanggan</th>
			<td>{{ $pesanan->user_id }}</td>
		</tr>
		<tr>
			<th>Kurir</th>
			<td>{{ $pesanan->kurir }}</td>
        </tr>
        <tr>
			<th>Resi</th>
			<td>{{ $pesanan->resi }}</td>
        </tr>
		<tr>
			<th>Jumlah Harga</th>
			<td>{{ $pesanan->jumlah_harga }}</td>
        </tr>
        <tr>
			<th>Status Kirim</th>
			<td>{{ $pesanan->status_kirim}}</td>
        </tr>

  </table>
  <div>
		<a href="/pengiriman" class="btn btn-primary"><i class="tim-icons icon-minimal-left"></i></a>
	</div>
@endsection
