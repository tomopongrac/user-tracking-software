<table class="table">
    <thead>
    <tr>
        <th scope="col">User Id</th>
        <th scope="col">IP</th>
        <th scope="col">Path</th>
        <th scope="col">Visit start</th>
        <th scope="col">Visit end</th>
        <th scope="col">Duration</th>
    </tr>
    </thead>
    <tbody>
    @foreach($allData as $data)
        <tr>
            <td>{{ $data->uuid }}</td>
            <td>{{ $data->ip }}</td>
            <td>{{ $data->path }}</td>
            <td>{{ $data->time_start }}</td>
            <td>{{ $data->time_end }}</td>
            <td>{{ $data->duration }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
