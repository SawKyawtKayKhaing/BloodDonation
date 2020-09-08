
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
  
   <form action="/records" method="post" enctype="multipart/form-data">
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
       <label for="name" class="font-weight-bold"> Units</label>
       <input type="text" class="form-control" placeholder="Write your units" id="name" name="units" >
      </div>
<br>
      <div class="form-group">
       <label for="phone no" class="font-weight-bold">Last-date </label>
       <input type="text" class="form-control" placeholder="Write your last-date " id="name" name="last-date" >
      </div>
<br>
      <div class="form-group">
       <label for="blood_id" class="font-weight-bold">Available</label>
       <input type="text" class="form-control" placeholder="Write your available" id="name" name="available" >
      </div>
<br>
   
      <div class="form-group">
       <label for="blood_id">Blood_id</label>
       <select id="blood_id" name="blood_id">
            <option>Select ID</option>
                  @foreach($bloods as $blood)
                  <option value="{{$blood->id}}">{{$blood->blood_group}}</option>
                  @endforeach
      </select>
      </div>
<br>
      <div class="form-group">
       <label for="donar_id">Donar_id</label>
       <select id="donar_id" name="donar_id">
            <option>Select ID</option>
                  @foreach($donars as $donar)
                  <option value="{{$donar->id}}">{{$donar->name}}</option>
                  @endforeach
      </select>
      </div>
<br>
      <button type="submit" class="btn btn-info">Add</button>
   </form>
</div>
</body>
</html>


