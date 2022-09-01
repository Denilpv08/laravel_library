@extends('layouts/app')

@section('title', 'Delete Categories')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Delete Categories
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert">
                            Are you sure you want to delete this category?
                            <p>Once deleted, it cannot be recovered!</p>
                            <table class="table table-hover table-sm">
                              <thead>
                                <th>Name</th>
                                <th>Description</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{ $category->name }}</td>
                                  <td>{{ $category->description }}</td>
                                </tr>
                              </tbody>
                            </table>
                            <hr>
                              <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('categories.index')}}" class="btn btn-dark">Regresar</a>
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