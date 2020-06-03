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
						<button type="button" class="btn btn-danger float-left" style="margin-left: 5px" data-toggle="modal" data-target="#delete"><i class="tim-icons icon-trash-simple"></i></button>
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

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="text-warning" id="exampleModalLabel">PERINGATAN!</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" id="barang/{{ $barang->id }}">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
		Apakah anda yakin ingin menghapus barang?
		<br><br>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
		<a href="{{ route('barang.destroy', $barang->id) }}"></a>
		<button type="submit" class="btn btn-warning">Saya yakin</button>
		</form>
      </div>
    </div>
  </div>
</div>
@endsection
