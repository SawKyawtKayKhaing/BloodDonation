<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('organizations.create')}}">New Organizations</a>
<table class="table table-success">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Request_id</th>
            <th>Donar_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($organizations as $organization)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$organization->name}}</td>
            <td>{{$organization->address}}</td>
            <td>{{$organization->phone}}</td>
            <td>{{$organization->needed_bloods_id}}</td>
            <td>{{$organization->donars_id}}</td>
            <td>
            <form action="{{route('organizations.destroy',$organization->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('organizations.edit',$organization->id)}}">Edit</a>
            
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
</div>
