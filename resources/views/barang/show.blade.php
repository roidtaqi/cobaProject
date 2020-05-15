@extends('layouts.app', ['page' => __('Barang'), 'pageSlug' => 'tables'])

@section('content')
<h2>Detail Data Barang</h2>
	<table class="table table-striped">
		<tr>
			<th>Kode Barang</th>
			<td>{{ $barang->kodebarang }}</td>
		</tr>
		<tr>
			<th>Nama Barang</th>
			<td>{{ $barang->namabarang }}</td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>{{ $barang->kategori }}</td>
		</tr>
		<tr>
			<th>Harga</th>
			<td>{{ $barang->harga }}</td>
		</tr>
		<tr>
			<th>Stok</th>
			<td>{{ $barang->stok }}</td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td>{{ $barang->keterangan }}</td>
		</tr>
		<tr>
			<th>Gambar Barang</th>
			<td><img src="{{ url('uploads') }}/{{ $barang->gambar }}"/></td>
		</tr>
	</table>
	<div>
		<a href="/barang" class="btn btn-primary"><i class="tim-icons icon-minimal-left"></i></a>
	</div>
@endsection
