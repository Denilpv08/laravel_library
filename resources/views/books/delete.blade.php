@extends('layouts/app')

@section('title', 'Delete Books')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Delete Books
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert">
                            Are you sure you want to delete this Book?
                            <p>Once deleted, it cannot be recovered!</p>
                            <table class="table table-hover table-sm">
                              <thead>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Editorial</th>
                                    <th>Category</th>
                                    <th>Page Number</th>
                                    <th>ISBN</th>
                                    <th>Synopsis</th>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author->name }}</td>
                                    <td>{{ $book->editorial->name }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->num_page }}</td>
                                    <td>{{ $book->isbn }}</td>
                                    <td>{{ $book->synopsis }}</td>
                                </tr>
                              </tbody>
                            </table>
                            <hr>
                              <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('books.index')}}" class="btn btn-dark">
                                  <span class="fas fa-rotate-left"></span> Regresar
                                </a>
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