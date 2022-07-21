@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <div class="navbar">
                    <a class="btn btn-light" value="Nuevo" href="{{route('customerRegister')}}">Nuevo</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabla-->
                <div class="p-4">
                    <table class="table table-striped table-bordered m-auto">
                        <thead class="thead-dark" >
                        <tr>
                            <th colspan="6"><h5><center>CLIENTES</center></h5></th>
                        </tr>
                        <tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>NOMBRE</center></th>
                            <th scope="col"><center>DIRECCIÓN</center></th>
                            <th scope="col"><center>TELÉFONO</center></th>
                            <th scope="col"><center>CATEGORÍA</center></th>
                            <th scope="col"><center>OPCIONES</center></th>
                        </tr>
                        </thead>
                        <tbody id="tabla">

                        <!-- Aqui va el metodo for each -->
                        @foreach($customers as $customer)
                            <tr>
                                <th scope="row">{{$customer->id}}</th>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->phone_number}}</td>
                                <td>{{$customer->category->description}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('customerEdit', $customer)}}"><input type="button" value="Editar" class="btn btn-warning" id="btnEditar"></a>&nbsp;
                                    <form method="POST" action="{{route('customerDelete', $customer->id)}}" class="text-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
