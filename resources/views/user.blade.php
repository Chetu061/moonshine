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
                <div id="success_message"></div>
<table class="table table-bordered table-hover w-100" id="data-table">
  <thead>
    <tr>
      <th style="width:2px">ID</th>
      <th style="width:5px">ComId</th>
      <th style="width:15px">FName</th>
      <th style="width:10px">LName</th>
      <th style="width:10px">UEmail</th>
      {{-- <th style="width:5px">UPassword</th> --}}
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
                <input type="text" name="firstName" class="form-control" value="{{old('firstName')}}"id="firstName" 
                placeholder="Enter firstName"required>
               
                {{-- <span class="text-danger error-text name_error"></span> --}}
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter lastName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="lastName" class="form-control"
                 value="{{old('lastName')}}"id="lastName" 
                placeholder="Enter lastName"required>
             
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userEmail</label>
              </label><span class="text-danger">
                *</span>
                <input type="email" name="userEmail" class="form-control" value="{{old('userEmail')}}"id="userEmail" 
                placeholder="Enter userEmail"required>
               
              </div>
            </div> <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userPassword</label>
              </label><span class="text-danger">
                *</span>
                <input type="password" name="userPassword" class="form-control" value="{{old('userPassword')}}"id="userPassword" 
                placeholder="Enter userPassword"required>
              
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
                <input type="text" name="otp" class="form-control" value="{{old('otp')}}"id="otp" 
                placeholder="Enter otp"required>
                
              </div>
            </div>
            <br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter entryTime</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="entryTime" class="form-control" value="{{old('entryTime')}}"id="entryTime" 
                placeholder="Enter entryTime"required>
              
              </div></div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter payroll</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="payroll" class="form-control" value="{{old('payroll')}}"id="payroll" 
                placeholder="Enter payroll"required>
              
              </div>
              </div>
              <br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose city</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="city" name="city" value="{{old('city')}}">
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
                <select class="form-control" id="state" name="state" value="{{old('state')}}">
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
                <select class="form-control" id="country" name="country" value="{{old('country')}}">
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
                <input type="text" name="pinCode" class="form-control" value="{{old('pinCode')}}"id="pinCode" 
                placeholder="Enter pinCode"required>
               
                
              </div>
              </div>
             
             
              
              <div class="modal-footer">
                {{-- <button type="button"id="myModal" class="btn btn-secondary" 
                data-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
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
     
      <form action="{{url('update')}}" method="post">
        @csrf
        @method('PUT')
        <div id="update_message"></div>
            <input type="hidden" id="edit_stud_id" name="stud_id">
  
              <div class="card-body">
                  
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose companyId</label>
                  <select class="form-control" id="edit_companyId" name="companyId" >
                
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
                  <input type="text" name="firstName" class="form-control" id="edit_firstname"
                  placeholder="Enter firstName" >
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter lastName</label>
                  <input type="text" name="lastName" class="form-control"  id="edit_lastName" 
                  placeholder="Enter lastName">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter userEmail</label>
                  <input type="email" name="userEmail" class="form-control"id="edit_userEmail" placeholder="Enter userEmail">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter userPassword</label>
                  <input type="password" name="userPassword" class="form-control" id="edit_userPassword"  placeholder="Enter userPassword">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label class="form-label" for="status"> Choose Status
                    </label><span class="text-danger">
                      *</span>
                  <select class="form-control" name="status"id="edit_status">
                  
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
                  <input type="text" name="otp" class="form-control" id="edit_otp"  placeholder="Enter otp">
                </div>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter entryTime</label>
                  <input type="text" name="entryTime" class="form-control"  id="edit_entryTime" 
                  placeholder="Enter entryTime">
                </div></div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter payroll</label>
                  <input type="text" name="payroll" class="form-control" id="edit_payroll" 
                  placeholder="Enter payroll">
                </div>
                </div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose city</label>
                  <select class="form-control" id="edit_city" name="city" >
                
                  
                  @foreach($city as $d)
                  <option value="{{$d->city_id}}">{{$d->city_name}}</option>
                    @endforeach 
                  </select>
                </div></div>
                <br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose state</label>
                  <select class="form-control" id="edit_state" name="state" >
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
                  <select class="form-control" id="edit_country" name="country"  >
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
                  <input type="text" name="pinCode" class="form-control"  id="edit_pinCode" placeholder="Enter pinCode">
                </div>
                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" 
                  data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-primary update_student">Update</button>
                </div>
          </form>
      </div>
        </div>
        
      </div>
    </div>
  </div>
{{-- Edit Form End --}}
{{-- delete modal --}}
<div class="modal fade" id="deleteModel" 
  tabindex="-1" 
  aria-labelledby="exampleModalLabel" 
  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" 
          id="exampleModalLabel">Delete Modal title</h5>
          <button type="button" class="close" 
          data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          {{-- type=text id display in textbox --}}
            <input type="hidden" id="delete_stud_id"
            name="stud_id"> 

           <h4>Are you sure want to delete this data</h4>
            <div class="modal-footer">
                <button type="button" 
                class="btn btn-secondary close" 
                data-dismiss="modal">Close</button>
                <button type="submit" 
                class="btn btn-primary delete_student_btn">Yes Delete</button>
              </div>

        </div>
      </div>
    </div>
  </div>
 
  {{-- end delete --}}





@endsection
 @section('scripts')
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
   // Get the modal element
   var modal = $('#deleteModel');

// Get the close button element
var closeButton = $('.close');

// Handle the click event on the close button
closeButton.on('click', function() {
  modal.hide(); 
  location.reload();
  // or modal.modal('hide') if you're using a modal library
});
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
                            // '<td>' + item.userPassword + '</td>' +
                            '<td>' + item.status + '</td>' +
                            '<td>' + item.otp + '</td>' +
                            '<td>' + item.entryTime + '</td>' +
                            '<td>' + item.payroll + '</td>' +
                            '<td>' + item.city.city_name + '</td>' +
                            '<td>' + item.state.name + '</td>' +
                            '<td>' + item.country.country_name	 + '</td>' +
                            '<td>' + item.pinCode + '</td>' +
                            '<td>' +
                        '<button type="button" class="btn btn-primary edit_student" value="' + item.userId + '">Edit</button> ' +
                        '<button class="btn btn-danger delete_student" value="' + item.userId + '"> Delete</button>' +
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

$("#add").on('click',function(){
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
                                // '<td>' + item.userPassword + '</td>' +
                                '<td>' + item.status + '</td>' +
                                '<td>' + item.otp + '</td>' +
                                '<td>' + item.entryTime + '</td>' +
                                '<td>' + item.payroll + '</td>' +
                                '<td>' + item.city.city_name+'</td>' +
                                '<td>' + item.state.name + '</td>' +
                                '<td>' + item.country.country_name	 + '</td>' +
                                '<td>' + item.pinCode + '</td>' +
                                '<td>' +
                                  '<button type="button" class="btn btn-primary edit_student" value="' + item.userId + '">Edit</button> ' +
                            '<button class="btn btn-danger delete_student" value="' + item.userId + '"> Delete</button>' +
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

 $(document).on('click','.edit_student',function(e) 
 {
  e.preventDefault();
        var stud_id=$(this).val();
        // alert(stud_id); 
        // below line to show model on that editbutton
        $('#editModel').modal('show');
    $.ajax({
  type: "GET",
  url: "/edit/"+stud_id,
  success: function (response) {
    // console.log(response);
    if(response.status==404)
    {
      $('#success_message').html("");
      $('#success_message').addclass('alert alert-danger');
      $('#success_message').text(response.message);
    }
    else{
            // console.log('ss',response.student.firstName)
            $('#edit_companyId').val(response.student.companyId),
            $('#edit_firstname').val(response.student.firstName),
            // alert(response.student.lastName);
            $('#edit_lastName').val(response.student.lastName),
            $('#edit_userEmail').val(response.student.userEmail),
            $('#edit_userPassword').val(response.student.userPassword),
            $('#edit_status').val(response.student.status),
            $('#edit_otp').val(response.student.otp),
            $('#edit_entryTime').val(response.student.entryTime),
            $('#edit_payroll').val(response.student.payroll),
            $('#edit_city').val(response.student.city),
            $('#edit_state').val(response.student.state),
            $('#edit_country').val(response.student.country),
            $('#edit_pinCode').val(response.student.pinCode),

            $('#edit_stud_id').val(stud_id)
            // alert(stud_id);
    }
  }
        });
      });
// update query
      $(document).on('click','.update_student', function (e) {
  e.preventDefault();
  var stud_id=$('#edit_stud_id').val();
  var data={
    'companyId': $('#companyId').val(),
    'firstName': $('#firstName').val(),
    'lastName': $('#lastName').val(),
    'userEmail': $('#userEmail').val(),
    'userPassword': $('#userPassword').val(),
    'status': $('#status').val(),
    'otp': $('#otp').val(),
    'entryTime': $('#entryTime').val(),
    'payroll': $('#payroll').val(),
    'city': $('#city').val(),
    'state': $('#state').val(),
    'country': $('#country').val(),
    'pinCode': $('#pinCode').val(),
  }
  $.ajaxSetup({
    
});
  $.ajax({
    url: "/update/"+stud_id,
    type: "PUT",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: data,
    dataType: "json",
    success: function (response) {
      // console.log(response)
      if(response.status==404){
        $('#update_message').html("");
        // $('#success_message').addclass('alert alert-danger');
      $('#success_message').text(response.message);
      }else{
        $('#update_message').html("");
        $('#success_message').addclass('alert alert-danger');
      $('#success_message').text(response.message);
      $('#editModel').modal('hide');
      }
    }
  });
  
});
// end update code


// delete query
$(document).on('click','.delete_student', function (e) {
  e.preventDefault();
  var stud_id=$(this).val();
  // alert(stud_id);
$('#delete_stud_id').val(stud_id);
$('#deleteModel').modal('show');
  
});
$(document).on('click','.delete_student_btn', function (e) {
  e.preventDefault();
  var stud_id=$('#delete_stud_id').val();
  $.ajaxSetup({
   
  });
  $.ajax({
    url: "/user/delete/"+stud_id,
    type: "DELETE",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    success: function (response) {
      // console.log('response');
      $('#message').addclass('alert alert-success');
        $('#message').text(response.message);
        $('#deleteModel').modal('hide')
      
    }
  });
});
// end delete

});
// valiadtion query
$('#form_todo').validate({
  reles:{
    firstName:{
      reuired:true,
    },
    lastName:{
      reuired:true,
    },
    userEmail:{
      reuired:true,
    },
    userPassword:{
      reuired:true,
    },
    otp:{
      reuired:true,
    },
    entryTime:{
      reuired:true,
    },
    payroll:{
      reuired:true,
    },
    pinCode:{
      reuired:true,
    }

  },
  messages:{
    firstName:"please input firstName",
    lastName:"please input lastName",
    userEmail:"please input userEmail",
    userPassword:"please input userPassword",
    otp:"please input otp",
    entryTime:"please input entryTime",
    payroll:"please input payroll",
    pinCode:"please input pinCode",
}
});
// end validation query





</script>
@endsection