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
<form action="/accepts" method="POST" class="form-horizontal">
{{ csrf_field() }}


<div>
<div class="form-group">
    <label for="name">Accept Date:</label>&nbsp;&nbsp;
    <input type="text" id="name" name="accept" placeholder="Enter Accept Date">
</div>

<div class="form-group">
    <label for="blood_id">Lab_Id</label>
    <select  id="blood_id" name="lab_id">
        <option>Select ID</option>
            @foreach($labs as $lab)
            <option value="{{$lab->id}}">{{$lab->labs_id}}</option>
            @endforeach
    </select>
</div>

<div>
<button type="submit" class="btn btn-info">Confirm</button>
</div>
</div>
</form>
</html>