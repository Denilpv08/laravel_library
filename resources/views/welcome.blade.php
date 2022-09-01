@extends('layouts/app')

@section('title', 'Welcome')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12 text-center">
                          <h2 style="font-family: 'Fredoka One', cursive;">Agenda creada con Laravel 8</h2>
                      </div>
                  </div>
                  <hr>
                  <div class="row text-center">
                      <div class="col-sm-12">
                            <img src="{{ asset('img/Perfil.jpg') }}" alt="" width="25%">
                            <br><br>
                            <h3 style="font-family: 'Fredoka One', cursive;">
                                Esta es mi agenda creada con Laravel hecha con el fin de facilitar a la hora de guardar tus contatctos con más facilidad.
                            </h3>
                      </div>
                  </div>
                </div>
            </div>
        </div> 
    </div>
@endsection