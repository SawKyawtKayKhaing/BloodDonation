<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('admins.create')}}">New Admins</a>
<table class="table table-success">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Organization_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($admins as $admin)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->address}}</td>
            <td>{{$admin->phone}}</td>
            <td>{{$admin->organization_id}}</td>
            <td>
            <form action="{{route('admins.destroy',$admin->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('admins.edit',$admin->id)}}">Edit</a>
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
