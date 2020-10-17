<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="/login" method="post">
		@csrf
 Email:<input type="email" name="email"><br><br>
 Password:<input type="password" name="password"><br><br>
 <input type="submit" value="submit">
 </form>
</body>
</html>