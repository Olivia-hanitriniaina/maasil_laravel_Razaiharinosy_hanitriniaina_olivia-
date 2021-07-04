<?php
use Carbon\Traits\Date;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title;?></title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600"
	rel="stylesheet">

<!-- css -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- js -->
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-light navbar-expand"
			style="background-color: #e3f2fd;">
			<a class="navbar-brand" href="{{url('/')}}">Sense</a>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('/article')}}">Articles</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('new-article/0')}}">Manage articles</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('new-author/0')}}">Manage authors</a></li>
				</ul>
			</div>
		</nav>
		<br>

