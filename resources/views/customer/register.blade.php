@extends('layouts.main')
@section('content')
    <div class="container md mt-2 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> AGREGAR CLIENTE &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="{{route('customerCreate')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <b><label for="name" class="mt-2">NOMBRE</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="name" placeholder="" maxlength="75" required>
                    </div>
                    <div>
                        <b><label for="address" class="mt-2">DIRECCIÓN</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="address" placeholder="" maxlength="250" required>
                    </div>
                    <div>
                        <b><label for="phone_number" class="mt-2">TELÉFONO</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="phone_number" placeholder="" maxlength="25" required>
                    </div>
                    <div>
                        <b><label for="category_id" class="mt-2">CATEGORÍA</label></b>
                        <select class="custom-select" name="category_id" id="category_id" required>
                            <option>--Seleccione una opcion--</option>
                            @foreach($categories as $category)
                                 <option value="{{$category->id}}">{{$category->description}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-3" id="btnGuardar" name="accion" value="Guardar">Guardar &nbsp;&nbsp;<i class="fas fa-save"></i></button>
                    <a href="{{route('customerIndex')}}"> <input type="button" value="Cancelar" class="btn btn-danger" id="btnCancelar"></a>
                </form>
            </div>
        </div>
    </div>
@endsection
