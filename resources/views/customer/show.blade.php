@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>ELIMINAR CLIENTE</h5>
            </div>
            <div class="card-body">
                <!-- Tabla-->
                <div class="p-4 alert alert-danger">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th colspan="5"><h5>¿Desea eliminar el cliente? </h5></th>
                        </tr>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">DIRECCIÓN</th>
                            <th scope="col">TELÉFONO</th>
                            <th scope="col">CATEGORÍA</th>
                        </tr>
                        </thead>
                        <tbody id="tabla">
                        <!-- Aqui va el metodo for each -->
                        <tr>
                            <th scope="row">{{$customer->id}}</th>
                            <td >{{$customer->name}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>{{$customer->category->description}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    <form method="POST" action="{{route('customerDelete', $customer->id)}}">
                        <a href="{{route('customerIndex')}}"> <input type="button" value="Cancelar" class="btn btn-primary" id="btnCancelar"></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>

        </div>
@endsection
