
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Add new author</h3>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="{{url('author/new')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="name">Name</label> <input type="text"
					class="form-control" name="name" id="name"
					placeholder="name of the author">
			</div>
			<button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"><?php echo $status;?></div>
	<div class="col-md-4"></div>
</div>
