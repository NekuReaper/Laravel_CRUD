@extends("alumno.layout")
@section("opciones")
    <a class="btn btn-success" href="{{route('alumno.create')}}">Agregar</a>
@endsection
@section("contenido")
    <table class="table-striped table-bordered">
        <tr>
            <th>Nombre</th><th>Direccion</th><th>Teléfono</th><th>DNI</th><th>Editar</th><th>Borrar</th>
        </tr>
        @foreach($alumnos as $alumno)
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->direccion}}</td>
                    <td>{{$alumno->telefono}}</td>
                    <td>{{$alumno->dni}}</td>
                    <td><a href="{{route("alumno.edit", $alumno)}}"><button class="btn-primary rounded">Editar</button></a></td>
                    <td>
                        <form action="{{route("alumno.destroy",$alumno)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn-danger rounded">Borrar</button>
                        </form>
                    </td>
                </tr>
        @endforeach
    </table>
@endsection
