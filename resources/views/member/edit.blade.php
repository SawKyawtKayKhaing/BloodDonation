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
<form action="{{ route('members.update', $members->id) }}" method="post">
@method('PUT')
@csrf


<div>
<div class="form-group">
    <label for="name">Name:</label>&nbsp;&nbsp;
    <input type="text" id="name"   name="name"   placeholder="Enter Name">
</div>
<div class="form-group">
    <label for="name">Gender:</label>&nbsp;&nbsp;
    <input type="radio" id="name" name="gender">Female
    <input type="radio" id="name" name="gender">Male
</div>
<div class="form-group">
    <label for="name">Address:</label>&nbsp;&nbsp;
    <textarea id="name"  name="address" placeholder="Enter Address"></textarea>
</div>
<div class="form-group">
    <label for="name">Phone:</label>&nbsp;&nbsp;
    <input type="text" id="name"  name="phone" placeholder="Enter Phone Number">
</div>
<div class="form-group">
    <label for="name">Age:</label>&nbsp;&nbsp;
    <input type="text" id="name"  name="age" placeholder="Enter Age">
</div>
<div class="form-group">
    <label for="name">Date_of_Birth:</label>&nbsp;&nbsp;
    <input type="text" id="name"  name="dob" placeholder="Enter Date Of Birth">
</div>
<div class="form-group">
    <label for="org_id">Organization_Id</label>
    <select  id="org_id" name="organization_id">
        <option>Select ID</option>
            @foreach($organizations as $organization)
            <option value="{{$organization->id}}">{{$organization->quantity}}</option>
            @endforeach
    </select>
</div>

<div class="form-group">
    <label for="donar_id">Donar_Id</label>
    <select  id="donar_id" name="donar_id">
        <option>Select ID</option>
            @foreach($donars as $donar)
            <option value="{{$donar->id}}">{{$donar->name}}</option>
            @endforeach
    </select>
</div>
<div>
<button type="submit" class="btn btn-info">Confirm</button>
</div>
</div>
</form>
</html>