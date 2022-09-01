@extends('layouts/app')

@section('title', 'Delete Editorials')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Delete Editorials
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert">
                            Are you sure you want to delete this editorial?
                            <p>Once deleted, it cannot be recovered!</p>
                            <table class="table table-hover table-sm">
                              <thead>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Country</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{ $editorial->name }}</td>
                                  <td>{{ $editorial->phone }}</td>
                                  <td>{{ $editorial->email }}</td>
                                  <td>{{ $editorial->country }}</td>
                                </tr>
                              </tbody>
                            </table>
                            <hr>
                              <form action="{{ route('editorials.destroy', $editorial->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('editorials.index')}}" class="btn btn-dark">Regresar</a>
                                <button class="btn btn-danger">
                                  <span class="fas fa-trash-alt"></span> Delete
                                </button>
                              </form>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div> 
    </div>
@endsection