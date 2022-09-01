@extends('layouts/app')

@section('title', 'Add Books')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                            Add Books
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('books.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                                <label for="author">Author</label>
                                <select name="author" id="author" class="form-select" required>
                                        <option value="">Select an author</option>
                                        @foreach ($author as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                </select>
                                <label for="editorial">Editorial</label>
                                <select name="editorial" id="editorial" class="form-select" required>
                                        <option value="">Select a publisher</option>
                                        @foreach ($editorial as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                </select>
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-select" required>
                                        <option value="">Select a category</option>
                                        @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                </select>
                                <label for="num_page">Page Number</label>
                                <input type="text" class="form-control" id="num_page" name="num_page" required>
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control" id="isbn" name="isbn" required>
                                <label for="synopsis">Synopsis</label>
                                <input type="text" class="form-control" id="synopsis" name="synopsis" required>
                                <br>
                                <a href="{{ route('books.index')}}" class="btn btn-dark">Regresar</a>
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
