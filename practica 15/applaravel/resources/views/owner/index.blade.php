Listado de propietarios
<br>
<br>
<a href="{{ url('/owner/create') }}">Nuevo propietario</a>
<br>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>

            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($owners as $owner)
        <tr>
            <td>{{ $owner->id }}</td>
            <td>{{ $owner->full_name }}</td>
            <td>{{ $owner->age }}</td>
            <td>{{ $owner->email }}</td>
  
            <td>
                <form method="POST" action="{{ url('/owner/'. $owner->id) }}">
                @csrf
                <a href="{{ url('/owner/'. $owner->id . '/edit') }}">Editar</a>
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar este propietario?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbodyt
</table>