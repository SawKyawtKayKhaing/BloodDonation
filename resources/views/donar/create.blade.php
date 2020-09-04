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
<form action="/donars" method="POST" class="form-horizontal">
{{ csrf_field() }}


<div>
<div class="form-group">
    <label for="name">Name:</label>&nbsp;&nbsp;
    <input type="text" id="name" class="form-control"  name="name"   placeholder="Enter Name">
</div>
<div class="form-group">
    <label for="name">Gender:</label>&nbsp;&nbsp;
    <input type="radio" id="name" name="gender">Female
    <input type="radio" id="name" name="gender">Male
</div>
<div class="form-group">
    <label for="name">Address:</label>&nbsp;&nbsp;
    <textarea id="name" class="form-control" name="address" placeholder="Enter Address"></textarea>
</div>
<div class="form-group">
    <label for="name">Phone:</label>&nbsp;&nbsp;
    <input type="text" id="name" class="form-control" name="phone" placeholder="Enter Phone Number">
</div>
<div class="form-group">
    <label for="name">Age:</label>&nbsp;&nbsp;
    <input type="text" id="name" class="form-control" name="age" placeholder="Enter Age">
</div>
<div class="form-group">
    <label for="name">Date_of_Birth:</label>&nbsp;&nbsp;
    <input type="text" id="name" class="form-control" name="dob" placeholder="Enter Date Of Birth">
</div>
<div class="form-group">
    <label for="mem">Member</label>&nbsp;&nbsp;
    <select name="member">
        <option>member</option>
        <option>other</option>
    </select>
</div>
</div>
</form>
</html>