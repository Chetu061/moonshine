
@extends('layouts.master1')
@section('content')


<br>
<br>
<br>
<br>

<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" 
  data-target="#exampleModal">
  Edit Form
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
        <form id="quickForm" action="{{route('user.update',$user->userId)}}"
          method="post">
            @csrf
  
  
  
              <div class="card-body">
                  
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose companyId</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="companyId" value="{{$user->companyId}}">
                    @foreach($company as $d)
                    <option value="{{$d->company_detail_id}}">{{$d->company_detail_id}}</option>
                      @endforeach 
                  </select>
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter firstName</label>
                  <input type="text" name="firstName" class="form-control" value="{{$user->firstName}}"id="exampleInputEmail1" 
                  placeholder="Enter firstName">
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter lastName</label>
                  <input type="text" name="lastName" class="form-control" value="{{$user->lastName}}"id="exampleInputEmail1" 
                  placeholder="Enter lastName">
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter userEmail</label>
                  <input type="email" name="userEmail" class="form-control" value="{{$user->userEmail}}"id="exampleInputEmail1" 
                  placeholder="Enter userEmail">
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter userPassword</label>
                  <input type="password" name="userPassword" class="form-control" value="{{$user->userPassword}}"id="exampleInputEmail1" 
                  placeholder="Enter userPassword">
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label class="form-label" for="status"> Choose Status
                    </label><span class="text-danger">
                      *</span>
                  <select class="form-control" name="status" value="{{$user->status}}">
                      <option value="">Select status</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                      
                  </select>
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter otp</label>
                  <input type="text" name="otp" class="form-control" value="{{$user->otp}}"id="exampleInputEmail1" 
                  placeholder="Enter otp">
                </div>
              </div>
              <br><br>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter entryTime</label>
                  <input type="text" name="entryTime" class="form-control" value="{{$user->entryTime}}"id="exampleInputEmail1" 
                  placeholder="Enter entryTime">
                </div></div>
                <br><br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter payroll</label>
                  <input type="text" name="payroll" class="form-control" value="{{$user->payroll}}"id="exampleInputEmail1" 
                  placeholder="Enter payroll">
                </div>
                </div>
                <br><br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose city</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="city" 
                  value="{{$user->city}}">
                  @foreach($city as $d)
                  <option value="{{$d->city_id}}">{{$d->city_name}}</option>
                    @endforeach 
                  </select>
                </div></div>
                <br><br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose state</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="state" 
                  value="{{$user->state}}">
                  @foreach($state as $d)
                  <option value="{{$d->state_id}}">{{$d->name}}</option>
                    @endforeach 
                  </select>
                </div>
                </div>
                <br><br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose country</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="country" 
                  value="{{$user->country}}">
                  @foreach($country as $d)
                  <option value="{{$d->country_id}}">{{$d->country_name}}</option>
                    @endforeach 
                  </select>
                </div>
                </div>
                <br><br>
                <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter pinCode</label>
                  <input type="text" name="pinCode" class="form-control" value="{{$user->pinCode}}"id="exampleInputEmail1" 
                  placeholder="Enter pinCode">
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </form>
      </div>
        </div>
        
      </div>
    </div>
  </div>
  @endsection
  
  