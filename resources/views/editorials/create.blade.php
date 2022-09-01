@extends('layouts/app')

@section('title', 'Add Editorials')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Add Editorials
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('editorials.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                                <br>
                                <a href="{{ route('editorials.index')}}" class="btn btn-dark">Regresar</a>
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
