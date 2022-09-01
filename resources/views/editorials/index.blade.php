@extends('layouts/app')

@section('title', 'Editorials')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Editorials
                        </h2>
                        <a href="{{ route('home')}}" class="btn btn-dark">Regresar</a>
                        <a href="{{ route('editorials.create') }}" class="btn btn-primary">
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($editorial as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('editorials.edit', $item->id) }}" class="btn btn-warning btn-sm"> 
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('editorials.show', $item->id) }}" class="btn btn-danger btn-sm">    
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