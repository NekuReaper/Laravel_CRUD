@extends("alumno.layout")
@section("opciones")
    <a class="btn btn-danger" href="{{route('alumno.index')}}">Cancelar</a>
@endsection
@section("contenido")
    <form action="{{route('alumno.store')}}" method="POST">
        @csrf
        <h3>Añade los datos del nuevo alumno:</h3>
        <table>
            <tbody>
                <tr>
                    <td><label for="nombre">Nombre</label></td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td><label for="direccion">Dirección</label></td>
                    <td><input type="text" name="direccion"></td>
                </tr>
                <tr>
                    <td><label for="dni">DNI</label></td>
                    <td><input type="text" name="dni"></td>
                </tr>
                <tr>
                    <td><label for="telefono">Teléfono</label></td>
                    <td><input type="text" name="telefono"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn-success rounded">Guardar</button>
    </form>
@endsection
