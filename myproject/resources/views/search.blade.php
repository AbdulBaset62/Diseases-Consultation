

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
				border-radius: 4px;
				text-align: center;
				font-weight: bold;
			}
		</style>
	</head>
	<body style="background-color: #FAA;">
	    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Website Logo.....</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sumon">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="sumon">
			<ul class="nav navbar-nav ">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-knight"></span>  Admin Panel</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span> Contract Us</a></li>		
			</ul>
			 <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
			</div>
			</div>
		</nav>
		
	
        
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4">
					<p>
		  <a  class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width: 100%;">
		    Water Born Diseases
		  </a>
		  <div class="collapse" id="collapseExample">
		  <div class="card card-block">
		   	<ul>
		   	<a href="#">	<li>Typhoid</li></a>
		   	</ul>
		   	<ul>
		   		<a herf="#">  <li>diarrhoea</li></a>
		   	</ul>
		   	<ul>
		   		<a herf="#">  <li>Cholera</li></a>
		   	</ul>
		   	<ul>
		   		<a herf="#">  <li>Giardiasis</li></a>
		   	</ul>
		   	<ul>
		   		<a herf="#">  <li>Salmonella</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Hepatitus</li></a>
		   	</ul>
		   	
		  </div>
		</div>
		  <br><br>
		  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse" style="width: 100%;">
		    Contagious Diseases
		  </button>
		  <div class="collapse" id="collapse">
		  <div class="card card-block">

		   	<ul>
		   	<a href="#">	<li>Flu</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Ebola</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>hepatitis A</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Hepatitis B</li></a>
		   	</ul>
		   	
		   	 <ul>
		   		<a herf="#">  <li>HIV/AIDS</li></a>
		   	</ul>
		   </div>
		   
		</div>
		<br></br>
		 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bs" aria-expanded="false" aria-controls="bs" style="width: 100%; margin-top: 20px;">
		    Genetic Diseases
		  </button>
		   <div class="collapse" id="bs">
		  <div class="card card-block">

		   	<ul>
		   	<a href="#">	<li>Marfan Syndrome</li></a>
		   	</ul>
             <ul>
		   	<a href="#">	<li>Cystic Fibrosis</li></a>
		   	</ul>
		   	<ul>
		   	<a href="#">	<li>Sickly Cell Anemia</li></a>
		   	</ul>
		   	<ul>
		   	<a href="#">	<li>Hemochromatosis</li></a>
		   	</ul>
		   	<ul>
		   	<a href="#">	<li>Huntington's Diseases</li></a>
		   	</ul>

		  </div>
		</div>

		<br></br>
		 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bss" aria-expanded="false" aria-controls="bss" style="width: 100%;">
		   Common Diseases
		  </button>
		  <div class="collapse" id="bss">
		  <div class="card card-block">
		  	
		   	<ul>
		   	<a href="#">	<li>Cancer</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Heart Disease</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>STDs</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Hepatitis B</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>HIV/AIDS</li></a>
		   	</ul>
		   	    <a href="#">  <li>Headache</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Skin</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>sleeping</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Migrain</li></a>
		   	</ul>
		   	 <ul>
		   		<a herf="#">  <li>Hearing & Ear</li></a>
		   	</ul>
		  </div>

		</div>
		</p>
		
			</div>

			<div class="col-md-8">
				<div class="col-md-12">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-8">
						<form action="{{ route('search') }}" method="GET">
							<input type="text" id="searchItem" name="searchItem" Enter Diseases required="">
							@if ($errors->has('searchItem'))
							    <span class="help-block">
							        <strong>{{ $errors->first('searchItem') }}</strong>
							    </span>
							@endif
							<br>
						
						<button class="btn btn-primary btn-lg" style="float: right; margin-top: 5px;">Search</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
		
		
		
		
		
		
		
		
		<script src="{{ asset('public/js/app.js') }}"></script>
		
		
	  </div>
	</body>
</html>
