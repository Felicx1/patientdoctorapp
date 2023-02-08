<div align="center" class="container">
<div class="row">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List of Therapists</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th> Doctor Name </th>
                            <th> Phone </th>
                            <th> Speciality </th>
                            <th> Room No </th>
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $doctor)
                          <tr>
                         
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>{{ $doctor->name }}</td>
                            <td> {{ $doctor->phone }} </td>
                            <td> {{ $doctor->speciality}} </td>
                            <td> {{ $doctor->room }} </td>
                            <td> <img height="100" width="100" src="doctorimage/{{ $doctor->image }}" class="thumbnail"></td>
                            <td><a  class="badge badge-outline-success" href="{{ url('updatedoctor',$doctor->id) }}">Update</a>
                                <a onclick="return confirm('Are you Sure?')" class="badge badge-outline-warning" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a>
                            </td>
                         </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>