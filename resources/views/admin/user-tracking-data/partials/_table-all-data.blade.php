<table class="table">
    <thead>
    <tr>
        <th scope="col">User Id</th>
        <th scope="col">IP</th>
        <th scope="col">Duration</th>
    </tr>
    </thead>
    <tbody>
    @foreach($allData as $data)
        <tr>
            <td>{{ $data->uuid }}</td>
            <td>{{ $data->ip }}</td>
            <td>{{ $data->time_end }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
