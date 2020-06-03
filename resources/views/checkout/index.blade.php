@extends('layouts.app', ['page' => __('Pembelian'), 'pageSlug' => 'checkout'])

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Pembelian</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @if(!empty($pesanan_detail))
		<table class="table">
			<thead>
			<tr>
                <th scope="col">User ID</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Kode</th>
				<th scope="col">Jumlah Harga</th>
				<th scope="col">Bukti</th>
				<th scope="col">Detail</th>
              </tr>
			</thead>
			<tbody>
				<?php foreach ($pesanan_detail as $p): ?>
				  <tr>
                    <td>{{ $p->pesanan->user_id }}</td>
                    <td>{{ $p->pesanan->tanggal }}</td>
                    <td>{{ $p->pesanan->status }}</td>
					<td>{{ $p->pesanan->kode }}</td>
					<td>{{ $p->pesanan->jumlah_harga }}</td>
					<td>
					@isset($p->pesanan->file)
					{{ $p->pesanan->file }}
@endisset
					@empty($p->pesanan->file)
						Bukti Pembayaran Belum Diupload
                    @endempty
					</td>

					<td><a name="detail" id=""class="btn btn-info float-left" href="{{url('pembelian/'.$p->id) }}" role="button"><i class="tim-icons icon-alert-circle-exc"></i></a></td>
                  </tr>
				<?php endforeach ?>
			</tbody>
		</table>
		@else
			<p>Tidak ada data</p>
		@endif
                </div>
              </div>
            </div>
		  </div>
@endsection