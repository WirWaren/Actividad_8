@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ url('Heroes/create') }}" class="btn btn-success" > Registrar nuevo heroe</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Nombre_Real</th>
            <th>Apellido</th>
            <th>Localizacion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $heroes as $Heroes)
        <tr>
            <td>
                <td>{{$Heroes->id}}</td>
                
                <td>   
                     
                </td>


                <td>{{$Heroes->Nombre}}</td>
                <td>{{$Heroes->Nombre_Real}}</td>
                <td>{{$Heroes->Apellido}}</td>
                <td>
                    
                <a href="{{ url('/Heroes/'.$Heroes->id.'/edit') }}" class="btn btn-warning" >
                Editar
                </a>
                 | 

                <form action="{{ url('/Heroes/'.$Heroes->id ) }}"  class="d-inline " method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" 
                value="Borrar">

                </form>

                </td>


            </td>
        </tr>
        @endforeach

    </tbody>

</table>
</div>
@endsection