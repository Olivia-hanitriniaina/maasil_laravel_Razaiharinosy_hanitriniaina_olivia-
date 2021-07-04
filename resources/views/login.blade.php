
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Login</h3>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="{{url('authentication')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="username">Username</label> <input type="text"
					class="form-control" name="username" id="username"
					placeholder="your username">
			</div>
			<div class="form-group">
				<label for="password">Password</label> <input type="password"
					class="form-control" name="password" id="password"
					placeholder="your password">
			</div>
			<button type="submit" class="btn btn-primary btn-sm btn-block">Login</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
