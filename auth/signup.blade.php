@extends('includes.auth_app')

@section('content')
    
<section class="ftco-section">
	<div class="container">
		{{-- <div class="row justify-content-center"> --}}
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Register</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
			  		<div class="img" style="background-image: url('{{asset('assets/images/omet.jpg')}}');"></div>
			  <h3 class="text-center mb-4">Create Your Account</h3>
			  	<form action="{{route('register')}}" class="signup-form" method="POST" autocomplete="off">
					@csrf
					<input type="hidden"  name="user_type" value="user">
					<div class="form-group mb-3">
						<label class="label" for="name">Full Name</label>
						<input type="text" class="form-control" name="name" placeholder="John Doe" required>
					</div>
					<div class="form-group mb-3">
						<label class="label" for="email">Email Address</label>
						<input type="text" class="form-control" name="email" placeholder="johndoe@gmail.com" required>
					</div>
					<div class="form-group mb-3">
						<label class="label" for="password">Password</label>
					<input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
						<button type="submit" class="form-control btn btn-danger submit px-3" margin="50px">Continue with Google</button><br>
						<button type="submit" class="form-control btn btn-success submit px-3">Continue with Facebook</button><br>
					</div>
				</form>
		  <p>I'm already a member! <a type="button" href="{{route('signin')}}">Sign In</a></p>
		</div>
			</div>
		</div>
	</div>
</section>


@endsection