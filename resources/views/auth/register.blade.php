<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="/register" method="post">
		@csrf
      Name:<input type="text" name="name"><br><br>
       Email:<input type="email" name="email"><br><br>
      Password:<input type="password" name="password"><br><br>
      <input type="submit" value="signup">
 </form>
</body>
</html>