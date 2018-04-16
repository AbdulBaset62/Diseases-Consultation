
<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap website template</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-state=1"/>
		<link type="text/css" rel="stylesheet" href="{{asset('public/inc/css/bootstrap.css')}}"/>
		<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
		<script src="{{asset('public/inc/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('public/inc/js/bootstrap.js')}}"></script>
		<style type="text/css">
			#searchItem{
				height: 40px; 
				width: 100%;
				border-radius: 24px;
				text-align: center;
				font-weight: bold;
			}
		</style>



	</head>
	<body>
			<div class="row">
		<div class="col-sm-12" style="text-align:justify;">
					<p>
		  <a  class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width: 100%;">
		   
		 </p>

<div>
<h1>...Essential food or hreb...</h1>
 </a>
<h2>
	@if(count($info)>0 )

		@foreach($info as $info)

			<h1 style="text-align: center;">{{$info->diseaseName}}</h1> <br>
			<p>{{$info->procedure}}</p>

		@endforeach

	@else

		<h1>No search result.</h1>

	@endif


	
</h2>
</h1>
</div>
</body>
</html>