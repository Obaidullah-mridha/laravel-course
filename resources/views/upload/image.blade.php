<!DOCTYPE html>
<html>
<head>
	<title>Upload image</title>
</head>
<body>
<form method="post" action="/file-upload" enctype="multipart/form-data">
	@csrf
	<div style="margin: 20px">
		<input type="file" name="image">
	</div>
	<input type="submit" value="submit">
</form>
</body>
</html>