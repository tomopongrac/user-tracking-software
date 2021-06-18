<table class="table">
    <thead>
    <tr>
        <th scope="col">User Id</th>
        <th scope="col">Total visits</th>
    </tr>
    </thead>
    <tbody>
    @foreach($allData as $data)
        <tr>
            <td>{{ $data->uuid }}</td>
            <td>{{ $data->total }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
