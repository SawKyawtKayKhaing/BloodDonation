
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col -md-6">
  
   <form action="/patients" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach 
    </ul>
    </div>
    @endif 
    </div>
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Name</label>
       <input type="text" class="form-control" placeholder="Write your  name" id="name" name="name" >
      </div>
<br><br>
      <div class="form-group">
       <label for="phone no" class="font-weight-bold">Phone no</label>
       <input type="number" class="form-control" placeholder="Write your phone number" id="name" name="phone">
      </div>
<br><br>
      <div class="form-group">
       <label for="blood_id">Blood_id</label>
       <select id="blood_id" name="blood_id">
            <option>Select ID</option>
                  @foreach($bloods as $blood)
                  <option value="{{$blood->id}}">{{$blood->blood_group}}</option>
                  @endforeach
      </select>
      </div>
<br><br>
   
      
      
      <button type="submit" class="btn btn-info">Add</button>
   </form>
</div>
</body>
</html>


