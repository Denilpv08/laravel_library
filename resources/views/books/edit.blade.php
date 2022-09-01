@extends('layouts/app')

@section('title', 'Edit Books')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 style="font-family: 'Fredoka One', cursive;">
                             Edit Books
                          </h2>
                        <hr>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('books.update', $book->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required value="{{ $book->title }}">
                                <label for="author">Author</label>
                                <select name="author" id="author" class="form-select" required>
                                        @foreach ($author as $item)
                                            @if ($item->id == $book->id)
                                                <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <label for="editorial">Editorial</label>
                                <select name="editorial" id="editorial" class="form-select" required>
                                        @foreach ($editorial as $item)
                                            @if ($item->id == $book->id)
                                                <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-select" required>
                                        @foreach ($category as $item)
                                            @if ($item->id == $book->id)
                                                <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <label for="num_page">Page Number</label>
                                <input type="text" class="form-control" id="num_page" name="num_page" required value="{{ $book->num_page }}">
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control" id="isbn" name="isbn" required value="{{ $book->isbn }}">
                                <label for="synopsis">Synopsis</label>
                                <input type="text" class="form-control" id="synopsis" name="synopsis" required value="{{ $book->synopsis }}">
                                <br>
                                <a href="{{ route('books.index')}}" class="btn btn-dark">Regresar</a>
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