<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('hospitals.create')}}">New Hospital</a>
<table class="table table-success">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Patient_Id</th>
            <th>NeededBlood_Id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hospitals as $hospital)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$hospital->name}}</td>
            <td>{{$hospital->address}}</td>
            <td>{{$hospital->phone}}</td>
            <td>{{$hospital->patient_id}}</td>
            <td>{{$hospital->neededblood_id}}</td>
            <td>
            <form action="{{route('hospitals.destroy',$hospital->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('hospitals.edit',$hospital->id)}}">Edit</a>
            
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
