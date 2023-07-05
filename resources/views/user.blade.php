@extends('layouts.master1')
@section('content')
  
    <br>
    <br>
    <br>
   <br>
   <br>
   <br>
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  User View
</button></center><br>
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
                    {{-- <a href="{{route('user')}}"> --}}
                    {{-- <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a> --}}
                </div>
            
<table class="table table-bordered table-hover" id="dataTable">
  <thead>
    <tr>
      <th style="width:5px">ID</th>
      <th style="width:10px">CompanyId</th>
      <th style="width:15px">FirstName</th>
      <th style="width:10px">LastName</th>
      <th style="width:10px">UserEmail</th>
      <th style="width:15px">UserPassword</th>
      <th style="width:10px">Otp</th>
      <th style="width:15px">EntryTime</th>
      <th style="width:10px">Payroll</th>
      <th style="width:10px">City</th>
      <th style="width:10px">State</th>
      <th style="width:10px">Country</th>
      <th style="width:10px">pinCode</th>
      <th style="width:50px">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($user as $d)
       <tr>
        <td>{{$d->userId}} </td>
        <?php $data = \App\Models\Company::where('company_detail_id',$d->companyId)->first();
        ?>
        <td>{{@$data->company_detail_id}}</td>
       <td>{{$d->firstName}}</td>
       <td>{{$d->lastName}}</td>
       <td>{{$d->userEmail}}</td>
       <td>{{$d->userPassword}}</td>
      
      <td>{{$d->otp}}</td>
      <td>{{$d->entryTime}}</td>
      <td>{{$d->payroll}}</td>
      {{-- this is for data show on table with that name --}}
      <?php $data = \App\Models\City::where('city_id',$d->city)->first();
      ?>
      <td>{{@$data->city_name}}</td>
      <?php $data = \App\Models\State::where('state_id',$d->state)->first();
      ?>
      <td>{{@$data->name}}</td>
      <?php $data = \App\Models\Country::where('country_id',$d->country)->first();
      ?>
      <td>{{@$data->country_name}}</td>
      <td>{{$d->pinCode}}</td>
      <td>  


{{-- 
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" 
        data-target="#exampleModal11">
          Edit View
        </button> --}}
         <button class="btn btn-warning" type="button" >  
         {{-- @dd($d) --}}
          <a href="{{route('user.edit',$d->userId)}}">
           Edit</button>
          </a> 
       
            <button type="button" class="btn btn-danger">
              {{-- @dd($d) --}}
              <a href="{{route('user.delete',$d->userId)}}">
            Delete </button>  </a>  
        </td>
  </tr>
      @endforeach
  </tbody>
</table>
          </div></div></div></div>
</section>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Form</h5>
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
        <form id="quickForm" action="{{route('user.store')}}" method="post">
          @csrf



            <div class="card-body">
                
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose companyId</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="companyId" value="{{old('companyId')}}">
                   
                  @foreach($company as $d)
                     {{-- @dd($company) --}}
                  <option value="{{$d->company_detail_id}}">{{$d->company_detail_id}}</option>
                    @endforeach 
                </select>
              </div>
            </div><br><br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter firstName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="firstName" class="form-control" value="{{old('firstName')}}"id="exampleInputEmail1" 
                placeholder="Enter firstName">
              </div>
            </div><br><br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter lastName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="lastName" class="form-control" value="{{old('lastName')}}"id="exampleInputEmail1" 
                placeholder="Enter lastName">
              </div>
            </div><br><br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userEmail</label>
              </label><span class="text-danger">
                *</span>
                <input type="email" name="userEmail" class="form-control" value="{{old('userEmail')}}"id="exampleInputEmail1" 
                placeholder="Enter userEmail">
              </div>
            </div><br><br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userPassword</label>
              </label><span class="text-danger">
                *</span>
                <input type="password" name="userPassword" class="form-control" value="{{old('userPassword')}}"id="exampleInputEmail1" 
                placeholder="Enter userPassword">
              </div>
            </div>
            <br><br>
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
            </div><br><br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter otp</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="otp" class="form-control" value="{{old('otp')}}"id="exampleInputEmail1" 
                placeholder="Enter otp">
              </div>
            </div>
            <br><br>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter entryTime</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="entryTime" class="form-control" value="{{old('entryTime')}}"id="exampleInputEmail1" 
                placeholder="Enter entryTime">
              </div></div>
              <br><br>
              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter payroll</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="payroll" class="form-control" value="{{old('payroll')}}"id="exampleInputEmail1" 
                placeholder="Enter payroll">
              </div>
              </div>
              <br><br>
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
              <br><br>
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
              <br><br>
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
              <br><br>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
    </div>
      </div>
      
    </div>
  </div>
</div>
</div>








@endsection

