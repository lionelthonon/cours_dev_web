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

			
			</div>
		</main>
	</div><!-- container -->
</body>
</html>
