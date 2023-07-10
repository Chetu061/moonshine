@extends('layouts.master1')
@section('content')
  
    <br>
    <br>
    <br>
   <br>
   <br>
   <br>



<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">

              <div class="card-header">
                  <h3 class="card-title">UserView</h3>
                </div>
                <div class="card-header">
                  <h3 class="card-title">
                    <button type="button" class="btn btn-primary" id="add" >
                      {{-- data-toggle="modal"  --}}
                      {{-- data-target="#exampleModal"> --}}
                      Add Form
                    </button><br></h3>
                </div>
            
<table class="table table-bordered table-hover w-100" id="data-table">
  <thead>
    <tr>
      <th style="width:2px">ID</th>
      <th style="width:5px">ComId</th>
      <th style="width:15px">FName</th>
      <th style="width:10px">LName</th>
      <th style="width:10px">UEmail</th>
      <th style="width:5px">UPassword</th>
      <th style="width:10px">Status</th>
      <th style="width:10px">Otp</th>
      <th style="width:15px">ETime</th>
      <th style="width:10px">Payroll</th>
      <th style="width:10px">City</th>
      <th style="width:10px">State</th>
      <th style="width:10px">Country</th>
      <th style="width:10px">pinCode</th>
      <th style="width:50px">Action</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>
          </div></div></div></div>
</section>






<!-- Modal -->
{{-- Create Form start --}}
<div class="modal fade" id="model_todo" tabindex="-1" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Form</h5>
        <button type="button" id="myModal" class="close" data-dismiss="modal" 
        aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if($errors->any())
  <ul>
    @foreach($errors->all()  as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
        <form  action="{{route('user.store')}}" method="post"id="form_todo">
          @csrf



            <div class="card-body">
                
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose companyId</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="companyId" name="companyId" value="{{old('companyId')}}">
                   
                  @foreach($company as $d)
                     {{-- @dd($company) --}}
                  <option value="{{$d->company_detail_id}}">{{$d->company_detail_id}}</option>
                    @endforeach 
                </select>
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter firstName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="firstName" class="form-control" value="{{old('firstName')}}"id="exampleInputEmail1" 
                placeholder="Enter firstName">
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter lastName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="lastName" class="form-control"
                 value="{{old('lastName')}}"id="exampleInputEmail1" 
                placeholder="Enter lastName">
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userEmail</label>
              </label><span class="text-danger">
                *</span>
                <input type="email" name="userEmail" class="form-control" value="{{old('userEmail')}}"id="exampleInputEmail1" 
                placeholder="Enter userEmail">
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userPassword</label>
              </label><span class="text-danger">
                *</span>
                <input type="password" name="userPassword" class="form-control" value="{{old('userPassword')}}"id="exampleInputEmail1" 
                placeholder="Enter userPassword">
              </div>
            </div>
            <br>
            <div class="card-body">
              <div class="form-group">
                <label class="form-label" for="status"> Choose Status
                  </label><span class="text-danger">
                    *</span>
                <select class="form-control" name="status" value="{{old('status')}}">
                    <option value="">Select status</option>
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                    
                </select>
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter otp</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="otp" class="form-control" value="{{old('otp')}}"id="exampleInputEmail1" 
                placeholder="Enter otp">
              </div>
            </div>
            <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter entryTime</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="entryTime" class="form-control" value="{{old('entryTime')}}"id="exampleInputEmail1" 
                placeholder="Enter entryTime">
              </div></div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter payroll</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="payroll" class="form-control" value="{{old('payroll')}}"id="exampleInputEmail1" 
                placeholder="Enter payroll">
              </div>
              </div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose city</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="city" value="{{old('city')}}">
                     @foreach($city as $d)
                  <option value="{{$d->city_id}}">{{$d->city_name}}</option>
                    @endforeach 
                </select>
              </div></div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose state</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="state" value="{{old('state')}}">
                  @foreach($state as $d)
                  <option value="{{$d->state_id}}">{{$d->name}}</option>
                    @endforeach 
                </select>
              </div>
              </div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose country</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="country" value="{{old('country')}}">
                  @foreach($country as $d)
                  <option value="{{$d->country_id}}">{{$d->country_name}}</option>
                    @endforeach 
                </select>
              </div>
              </div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter pinCode</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="pinCode" class="form-control" value="{{old('pinCode')}}"id="exampleInputEmail1" 
                placeholder="Enter pinCode">
              </div>
              </div>
             
             
              
              <div class="modal-footer">
                {{-- <button type="button"id="myModal" class="btn btn-secondary" 
                data-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
        <div id="message"></div>
    </div>
      </div>
      
    </div>
  </div>
</div>
</div>
{{-- User Form End --}}

{{-- Edit Form Start --}}
<div class="modal fade" id="editModel"
 tabindex="-1" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Form</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="closeModal()"
        aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if($errors->any())
        <ul>
          @foreach($errors->all()  as $error)
          <li>{{$error}}</li>
          @endforeach
      </ul>
      @endif
     
        <form id="quickForm" action="{{url('update')}}"  method="post">
            @csrf
  @method('PUT')
            <input type="hidden" id="stud_id" name="stud_id">
  
              <div class="card-body">
                  
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose companyId</label>
                  <select class="form-control" id="companyId" name="companyId" >
                
                    @foreach($company as $d)
                    <option value="{{$d->company_detail_id}}">{{$d->company_detail_id}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter firstName</label>
                  <input type="text" name="firstName" class="form-control" 
                  id="firstName" 
                  placeholder="Enter firstName">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter lastName</label>
                  <input type="text" name="lastName" class="form-control"  id="lastName" 
                  placeholder="Enter lastName">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter userEmail</label>
                  <input type="email" name="userEmail" class="form-control"id="userEmail" placeholder="Enter userEmail">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter userPassword</label>
                  <input type="password" name="userPassword" class="form-control" id="userPassword"  placeholder="Enter userPassword">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label class="form-label" for="status"> Choose Status
                    </label><span class="text-danger">
                      *</span>
                  <select class="form-control" name="status"id="status">
                  
                      <option value="">Select status</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                      
                  </select>
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter otp</label>
                  <input type="text" name="otp" class="form-control"
                  
                   id="otp" 
                  placeholder="Enter otp">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter entryTime</label>
                  <input type="text" name="entryTime" class="form-control" 
               
                  id="entryTime" 
                  placeholder="Enter entryTime">
                </div></div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter payroll</label>
                  <input type="text" name="payroll" class="form-control" 
                 
                  id="payroll" 
                  placeholder="Enter payroll">
                </div>
                </div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose city</label>
                  <select class="form-control" id="city" name="city" >
                
                  
                  @foreach($city as $d)
                  <option value="{{$d->city_id}}">{{$d->city_name}}</option>
                    @endforeach 
                  </select>
                </div></div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose state</label>
                  <select class="form-control" id="state" name="state" >
                  @foreach($state as $d)
                  <option value="{{$d->state_id}}">{{$d->name}}</option>
                    @endforeach 
                  </select>
                </div>
                </div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose country</label>
                  <select class="form-control" id="country" name="country"  >
                  @foreach($country as $d)
                  <option value="{{$d->country_id}}">{{$d->country_name}}</option>
                    @endforeach 
                  </select>
                </div>
                </div>
           <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter pinCode</label>
                  <input type="text" name="pinCode" class="form-control" 
                
                  id="pinCode" 
                  placeholder="Enter pinCode">
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" 
                  data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
          </form>
      </div>
        </div>
        
      </div>
    </div>
  </div>
{{-- Edit Form End --}}







@endsection
 @section('scripts')
<script>

$(document).ready(function(){
$("#myModal").on('click',function()
{
$('#model_todo').modal('hide');
});



// table query
$.ajax({
        url: '/user/index', // Replace with the actual URL to fetch the data from
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Iterate over each data item and append a new row to the table
            $.each(data, function(index, item) {
              console.log('index',item)
                var row = '<tr>' +
                             '<td>' + item.userId+ '</td>' +
                            '<td>' + item.companyId + '</td>' +
                            '<td>' + item.firstName + '</td>' +
                            '<td>' + item.lastName + '</td>' +
                            '<td>' + item.userEmail + '</td>' +
                            '<td>' + item.userPassword + '</td>' +
                            '<td>' + item.status + '</td>' +
                            '<td>' + item.otp + '</td>' +
                            '<td>' + item.entryTime + '</td>' +
                            '<td>' + item.payroll + '</td>' +
                            '<td>' + item.city + '</td>' +
                            '<td>' + item.state + '</td>' +
                            '<td>' + item.country + '</td>' +
                            '<td>' + item.pinCode + '</td>' +
                            '<td>' +
                        '<button class="btn btn-primary edit-btn"data-toggle="modal" data-target="#editModel" data-id="' + item.stud_id + '">Edit</button> ' +
                        '<button class="btn btn-danger delete-btn" data-id="' + item.userId + '">Delete</button>' +
                        '</td>' +                        
                          '</tr>';
                $('#data-table tbody').append(row);
            });
        },
        error: function() {
            // Handle error if data retrieval fails
            alert('Error retrieving data.');
        }
    });

// end table query
// insert ajax query

$("#add").on('click',function()
{
$("#model_todo").modal('show')
$("form").on('submit',function(e)
{
  e.preventDefault();
// alert('priti');
  $.ajax({
    url:"/user/store/",
    data:$("#form_todo").serialize(),
    type:'POST',
    success:function(result)
    {
// start table code
$.ajax({
        url: '/user/index', // Replace with the actual URL to fetch the data from
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Iterate over each data item and append a new row to the table
            $.each(data, function(index, item) {
              console.log('index',item)
                var row = '<tr>' +
                           '<td>' + item.userId+ '</td>' +
                            '<td>' + item.companyId + '</td>' +
                            '<td>' + item.firstName + '</td>' +
                            '<td>' + item.lastName + '</td>' +
                            '<td>' + item.userEmail + '</td>' +
                            '<td>' + item.userPassword + '</td>' +
                            '<td>' + item.status + '</td>' +
                            '<td>' + item.otp + '</td>' +
                            '<td>' + item.entryTime + '</td>' +
                            '<td>' + item.payroll + '</td>' +
                            '<td>' + item.city + '</td>' +
                            '<td>' + item.state + '</td>' +
                            '<td>' + item.country + '</td>' +
                            '<td>' + item.pinCode + '</td>' +
                            '<td>' +
                        '<button class="btn btn-primary edit-btn"data-toggle="modal" data-target="#editModel" data-id="' + item.stud_id + '">Edit</button> ' +
                        '<button class="btn btn-danger delete-btn" data-id="' + item.userId + '">Delete</button>' +
                        '</td>' +                         
                          '</tr>';
                $('#data-table tbody').append(row);
            });
        },
        error: function() {
            // Handle error if data retrieval fails
            alert('Error retrieving data.');
        }
    });
// end
      // working
      // console.log(result);
      jQuery('#message').html(result.msg);
      jQuery('#form_todo')['0'].reset();
    }
  
  });
});

});



// edit ajax query

 $(document).on('click','.editbtn',function() {
        var stud_id=$(this).val();
        // alert(stud_id); 
        // below line to show model on that editbutton
        $('#editModel').modal('show'); 

        // alert(stud_id); working
        $.ajax({
          type:"GET",
          url: "/edit/"+stud_id,
          success: function(response)
          {
            
            // console.log(response); working
            $('#companyId').val(response.student.companyId);
            // console.log(response.student.companyId); 
            $('#firstName').val(response.student.firstName);
            $('#lastName').val(response.student.lastName);
            $('#userEmail').val(response.student.userEmail);
            $('#userPassword').val(response.student.userPassword);
            $('#status').val(response.student.status);
            $('#otp').val(response.student.otp);
            $('#entryTime').val(response.student.entryTime);
            $('#payroll').val(response.student.payroll);
            $('#city').val(response.student.city);
            $('#state').val(response.student.state);
            $('#country').val(response.student.country);
            $('#pinCode').val(response.student.pinCode);
            // for getting id in above textbox
            $('#stud_id').val(stud_id);
          }
        });
});
});



</script>
@endsection