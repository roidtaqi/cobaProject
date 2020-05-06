@extends('layouts.app', ['page' => __('Barang'), 'pageSlug' => 'tables'])

@section('content')
	<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
				<h2>Data Barang</h2>

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
						<form action="{{ route('barang.destroy', $barang) }}" method="POST" class="float-left" style="margin-left: 5px">
                        @csrf
                        {{ method_field('DELETE') }}
                    	<a href="{{ route('barang.destroy', $barang->id) }}"></a><button type="submit" class="btn btn-danger"><i class="tim-icons icon-trash-simple"></i></button>
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
	<div class="paging">
		{{ $barang_list->links() }}
	</div>
	</div>
    
  					<br>
					<div class="bottom-nav">
						<div>
							<a href="/create" class="btn btn-primary"><i class="tim-icons icon-simple-add"></i></a>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
