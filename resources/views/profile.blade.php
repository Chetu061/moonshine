@extends('layouts.master1')
@section('content')
<br><br>
<br><br>
<br>
<br>

<div class="page-content">
<div class="row profile-body">
    
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Company Name:</label>
                  <p class="text-muted">
                    {{ $profileData->company_name }}
                </p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">
                    {{ $profileData->admin_email }}
                </p>
                </div>
                
                
              </div>
            </div>
          </div>
          
            
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
             <div class="card">
              <div class="card-body">

			<h6 class="card-title">Update Admin Profile </h6>

			<form method="POST" action="
             {{ route('admin.profile.store') }}"
             class="forms-sample" enctype="multipart/form-data">
				@csrf

				<div class="mb-3">
					<label for="exampleInputUsername1" class="form-label">company_name</label>
   <input type="text" name="company_name" class="form-control" id="exampleInputUsername1" 
   autocomplete="off" value="{{ $profileData->company_name }}">
				</div>

				{{-- <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Name  </label>
					 <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                      autocomplete="off" value="
                      {{-- {{ $profileData->name }} 
                      ">
				</div> --}}

				<div class="mb-3"> 
 <label for="exampleInputEmail1" class="form-label">Email  </label>
					 <input type="email" name="admin_email" class="form-control" id="exampleInputUsername1" 
                     autocomplete="off" value=" {{ $profileData->admin_email}}">
				</div>
			 
	 <button type="submit" class="btn btn-primary me-2">Save Changes </button>
			 
			</form>

              </div>
            </div>


          </div>
        
        </div>

@endsection






