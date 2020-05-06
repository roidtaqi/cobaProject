@extends('layouts.app', ['pageSlug' => 'users'])

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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $users)
                            <tr>
                                <th scope="row">{{ $users -> id }}</th>
                                <td>{{ $users -> name }}</td>
                                <td>{{ $users -> email }}</td>
                                <td>{{  implode(',', $users -> roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                    
                                <a href="{{ route('admin.users.edit', $users->id) }}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                                
                                <form action="{{ route('admin.users.destroy', $users) }}" method="POST" class="float-left">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('admin.users.destroy', $users->id) }}"></a><button type="submit" class="btn btn-danger">Delete</button>
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