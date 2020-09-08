    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('donars.create')}}">New Donar</a>
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
            <th>Member</th>
            <th>Action<th>
        </tr>
    </thead>
    <tbody>
    @foreach($donars as $donar)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$donar->name}}</td>
            <td>{{$donar->gender}}</td>
            <td>{{$donar->address}}</td>
            <td>{{$donar->phone}}</td>
            <td>{{$donar->age}}</td>
            <td>{{$donar->date_of_birth}}</td>
            <td>{{$donar->member}}</td>
            <td>
            <form action="{{route('donars.destroy',$donar->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('donars.edit',$donar->id)}}">Edit</a>
            
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
