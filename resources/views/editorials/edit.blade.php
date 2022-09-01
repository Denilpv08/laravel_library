@extends('layouts/app')

@section('title', 'Edit Editorials')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                             Edit Editorials
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('editorials.update', $editorial->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required value="{{ $editorial->name }}">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required value="{{ $editorial->phone }}">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required value="{{ $editorial->email }}">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required value="{{ $editorial->country }}">
                                <br>
                                <a href="{{ route('editorials.index')}}" class="btn btn-dark">Regresar</a>
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