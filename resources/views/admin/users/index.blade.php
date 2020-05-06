@extends('layouts.app', ['page' => __('Pengelola User'), 'pageSlug' => 'users'])

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Admin | User Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                    <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Peran</th>
                            <th scope="col" class="text-center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user -> id }}</th>
                                <td>{{ $user -> name }}</td>
                                <td>{{ $user -> email }}</td>
                                <td>{{  implode(',', $user -> roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                    
                                <a name="edit" id=""class="btn btn-secondary float-left" href="{{ route('admin.users.edit', $user->id) }}" role="button"><i class="tim-icons icon-pencil"></i></a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left" style="margin-left: 10px">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('admin.users.destroy', $user->id) }}"></a><button type="submit" class="btn btn-danger"><i class="tim-icons icon-trash-simple"></i></button>
                                </form>

                                </td>
                              </tr>
                        @endforeach
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection