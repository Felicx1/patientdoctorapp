
<div align="center" class="container">
  <div class="row">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Appointments</h4>
                    <div class="table-responsive">
                      <table class="table" >
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th> Customer Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Doctor Name </th>
                            <th> Date </th>
                            <th> Message </th>
                            <th>Status</th>
                            <th> Action </th>
                            <th> Send Mail </th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $appoint)
                          <tr>
                         
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>{{ $appoint->name }}</td>
                            <td> {{ $appoint->email }} </td>
                            <td> {{ $appoint->phone}} </td>
                            <td> {{ $appoint->doctor }} </td>
                            <td> {{ $appoint->date }}</td>
                            <td> {{ $appoint->message }}</td>
                            <td> {{ $appoint->status }}</td>
                            <td><a class="badge badge-outline-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                            <a class="badge badge-outline-danger" href="{{ url('rejected',$appoint->id) }}">Rejected</a> 
                             </td>
                             <td><a class="badge badge-pill badge-info" href="{{ url('emailview',$appoint->id) }}">Send Email</a>
                             
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