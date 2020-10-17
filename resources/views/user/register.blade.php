<!DOCTYPE html>
<html>
<head>
	<title>Add a user</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	
	<!--@if($errors->any())
	 <div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)

		<li> {{ $error }} </li>

		@endforeach
	</ul>
</div>
	@endif
	-->
<form method="POST" action="/users">
	@csrf
	Name:<input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <br><br>
	Email:<input type="text" name="email" class="form-control" value="{{old('email')}}">
	    @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <br><br>

	Password:<input type="password" name="password" class="form-control">
	    @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <br><br>
	<input type="submit" value="Submit">
</form>
</div>
</body>
</html>