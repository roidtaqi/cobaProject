@extends('layouts.app', ['page' => __('Pengiriman'), 'pageSlug' => 'pengiriman'])

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Pengiriman</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @if(!empty($pesanan))
		<table class="table">
			<thead>
			<tr>
        <th scope="col">User ID</th>
        <th scope="col">Kode</th>
				<th scope="col">Resi</th>
				<th scope="col">Jumlah Harga</th>
        <th scope="col">Status Kirim</th>
				<th scope="col">Aksi</th>
      </tr>
			</thead>
			<tbody>
				<?php foreach ($pesanan as $p): ?>
				  <tr>
              <td>{{ $p->user_id }}</td>
              <td>{{ $p->kode }}</td>
              <td>{{ $p->resi }}</td>
              <td>{{ $p->jumlah_harga }}</td>
              <td>
                  @if($p->status_kirim == 0)
                  Pesanan Dalam Proses Konfirmasi
                  @elseif($p->status_kirim == 1)
                  Paket Telah Dipacking
                  @elseif ($p->status_kirim == 2)
                  Paket Dikirim Menuju Transit Hub
                  @elseif ($p->status_kirim == 3)
                  Paket Menuju Alamat Penerima
                  @elseif ($p->status_kirim == 4)
                  Paket Telah Diterima
                  @endif
              </td>
                    <td>
                        <a name="detail" id=""class="btn btn-info float-left" href="{{url('pengiriman/'.$p->id) }}" role="button"><i class="tim-icons icon-alert-circle-exc"></i></a>
                        <a name="edit" style="margin-left: 5px" id=""class="btn btn-secondary float-left" href="{{ route('pengiriman.edit', $p->id) }}" role="button"><i class="tim-icons icon-pencil"></i></a>
                    </td>
                  </tr>
				<?php endforeach ?>
			</tbody>
		</table>
		@else
			<p>Tidak ada data</p>
    @endif
    <div class="table-nav">
	<div class="jumlah-data">
		<strong> Jumlah Pengiriman : {{ $jumlah_pesanan }}</strong> <br>
	</div>
	<br>
	<div class="paging">
		{{ $pesanan->links() }}
	</div>
	</div>
                </div>
              </div>
            </div>
		  </div>
@endsection
