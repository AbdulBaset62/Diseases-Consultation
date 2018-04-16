<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="{{asset('public/inc/css/bootstrap.css')}}"/>
	<style type="text/css">
		input{
			height: 40px;
			border-radius: 5px;
			width:700px;
		}
		textarea{
			width: 700px;
		}
	</style>
</head>
<body>
<div class="container"> 
		<div class="row" style="margin-left: 200px; margin-top: 150px;">
			
<h1 style="text-align: center;">Add Diseases</h1>
					<form class="form-horizontal" method="POST" action="{{ route('categoryAdd') }}">
						{{ csrf_field() }}

						@if (session('success'))
						    <div class="alert alert-success">
						        {{ session('success') }}
						    </div>
						@endif
						
					<div class="form-group">
						<div class="col-md-7">
							Disease Name <br>
							<input type="text" name="title" placeholder="Disease Name" required>
						</div>
					</div>


					<div class="form-group">
						<div class="col-md-7">
							Description <br>
							<textarea name="content" required></textarea>
						</div>
					</div>

					<button name="singlebutton" class="btn btn-success" style="margin-left: 595px;">Add Diseases</button>
			</form>














		</div>
</div>
	
</body>
</html>