
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<center>
			<h3>All articles</h3>
		</center>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Titles</th>
					<th scope="col">Authors</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
						<?php foreach($articles as $article){?>
							<tr>
					<td><?php echo $article->titre;?></td>
					<td><?php echo $article->nom;?></td>
					<td><a href="regarder-article-{{$article->id_article}}">Voir</a></td>
				</tr>
						<?php }?>
					</tbody>
		</table>
	</div>
</div>

