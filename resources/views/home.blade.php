
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Welcome to Sense</h3>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<p class="font-weight-lighter">Last five trending articles:</p>
	</div>
</div>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Articles</th>
					<th scope="col">Authors</th>
					<th scope="col">Created on</th>
				</tr>
			</thead>
			<tbody>
						<?php foreach($articles as $article){?>
							<tr>
					<td><?php echo $article->titre;?></td>
					<td><?php echo $article->nom;?></td>
					<td><?php echo Date($article->created_at);?></td>
				</tr>
						<?php }?>
					</tbody>
		</table>
	</div>
</div>
