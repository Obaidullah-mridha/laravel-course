<!DOCTYPE html>
<html>
<head>
	<title>Create a user</title>
</head>
<body>
<form method="post" action="/test-any">
	@csrf
	@method('DELETE')
	<input type="text" name="name">
	<input type="submit" value="submit">
</form>
</body>
</html>