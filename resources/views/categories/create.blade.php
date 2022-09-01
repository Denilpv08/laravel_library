@extends('layouts/app')

@section('title', 'Add Categories')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Add Categories
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('categories.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
                                <br>
                                <a href="{{ route('categories.index')}}" class="btn btn-dark">Regresar</a>
                                <button class="btn btn-primary">
                                    <span class="fas fa-plus-square"></span> Add
                                </button>
                            </form>
                      </div>
                 </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
