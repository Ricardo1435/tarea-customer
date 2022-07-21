@extends('layouts.main')
@section('content')
    <div class="container md mt-2 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> EDITAR CLIENTE &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="{{route('customerUpdate', $customer->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div>
                        <b><label for="description" class="mt-2">NAME</label></b>
                        <input type="text"  id="name" class="form-control" autocomplete="off" name="name" placeholder="" maxlength="45" value="{{$customer->name}}" required>
                    </div>
                    <div>
                        <b><label for="address" class="mt-2">DIRECCIÓN</label></b>
                        <input type="text"  class="form-control" autocomplete="off" name="address" placeholder="" maxlength="250" value="{{$customer->address}}" required>
                    </div>
                    <div>
                        <b><label for="phone_number" class="mt-2">TELÉFONO</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="phone_number" placeholder="" maxlength="25" value="{{$customer->phone_number}}" required>
                    </div>
                    <div>
                        <b><label for="category_id" class="mt-2">CATEGORÍA</label></b>
                        <select class="custom-select" name="category_id" id="category_id" required>
                            <option value="{{$customer->category_id}}">--Cambiar categoría--</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->description}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-3" id="btnGuardar" name="accion" value="Guardar">Guardar &nbsp;&nbsp;<i class="fas fa-save"></i> </button>
                    <a href="{{route('customerIndex')}}"> <input type="button" value="Cancelar" class="btn btn-danger" id="btnCancelar"></a>
                </form>
            </div>
        </div>
    </div>
@endsection
