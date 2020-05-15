@extends('layouts.app', ['page' => __('Barang'), 'pageSlug' => 'tables'])

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h2 class="card-title">Data Barang</h2>
                    </div>
                    <div class="col-4 text-right">
                        <a href="/create" class="btn btn-sm btn-primary">Tambah Barang</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

	@if(!empty($barang_list))
		<table class="table">
			<thead>
				<tr>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Kategori</th>
					<th>Harga</th>
					<th>Stok</th>
					<th class="text-center"> Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($barang_list as $barang): ?>
				<tr>
					<td>{{ $barang->kodebarang }}</td>
					<td>{{ $barang->namabarang }}</td>
					<td>{{ $barang->kategori }}</td>
                    <td>{{ $barang->harga }}</td>
					<td>{{ $barang->stok }}</td>
					<td>
                        <a name="detail" id=""class="btn btn-info float-left" href="{{url('barang/'.$barang->id) }}" role="button"><i class="tim-icons icon-alert-circle-exc"></i></a>
						<a name="edit" style="margin-left: 5px" id=""class="btn btn-secondary float-left" href="{{ route('barang.edit', $barang->id) }}" role="button"><i class="tim-icons icon-pencil"></i></a>
						<form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="float-left" style="margin-left: 5px" id="barang/{{ $barang->id }}">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
						<a href="{{ route('barang.destroy', $barang->id) }}"></a>
						<button class="btn btn-danger" onclick="deleteRow('barang.destroy')" type="submit"><i class="tim-icons icon-trash-simple"></i></button>
						</form>
                    </td>
                    </td>
                </tr>
				<?php endforeach ?>
			</tbody>
		</table>
		@else
			<p>Tidak ada data Barang</p>
	@endif
	<div class="table-nav">
	<div class="jumlah-data">
		<strong> Jumlah Barang : {{ $jumlah_barang }}</strong> <br>
	</div>
	<br>
	<div class="paging">
		{{ $barang_list->links() }}
	</div>
	</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
