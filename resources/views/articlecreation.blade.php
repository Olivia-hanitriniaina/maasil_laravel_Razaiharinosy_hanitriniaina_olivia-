
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Create new article</h3>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="{{url('article-create')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="title">Title</label> <input type="text"
					class="form-control" name="title" id="title" placeholder="title">
			</div>
			<div class="form-group">
				<label for="author">Author</label> <select class="form-control"
					id="author" name="author">
                          <?php foreach($authors as $author){?>
								<option value="<?php echo $author->id_acteur;?>"><?php echo $author->nom;?></option>
							<?php }?>
                        </select>
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea class="form-control" id="content" rows="3" name="content"
					placeholder="content"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-sm btn-block">Save</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"><?php echo $status;?></div>
	<div class="col-md-4"></div>
</div>
