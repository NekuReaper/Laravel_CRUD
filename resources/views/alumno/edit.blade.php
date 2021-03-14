@extends("alumno.layout")
@section("opciones")
    <a class="btn btn-danger" href="{{route('alumno.index')}}">Cancelar</a>
@endsection

@section("contenido")
    <form action="{{route('alumno.update', $alumno)}}" method="POST">
        @csrf
        @method("PUT")
        <h3>Introduce los datos que quieres modificar:</h3>
        <table>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" name="nombre" value="{{$alumno->nombre}}"></td>
            </tr>
            <tr>
                <td><label for="direccion">Direccion</label></td>
                <td><input type="text" name="direccion" value="{{$alumno->direccion}}"></td>
            </tr>
            <tr>
                <td><label for="dni">DNI</label></td>
                <td><input type="text" name="dni" value="{{$alumno->dni}}"></td>
            </tr>
            <tr>
                <td><label for="telefono">Teléfono</label></td>
                <td><input type="text" name="telefono" value="{{$alumno->telefono}}"></td>
            </tr>
        </table>
        <button type="submit" class="btn-primary">Guardar</button>
    </form>
@endsection
