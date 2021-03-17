@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Job List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Mobile</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($ObjJobs as $Jobs)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $Jobs->name }}</td>
                          <td>{{ $Jobs->email }}</td>
                          <td>{{ $Jobs->mobile }}</td>
                          <td>
                            <form method="GET" class="btn-cls" action="{{ route('Job-show' , ['id' => $Jobs->id]) }}">
                                  <input class="btn btn-primary" type="submit" value="Edit"></input>
                            </form>

                            <form method="POST" class="btn-cls" action="{{ route('Job-delete' , ['id' => $Jobs->id]) }}">
                              @csrf
                              {{method_field('DELETE')}}
                              <input class="btn btn-danger" type="submit" value="Delete"></input>
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
</div>
@endsection
