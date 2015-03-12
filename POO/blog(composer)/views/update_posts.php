<h2>Update</h2>


<!-- formulaire pour ajouter un post -->
<div class="form content-block">
	<form action="index.php?a=validUpdate&e=posts&id=<?php echo $data['data']['id']; ?>" method="POST" class="form-horizontal">
		<fieldset>
			<legend>Modifier un post</legend>
			<?php //var_dump($data['data']); ?>
			<div class="form-group">
				<label class="control-label col-sm-2" for="author_sign">Votre nom</label>
				<div class="col-sm-10">
					<input class="form-control" id="author_sign"type="text" name="author_sign" placeholder="<?php echo $data['data']['author_sign']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="title">Titre de votre article</label>
				<div class="col-sm-10">
					<input class="form-control" id="title" type="text" name="title" placeholder="<?php echo $data['data']['title']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="content">Ecrivez votre article</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php echo $data['data']['content']; ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="category">Choisissez La catégorie de votre article</label>
				<div class="col-sm-10">
					<select class="form-control" name="category" id="category">
						<option value="NULL" selected="selected">Pas de catégorie</option>
						<option value="1">Musique</option>
						<option value="2">Cinéma</option>
						<option value="3">Internet</option>
						<option value="4">Autres</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Poster</button>
				</div>
			</div>

		</fieldset>
	</form>
