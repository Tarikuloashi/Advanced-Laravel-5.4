<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Advanced Laravel</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<br>

			<div class="col-lg-offset-4 col-lg-4">
				@if(count($errors) > 0)
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{$error}}</p>
					@endforeach
				@endif
				
				<form action="" method="post">
					{{csrf_field()}}
					<div class="form-group">
						
						<input class="form-control" type="text" name="name" placeholder="Name">

					</div>

					<div class="form-group">
						
						<input class="form-control" type="email" name="email" placeholder="Email">

					</div>

					<div class="form-group">
						
						<input class="btn btn-primary" type="submit" >

					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>