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
<form action="/bloods" method="POST" class="form-horizontal">
{{ csrf_field() }}
<body>
    <div class="form-group">
        <label for="blood">Blood Group</label>&nbsp;
        <input type="text" id="blood"   name="blood"   placeholder="Enter Blood Group">
    </div>
    <div class="form-group">
        <label for="bag">Blood Bag Number</label>
        <input type="text" id="bag" name="bag" placeholder="Enter Blood Bag Number">
    </div>
    <div>
    <button type="submit" class="btn btn-info">Add</button>
    </div>
