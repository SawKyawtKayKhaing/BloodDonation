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
  
   <form action="/health_checks" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
       <label for="name" class="font-weight-bold"> Blood Pressure:</label>
       <input type="text" class="form-control" placeholder="Write your blood pressure" id="name" name="blood pressure" >
      </div>
<br>
<div class="form-group">
       <label for="phone no" class="font-weight-bold">Weight</label>
       <input type="text" class="form-control" placeholder="Write your weight" id="name" name="weight" >
      </div>
<br>
<div class="form-group">
       <label for="blood_id" class="font-weight-bold">Medical Status</label>
       <input type="text" class="form-control" placeholder="Write your medical status" id="name" name="medical status" >
      </div>
<br>
   
      <div class="form-group">
       <label for="blood_id" class="font-weight-bold">Period of time </label>
       <input type="text" class="form-control" placeholder="Write your period of time " id="name" name=" period of time" >
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
      <button type="submit" class="btn btn-info">Add</button>
   </form>
</div>
</body>
</html>