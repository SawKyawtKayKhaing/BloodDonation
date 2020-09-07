<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('bloods.create')}}">New Blood</a>
<table class="table table-success">
    <thead>
        <tr>
            <th>No</th>
            <th>Blood Group</th>
            <th>Blood Bag Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bloods as $blood)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$blood->blood_group}}</td>
            <td>{{$blood->bag_number}}</td>
            <td>
            <form action="{{route('bloods.destroy',$blood->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('bloods.edit',$blood->id)}}">Edit</a>
            
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
