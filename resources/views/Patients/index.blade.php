
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table>
                    <thead>
                        <tr>
                        <th>No</th>
                            <th>
                                Name
                            </th>
                            <th>
                                Phone No
                            </th>
                            <th>
                                Blood_id
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td>{{$patient->name}}</td>
                                <td>{{$patient->phone}}</td>
                                <td>{{$patient->blood_id}}</td>
                                <td>
                               
                                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">


   <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</dvi>


