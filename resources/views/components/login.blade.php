<div class="container mt-5">
	<div class="card card-login">
	  <div class="card-header">
	  	<h4>Login Page</h4>
	  </div>
	  <div class="card-body d-flex flex-column">
	    <form method="post" action="{{ route('auth.login') }}">
	    	@csrf
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" name="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
				{!! $errors->has('email') ? '<div class="invalid-feedback">' . $errors->first('email') . '</div>' : '' !!}
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Password">
				{!! $errors->has('password') ? '<div class="invalid-feedback">' . $errors->first('password') . '</div>' : '' !!}
			</div>
			<div class="form-group form-check">
				<input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember Me</label>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
	    </form>
	  </div>
	</div>
</div>