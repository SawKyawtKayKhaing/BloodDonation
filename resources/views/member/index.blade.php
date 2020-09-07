<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('members.create')}}">New Members</a>
<table class="table table-success">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Date Of Birth</th>
            <th>Organization_id</th>
            <th>Donar_id<th>
        </tr>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->gender}}</td>
            <td>{{$member->address}}</td>
            <td>{{$member->phone}}</td>
            <td>{{$member->age}}</td>
            <td>{{$member->dob}}</td>
            <td>{{$member->organization_id}}</td>
            <td>{{$member->donar_id}}</td>
            <td>
            <form action="{{route('members.destroy',$member->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('members.edit',$member->id)}}">Edit</a>
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
