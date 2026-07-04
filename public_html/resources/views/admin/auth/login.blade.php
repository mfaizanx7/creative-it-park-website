<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/login_style.css')}}">
    <title>Login</title>
</head>
<body>
    
<div class="container" id="container">
	<div class="form-container sign-up-container">
		{{-- <form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form> --}}
	</div>
    @if($errors->any())
                        <div class="alert alert-danger">
                               <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                    
                                @endforeach
                               </ul>
                        </div>
    @endif

    @if (Session::has('error_message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong>{{ Session::get('error_message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>        
    @endif
	
	<div class="form-container sign-in-container">
		
		<form action="{{ route('admin.login') }}" method="POST">
            @csrf
			
			
			<h1>Sign in</h1>
			
			
			<input type="email" name="email" placeholder="Email" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
			<input type="password" name="password" placeholder="Password" />
            
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @if (Route::has('admin.password.request'))
        <a class="btn btn-link" href="{{ route('admin.password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Admin!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('admin-assets/js/login.js')}}"></script>
</body>
</html>