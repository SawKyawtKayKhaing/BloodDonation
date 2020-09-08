<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<form action="/labs" method="POST" class="form-horizontal">
{{ csrf_field() }}


<div>
<div class="form-group">
    <label for="name">Hepatitis B:</label>&nbsp;&nbsp;
    <input type="radio" id="name" name="hepatitisb" value="1">Yes
    <input type="radio" id="name" name="hepatitisb" value="0">No
</div>
<div class="form-group">
    <label for="name">Hepatitis C:</label>&nbsp;&nbsp;
    <input type="radio" id="name" name="hepatitisc" value="1">Yes
    <input type="radio" id="name" name="hepatitisc" value="0">No
</div>
<div class="form-group">
    <label for="name">HIV:</label>&nbsp;&nbsp;
    <input type="radio" id="name" name="hiv" value="1">Yes
    <input type="radio" id="name" name="hiv" value="0">No
</div>
<div class="form-group">
    <label for="name">Malaria:</label>&nbsp;&nbsp;
    <input type="radio" id="name" name="malaria" value="1">Yes
    <input type="radio" id="name" name="malaria" value="0">No
</div>

<div class="form-group">
    <label for="blood_id">Blood_Id</label>
    <select  id="blood_id" name="blood_id">
        <option>Select ID</option>
            @foreach($bloods as $blood)
            <option value="{{$blood->id}}">{{$blood->bag_number}}</option>
            @endforeach
    </select>
</div>


<div>
<button type="submit" class="btn btn-info">Confirm</button>
</div>
</div>
</form>
</html>