<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="quickForm" action="{{route('user.store')}}" method="post">
          @csrf



            <div class="card-body">
                
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose companyId</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="companyId" value="{{old('companyId')}}">
                     {{-- @foreach($company as $d)
                  <option value="{{$d->company_detail_id}}">{{$d->company_detail_id}}</option>
                    @endforeach  --}}
                </select>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter firstName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="firstName" class="form-control" value="{{old('firstName')}}"id="exampleInputEmail1" 
                placeholder="Enter firstName">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter lastName</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="lastName" class="form-control" value="{{old('lastName')}}"id="exampleInputEmail1" 
                placeholder="Enter lastName">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userEmail</label>
              </label><span class="text-danger">
                *</span>
                <input type="email" name="userEmail" class="form-control" value="{{old('userEmail')}}"id="exampleInputEmail1" 
                placeholder="Enter userEmail">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter userPassword</label>
              </label><span class="text-danger">
                *</span>
                <input type="password" name="userPassword" class="form-control" value="{{old('userPassword')}}"id="exampleInputEmail1" 
                placeholder="Enter userPassword">
              </div>
            </div>

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
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter otp</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="otp" class="form-control" value="{{old('otp')}}"id="exampleInputEmail1" 
                placeholder="Enter otp">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter entryTime</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="entryTime" class="form-control" value="{{old('entryTime')}}"id="exampleInputEmail1" 
                placeholder="Enter entryTime">
              </div></div>
              
              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter payroll</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="payroll" class="form-control" value="{{old('payroll')}}"id="exampleInputEmail1" 
                placeholder="Enter payroll">
              </div>
              </div>

              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose city</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="city" value="{{old('city')}}">
                     {{-- @foreach($city as $d)
                  <option value="{{$d->city_id}}">{{$d->city_name}}</option>
                    @endforeach  --}}
                </select>
              </div></div>
        
              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose state</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="state" value="{{old('state')}}">
                  {{-- @foreach($state as $d)
                  <option value="{{$d->state_id}}">{{$d->name}}</option>
                    @endforeach  --}}
                </select>
              </div>
              </div>
               
              <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose country</label>
              </label><span class="text-danger">
                *</span>
                <select class="form-control" id="exampleFormControlSelect1" name="country" value="{{old('country')}}">
                  {{-- @foreach($country as $d)
                  <option value="{{$d->country_id}}">{{$d->country_name}}</option>
                    @endforeach  --}}
                </select>
              </div>
              </div>

              <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter pinCode</label>
              </label><span class="text-danger">
                *</span>
                <input type="text" name="pinCode" class="form-control" value="{{old('pinCode')}}"id="exampleInputEmail1" 
                placeholder="Enter pinCode">
              </div>
              </div>
              <div class="card-body">
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div></div>
        </form>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>

