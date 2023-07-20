@extends('layouts.master')
@section('content')

<h2>Login</h2>
<form method="POST" action="/register">
	<div class="form-group">
		<label for="name">Account:</label>
		<input type="text" class="form-control" id="name" name="name">
	</div>

	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" id="password" name="password">
	</div>

	<div class="form-group">
		<button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>

@endsection
