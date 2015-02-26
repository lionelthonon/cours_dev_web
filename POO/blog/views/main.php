<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mini blog en PHP</title>
	<link rel="stylesheet" href="views/css/style.css">
</head>
<body>
	<header>
		<h1>Mini blog en PHP</h1>
	</header>
	<div class="container-fluid">
		<main>

			<!-- Include vue pour tous les articles -->
			<?php include($data['view']); ?>

			<!-- formulaire pour ajouter un post -->
			<div class="form content-block">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-horizontal">
					<fieldset>
						<legend>Ajouter un nouveau post</legend>

						<div class="form-group">
							<label class="control-label col-sm-2" for="author_sign">Votre nom</label>
							<div class="col-sm-10">
								<input class="form-control" id="author_sign"type="text" name="author_sign">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="content">Ecrivez votre article</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
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
			</div>
		</main>
	</div><!-- container -->
</body>
</html>
