@extends('layouts.main')
@section('content')
    <div class="container md mt-2 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> AGREGAR CATEGORÍA &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="{{route('categoryCreate')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <b><label for="description" class="mt-2">DESCRIPCIÓN</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="description" placeholder="" maxlength="45" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-3" id="btnGuardar" name="accion" value="Guardar">Guardar &nbsp;&nbsp;<i class="fas fa-save"></i></button>
                    <a href="{{route('categoryIndex')}}"> <input type="button" value="Cancelar" class="btn btn-danger" id="btnCancelar"></a>
                </form>
            </div>
        </div>
    </div>
@endsection
