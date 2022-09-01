@extends('layouts/app')

@section('title', 'Edit Categories')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                             Edit Categories
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required value="{{ $category->name }}">
                                <label for="description">Description</label>
                                <textarea name="description" 
                                          id="descripcion" 
                                          cols="30" 
                                          rows="5" 
                                          class="form-control" 
                                          required>{{ $category->description }}
                                </textarea>
                                <br>
                                <a href="{{ route('categories.index')}}" class="btn btn-dark">Regresar</a>
                                <button class="btn btn-warning">
                                    <span class="fas fa-edit"></span> update
                                </button>
                            </form>
                      </div>
                  </div>
                </div>
            </div>
        </div> 
    </div>
@endsection