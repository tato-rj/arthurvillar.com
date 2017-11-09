<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/app.css') }}?version=12" rel="stylesheet" type="text/css">
	<style type="text/css">
		body, html {
			border: none;
			height: 100%;
		}
	</style>
</head>
<body class="d-flex align-items-center justify-content-center">
<form method="POST" action="/file" enctype="multipart/form-data" class="p-2">
{{csrf_field()}}
  <div class="form-group">
    <input type="file" name="file" class="form-control-file">
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@if (File::exists('storage/app/upload/file.jpeg'))
<img src="{{ asset('storage/app/upload/file.jpeg') }}">
@else
IMAGE DOES NOT EXIST
@endif
</body>
</html>