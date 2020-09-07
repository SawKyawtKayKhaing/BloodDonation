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
<form action="{{ route('neededbloods.update', $neededbloods->id) }}" method="post">
@method('PUT')
@csrf


<div>
<div class="form-group">
    <label for="name">Quantity:</label>&nbsp;&nbsp;
    <input type="text" id="name"   name="quantity"   placeholder="Enter Quantity">
</div>
<div class="form-group">
    <label for="name">Require Date Time:</label>&nbsp;&nbsp;
    <textarea id="name"  name="datetime" placeholder="Enter Require Date Time"></textarea>
</div>

<div class="form-group">
    <label for="blood_id">Blood_Id</label>
    <select  id="blood_id" name="blood_id">
        <option>Select ID</option>
            @foreach($bloods as $blood)
            <option value="{{$blood->id}}">{{$blood->blood_group}}</option>
            @endforeach
    </select>
</div>

<div>
<button type="submit" class="btn btn-info">Confirm</button>
</div>
</div>
</form>
</html>