@extends('layouts/app')

@section('title', 'Edit Authors')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                             Edit Authors
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('authors.update', $author->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required value="{{ $author->name }}">
                                <label for="paternal">Last Name</label>
                                <input type="text" class="form-control" id="paternal" name="paternal" required value="{{ $author->paternal }}">
                                <label for="maternal">Mother's Last Name</label>
                                <input type="text" class="form-control" id="maternal" name="maternal" required value="{{ $author->maternal }}">
                                <label for="date_birth">Date Birth</label>
                                <input type="date" class="form-control" id="date_birth" name="date_birth" required value="{{ $author->date_birth }}">
                                <label for="date_death">Date Death</label>
                                <input type="date" class="form-control" id="date_death" name="date_death" required value="{{ $author->date_death }}">
                                <br>
                                <a href="{{ route('authors.index')}}" class="btn btn-dark">Regresar</a>
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