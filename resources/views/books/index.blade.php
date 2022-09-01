@extends('layouts/app')

@section('title', 'books')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Books
                        </h2>
                        <a href="{{ route('home')}}" class="btn btn-dark">Regresar</a>
                        <a href="{{ route('books.create') }}" class="btn btn-primary">
                            <span class="fas fa-plus-square"></span> Add New
                        </a>
                        <hr>
                        @if ($messeger = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $messeger }}
                            </div>                            
                        @endif
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <table class="table table-sm table-bordered" id="table_categoria">
                                <thead>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Editorial</th>
                                    <th>Category</th>
                                    <th>Page Number</th>
                                    <th>ISBN</th>
                                    <th>Synopsis</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($book as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->author->name }}</td>
                                            <td>{{ $item->editorial->name }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->num_page }}</td>
                                            <td>{{ $item->isbn }}</td>
                                            <td>{{ $item->synopsis }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('books.edit', $item->id) }}" class="btn btn-warning btn-sm"> 
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('books.show', $item->id) }}" class="btn btn-danger btn-sm">    
                                                    <span class="fas fa-trash-alt"></span>
                                                </a>
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
    </div>
@endsection

@section('datatable')
    <script>
        $(document).ready(function(){
            $('#table_categoria').DataTable();
        });
    </script>
@endsection