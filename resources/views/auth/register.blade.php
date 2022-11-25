@extends('layouts.admin.master')

@section('content')
<form  class="login100-form validate-form"  method="POST" action="{{ route('register') }}">
@csrf
					<span class="login100-form-title p-b-43">
						register
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" id="name">
						<span class="focus-input100"></span>
						<span class="label-input100">name</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username"  id="username" >
						<span class="focus-input100"></span>
						<span class="label-input100">username</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Phone is required">
						<input class="input100" type="text" name="phone"  id="phone" >
						<span class="focus-input100"></span>
						<span class="label-input100">phone</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="assress is required">
						<input class="input100" type="text" name="address"  id="address" >
						<span class="focus-input100"></span>
						<span class="label-input100">Address</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="email is required">
						<input class="input100" type="email" name="email"  id="email" >
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password"  id="password" >
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate=" Confirm Password">
						<input class="input100" type="password" name="password_confirmation"  id="password-confirm"  >
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>

					
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							register
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2" >
							or sign in 
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

@endsection