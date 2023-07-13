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
    <div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="" method="post" id="checkout_formid">
            @csrf
            <div class="form-group">
              <label for="country" class="text-black">
                Country <span class="text-danger">*</span></label>
              <select id="country" class="form-control"  name="country">
                <option value="1">Select a country</option>    
                <option value="bangladesh">bangladesh</option>    
                <option value="India">India</option>    
                <option value="Afghanistan">Afghanistan</option>    
                <option value="Africa">Africa</option>    
                <option value="USA">USA</option>    
                <option value="Antartica">Antartica</option>    
                <option value="Pakistan">Pakistan</option>    
                <option value="Shrilanka">Shrilanka</option>    
              </select>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="fname" class="text-black">First Name
                   <span class="text-danger">*</span></label>
                <input type="text" 
                 class="form-control" id="fname"value=" {{old('fname')}}"name="fname">
              </div>

              <div class="col-md-6">
                <label for="lname" class="text-black">Last Name 
                  <span class="text-danger">*</span></label>
                <input type="text" class="form-control"value=" {{old('lname')}}"id="lname" 
                name="lname">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="companyname" class="text-black">Company Name </label>
                <input type="text" class="form-control" id="companyname"
                value=" {{old('companyname')}}" name="companyname">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="address" class="text-black">Address 
                  <span class="text-danger">*</span></label>
                <input type="textarea" class="form-control" id="address"value=" 
                {{old('address')}}" name="address"
                 placeholder="Street address">
              </div>
            </div>

          

            <div class="form-group row">
              <div class="col-md-6">
                <label for="state" class="text-black">State  <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="state" name="state"value=" {{old('state')}}">
              </div>
              <div class="col-md-6">
                <label for="city" class="text-black">City <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="city" name="city"value=" {{old('city')}}">
              </div>
              <div class="col-md-6">
                <label for="zip_code" class="text-black">Post / Zip <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="zip_code" value=" {{old('zip_code')}}"
                name="zip_code">
              </div>
            </div>

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email"value=" {{old('email')}}">
              </div>
              <div class="col-md-6">
                <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="phone" value=" {{old('phone')}}"
                name="phone" >
              </div>
            </div>
{{-- 
            <div class="form-group">
              <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
              <div class="collapse" id="create_an_account">
                <div class="py-2">
                  <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                  <div class="form-group">
                    <label for="password" class="text-black">Account Password</label>
                    <input type="email" class="form-control" id="password"
                     name="password" placeholder="">
                  </div>
                </div>
              </div>
            </div> --}}


            <div class="form-group">
              <label for="comments" class="text-black">Order Notes</label>
              <textarea name="comments" id="comments" cols="30" rows="5" 
              class="form-control" placeholder="Write your notes here..."></textarea>
            </div>

            <div class="form-group">
            <label for="c_order_notes" class="text-black">Payment Method
                 </label><br><br>
               <input id="" name="payment_method" type="radio" 
                                          value="1"><img src="{{ asset('images/cash_on_delivery.png')}}" 
                                          alt="Cash on Delivery">
                                  <br><br>
                                          {{-- <input id="payment_method_bank" name="status" type="radio" value="2">
                                          <img src="{{ asset('images/paypal.png')}}" alt="Bank Transfer" />
                                      <br><br> --}}
                  {{-- <input id="payment_method_bank" name="status" type="radio" value="2">
                                          <img src="{{ asset('images/mollie.png')}}" alt="Bank Transfer" />
                                      <br><br>
                  --}}
         {{-- <a href="" >
          <input id="payment_method_stripe" name="payment_method" type="radio" 
                  value="2">
                                          <img src="{{ asset('images/stripe.png')}}" alt="Bank Transfer"></a>
                                      <br><br> --}}

                  <a href="">
                    <input id="payment_method_bank" 
                    name="payment_method" type="radio" value="2">
                                          <img src="{{ asset('images/razorpay.png')}}" alt="Bank Transfer" /></a>
                                      <br><br>
                
                </div>
<button class="btn btn-primary checkout_btn">Submit</button>
          </div>
        </div>
     
        <div class="col-md-6">

          {{-- <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Coupon Code</h2>
              <div class="p-3 p-lg-5 border">
                
                <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                <div class="input-group w-75">
                  <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                  </div>
                </div>

              </div>
            </div>
          </div> --}}
            </form> </div>
    <div class="col-2"></div>
</div></div>
</body>
</html>