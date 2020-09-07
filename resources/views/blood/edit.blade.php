<div class="panel-body">
<form action="{{route('bloods.update',$bloods->id)}}" method="POST" class="form-horization">
{{csrf_field()}}
<input name="_method" type="hidden" value="PATCH">
<input type="hidden" name="id" value="{{$bloods->id}}"/>
<div class="form-group">
<label for="task" class="col-sm-3 control-label">Blood Group</label>
<div class="col-sm-6">
<input type="text" name="blood" id="task" class="form-control" value="{{$bloods->blood_group}}">
</div>
</div>
<div class="form-group">
<label for="blood_bag_number" class="col-sm-3 control-label">Blood Bag Number</label>
<div class="col-sm-6">
<input type="text" name="bag_number" id="bag_number" class="form-control" value="{{$bloods->bag_number}}"/>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-6">
<button type="submit" class="btn btn-default">
<i class="fa fa-plus"></i>Add
</button>
</div>
</div>
</form>
</div>