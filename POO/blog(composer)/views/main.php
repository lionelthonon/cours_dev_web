<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mini blog en PHP</title>
	<link rel="stylesheet" href="views/css/style.css">
</head>
<body>
	<header>
	<?php var_dump($_SESSION); ?>
		<h1>Mini blog en PHP</h1>
		<div>
		    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?a=collect&e=users">Connectez-vous</a>
		</div>
	</header>
	<div class="container-fluid">
		<main>

			<!-- Include vue pour tous les articles -->
			<?php include($data['view']); ?>


			</div>
		</main>
	</div><!-- container -->
</body>
</html>
