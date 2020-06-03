@extends('layouts.app', ['page' => __('Pengelola User'), 'pageSlug' => 'users'])

@section('content')
<h2>Detail Data Pengguna</h2>
	<table class="table table-striped">
		<tr>
			<th>Nama Pengguna</th>
			<td>{{ $user->name }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{ $user->email }}</td>
		</tr>
		<tr>
			<th>Nomor HP</th>
			<td>{{ $user->no_hp }}</td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td>{{ $user->alamat }}</td>
		</tr>
		<tr>
			<th>Status Verifikasi</th>
			<td>{{ $user->status_verified }}</td>
		</tr>
		<tr>
			<th>Foto KTP</th>
            <td>
                <img src="{{ url('uploads') }}/{{ $user->file }}"/>
                @empty($user->file)
						User Belum Upload Foto KTP
                    @endempty

            </td>
		</tr>
	</table>
	<div>
		<a href="{{ route('admin.users.index') }}" class="btn btn-primary"><i class="tim-icons icon-minimal-left"></i></a>
	</div>
@endsection
