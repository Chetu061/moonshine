
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
                    <h3 class="card-title"><a href="{{route('user')}}">
                      <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a>
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
          <?php $data = \App\Models\Company::where('company_detail_id',$d->city)->first();
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
           <button class="btn btn-warning" type="button" > 
           {{-- @dd($d) --}}
            <a href="{{route('user.edit',$d->userId)}}">
             Edit</button>
            </a>
         
              <button type="button" class="btn btn-danger">
                {{-- @dd($d) --}}
                <a href="{{route('user.delete',$d->userId)}}">
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
 
  {{-- datatable code --}}
  @push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js">
  </script>

  <script>

$(document).ready(function() {
  
    $('#dataTable').DataTable(
      {
        "pageLength" :5
      }
    );//dataTable is id of <table>
});
</script>
  @endpush

   
 
 
  