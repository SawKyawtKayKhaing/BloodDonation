

   

    <div class="panel-body">
      
        

        <form action="{{ route('patients.update', $patient->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="id" value="{{$patient->id}}" />
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{$patient->name}}" >
                </div>
            </div>
           
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Phone no</label>

                <div class="col-sm-6">
                    <input type="text" name="price" id="price" class="form-control" value="{{$patient->price}}" >
                </div>
            </div>

            <div class="form-group">
                <label for="blood_id" class="col-sm-3 control-label">Blood-id</label>

                <div class="col-sm-6">
                    <input type="text" name="code" id="code" class="form-control" value="{{$patient->blood_id}}" >
                </div>
            </div>
           

            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add 
                    </button>
                </div>
            </div>
        </form>
    </div>

