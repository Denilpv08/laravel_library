@extends('layouts/app')

@section('title', 'Delete Authors')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Delete Authors
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert">
                            Are you sure you want to delete this author?
                            <p>Once deleted, it cannot be recovered!</p>
                            <table class="table table-hover table-sm">
                              <thead>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Mother's Last Name</th>
                                <th>Date Birth</th>
                                <th>Date Death</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{ $author->name }}</td>
                                  <td>{{ $author->paternal }}</td>
                                  <td>{{ $author->maternal }}</td>
                                  <td>{{ $author->date_birth }}</td>
                                  <td>{{ $author->date_death }}</td>
                                </tr>
                              </tbody>
                            </table>
                            <hr>
                              <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('authors.index')}}" class="btn btn-dark">Regresar</a>
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