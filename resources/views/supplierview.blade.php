
@extends('layouts.master1')
@section('content')

<br><br><br>
<br><br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">SupplierView Form</h3>
             
            <div class="col-md-6"></div>
        <form id="quickForm" action=""
        {{-- {{route('color.store')}} --}}
        method="post">
          @csrf



            <div class="card-body">
                
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose customer_id</label>
                <select class="form-control" id="exampleFormControlSelect1" name="customer_id" 
                value="{{old('customer_id')}}">
                     {{-- @foreach($user as $pro)
                  <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach  --}}
                </select>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Choose user_id</label>
              <select class="form-control" id="exampleFormControlSelect1" name="user_id" 
              value="{{old('user_id')}}">
                   {{-- @foreach($user as $pro)
                <option value="{{$pro->id}}">{{$pro->name}}</option>
                  @endforeach  --}}
              </select>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Choose company_detail_id</label>
              <select class="form-control" id="exampleFormControlSelect1" name="company_detail_id" 
              value="{{old('company_detail_id')}}">
                   {{-- @foreach($user as $pro)
                <option value="{{$pro->id}}">{{$pro->name}}</option>
                  @endforeach  --}}
              </select>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Choose bank_id</label>
              <select class="form-control" id="exampleFormControlSelect1" name="bank_id" 
              value="{{old('bank_id')}}">
                   {{-- @foreach($user as $pro)
                <option value="{{$pro->id}}">{{$pro->name}}</option>
                  @endforeach  --}}
              </select>
            </div>
          </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter firstName</label>
                <input type="text" name="firstName" class="form-control" value="{{old('firstName')}}"id="exampleInputEmail1" 
                placeholder="Enter firstName">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter group_cos</label>
                <input type="text" name="group_cos" class="form-control" value="{{old('group_cos')}}"id="exampleInputEmail1" 
                placeholder="Enter group_cos">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter address1</label>
                <input type="textarea" name="address1" class="form-control" value="{{old('address1')}}"id="exampleInputEmail1" 
                placeholder="Enter address1">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter address2</label>
                <input type="textarea" name="address2" class="form-control" value="{{old('address2')}}"id="exampleInputEmail1" 
                placeholder="Enter address2">
              </div>
            </div>


            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter area</label>
                <input type="text" name="area" class="form-control" value="{{old('area')}}"id="exampleInputEmail1" 
                placeholder="Enter area">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter landmark</label>
                <input type="text" name="landmark" class="form-control" value="{{old('landmark')}}"id="exampleInputEmail1" 
                placeholder="Enter landmark">
              </div>
            </div>
           

            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose country</label>
                <select class="form-control" id="exampleFormControlSelect1" name="country" 
                value="{{old('country')}}">
                     {{-- @foreach($user as $pro)
                  <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach  --}}
                </select>
              </div>
            </div>

            
            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose state</label>
                <select class="form-control" id="exampleFormControlSelect1" name="state" 
                value="{{old('state')}}">
                     {{-- @foreach($user as $pro)
                  <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach  --}}
                </select>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose	city</label>
                <select class="form-control" id="exampleFormControlSelect1" name="city" 
                value="{{old('city')}}">
                     {{-- @foreach($user as $pro)
                  <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach  --}}
                </select>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Choose	address_type</label>
                <select class="form-control" id="exampleFormControlSelect1" name="address_type" 
                value="{{old('address_type')}}">
                     {{-- @foreach($user as $pro)
                  <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach  --}}
                </select>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter phone_no</label>
                <input type="text" name="landmark" class="form-control" value="{{old('phone_no')}}"id="exampleInputEmail1" 
                placeholder="Enter phone_no">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter fax</label>
                <input type="text" name="fax" class="form-control" value="{{old('fax')}}"id="exampleInputEmail1" 
                placeholder="Enter fax">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter location_email</label>
                <input type="email" name="userEmail" class="form-control" value="{{old('location_email')}}"id="exampleInputEmail1" 
                placeholder="Enter location_email">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter website</label>
                <input type="text" name="website" class="form-control" value="{{old('website')}}"id="exampleInputEmail1" 
                placeholder="Enter website">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter ref_by</label>
                <input type="text" name="ref_by" class="form-control" value="{{old('ref_by')}}"id="exampleInputEmail1" 
                placeholder="Enter ref_by">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter trade_activity</label>
                <input type="text" name="trade_activity" class="form-control" value="{{old('trade_activity')}}"id="exampleInputEmail1" 
                placeholder="Enter trade_activity">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label class="form-label" for="status"> Choose status
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
                <label for="exampleInputEmail1">Enter facility_location</label>
                <input type="text" name="facility_location" class="form-control" value="{{old('facility_location')}}"id="exampleInputEmail1" 
                placeholder="Enter facility_location">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter customer_name</label>
                <input type="text" name="customer_name" class="form-control" value="{{old('customer_name')}}"id="exampleInputEmail1" 
                placeholder="Enter customer_name">
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter customer_email</label>
                <input type="email" name="customer_email" class="form-control" value="{{old('customer_email')}}"id="exampleInputEmail1" 
                placeholder="Enter customer_email">
              </div>
            </div>
 <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter postbox</label>
                <input type="text" name="postbox" class="form-control" value="{{old('postbox')}}"id="exampleInputEmail1" 
                placeholder="Enter postbox">
              </div>
            </div>
           
              <div class="card-body">
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div></div>
        </form>
    </div>
</div>   </div>
</div>
            </div>
    </section>
              </div>
    <div class="col-2"></div>

      @endsection