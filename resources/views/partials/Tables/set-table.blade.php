<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Cartas</th>
        <th scope="col">Tipo de Set</th>
        <th scope="col">Fecha de Salida</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sets->data as $set)
        <tr>
            <td>
                <img class="set-icon" src="{{ $set->icon_svg_uri }}" alt="">
                {{ $set->name }}
            </td>
            <td>{{ $set->card_count }}</td>
            <td>{{ $set->set_type }}</td>
            <td>{{ $set->released_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
