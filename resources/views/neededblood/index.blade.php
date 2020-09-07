<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div>
<a href="{{route('neededbloods.create')}}">New Needed Blood</a>
<table class="table table-success">
    <thead>
        <tr>
            <th>No</th>
            <th>Quantity</th>
            <th>Required Date Time</th>
            <th>Blood_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($neededbloods as $neededblood)
        <tr>
            <td>{{$loop->iteration}}</td>
            
            <td>{{$neededblood->quantity}}</td>
            <td>{{$neededblood->datetime}}</td>
            <td>{{$neededblood->bloods_id}}</td>
            <td>
            <form action="{{route('neededbloods.destroy',$neededblood->id)}}" method="POST" >      
            <a class= "btn btn-primary" href="{{route('neededbloods.edit',$neededblood->id)}}">Edit</a>
            
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
