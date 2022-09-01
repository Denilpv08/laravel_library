@extends('layouts/app')

@section('title', 'Add Authors')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Add Authors
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('authors.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <label for="paternal">Last Name</label>
                                <input type="text" class="form-control" id="paternal" name="paternal" required>
                                <label for="maternal">Mother's Last Name</label>
                                <input type="text" class="form-control" id="maternal" name="maternal" required>
                                <label for="date_birth">Date Birth</label>
                                <input type="date" class="form-control" id="date_birth" name="date_birth" required>
                                <label for="date_death">Date Death</label>
                                <input type="date" class="form-control" id="date_death" name="date_death">
                                <br>
                                <a href="{{ route('authors.index')}}" class="btn btn-dark">Regresar</a>
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
