
<br>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">
		<h3 class="font-italic font-weight-lighter">{{$article->titre}}</h3>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<h6 class="font-italic font-weight-lighter">by {{$article->nom}}</h6>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<h7 class="font-weight-lighter">created on {{$article->created_at}},
		modified on {{$article->updated_at}}</h7>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<p>"{{$article->text}}"</p>
	</div>
</div>

