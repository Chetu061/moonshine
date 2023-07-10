
@extends('layouts.master1')
@section('content')

<br><br><br>
<br><br><br><br><br><br>


<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">UserView</h3>
                  </div>
                  <div class="card-header">
                    <h3 class="card-title"><a href="{{route('customerview')}}">
                      <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a>
                  </div>
              
<table class="table table-bordered table-hover" id="dataTable">
    <thead>
      <tr>
        <th style="width:5px">ID</th>
        {{-- <th style="width:10px">Customer_id</th> --}}
        {{-- <th style="width:15px">User_id</th> --}}
        {{-- <th style="width:10px">Company_detail_id</th> --}}
        <th style="width:10px">Bank_id</th>
        <th style="width:15px">Group_cos</th>
        <th style="width:10px">Address1</th>
        <th style="width:15px">Address2</th>
        <th style="width:10px">Area</th>
        <th style="width:10px">Landmark</th>
        <th style="width:10px">Country</th>
        <th style="width:10px">State</th>
        <th style="width:10px">City</th>
        <th style="width:50px">Address_type</th>
        <th style="width:10px">Phone_no</th>
        <th style="width:10px">Fax</th>
        <th style="width:10px">Location_email</th>
        <th style="width:10px">Website</th>
        <th style="width:10px">Ref_by</th>
        <th style="width:50px">Trade_activity</th>
        <th style="width:10px">Status</th>
        <th style="width:10px">Facility_location</th>
        <th style="width:50px">Customer_name</th>
        <th style="width:10px">Customer_email</th>
        <th style="width:50px">Postbox</th>
        <th style="width:50px">Action</th>
      </tr>
    </thead>
    <tbody>
       @foreach($cust as $d)
       {{-- @dd($cust) --}}
         <tr>
       
         <td>{{$d->bank_id}}</td>
         <td>{{$d->group_cos}}</td>
        <td>{{$d->address1}}</td>
        <td>{{$d->address2}}</td>
        <td>{{$d->area}}</td>
      <td>{{$d->landmark}}</td>
      <?php $data = \App\Models\Country::where('country_id',$d->country)->first();
      ?>
      <td>{{@$data->country_name}}</td>
        <?php $data = \App\Models\State::where('state_id',$d->state)->first();
        ?>
        <td>{{@$data->name}}</td>
        <?php $data = \App\Models\City::where('city_id',$d->city)->first();
        ?>
        <td>{{@$data->city_name}}</td>
         <td>{{$d->address_type}}</td>
         <td>{{$d->phone_no}}</td>
         <td>{{$d->fax}}</td>
        <td>{{$d->location_email}}</td>
        <td>{{$d->website}}</td>
        <td>{{$d->ref_by}}</td>
       <td>{{$d->trade_activity}}</td>
        <td>{{$d->status}}</td>
        <td>{{$d->facility_location}}</td>
    <td>{{$d->customer_name}}</td>
        <td>{{$d->customer_email}}</td>
        <td>{{$d->postbox}}</td>
       
        <td>  
           <button class="btn btn-warning" type="button" > 
           {{-- @dd($d) --}}
            <a href="
            {{-- {{route('user.edit',$d->userId)}} --}}
            ">
             Edit</button>
            </a>
         
              <button type="button" class="btn btn-danger">
                {{-- @dd($d) --}}
                <a href="
                {{-- {{route('user.delete',$d->userId)}} --}}
                ">
              Delete
            
          </button>  </a>  
          </td>
    </tr>
        @endforeach
    </tbody>
  </table>
            </div></div></div></div>
</section>

    @endsection
 
  