@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <div class="navbar">
                    <a class="btn btn-light" href="{{route('categoryRegister')}}">Nueva</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabla-->
                <div class="p-4">
                    <table class="table table-striped table-bordered m-auto">
                        <thead class="thead-dark" >
                        <tr>
                            <th colspan="3"><h5><center>CATEGORÍAS</center></h5></th>
                        </tr>
                        <tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>DESCRIPCIÓN</center></th>
                            <th scope="col"><center>OPCIONES</center></th>

                        </tr>
                        </thead>
                        <tbody id="tabla">

                        <!-- Aqui va el metodo for each -->
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->description}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('categoryEdit', $category)}}"><input type="button" value="Editar" class="btn btn-warning" id="btnEditar"></a>&nbsp;
                                    <form method="POST" action="{{route('categoryDelete', $category->id)}}" class="text-center">
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
