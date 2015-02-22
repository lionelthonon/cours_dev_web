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
			<div class="posts">
				<?php foreach($posts as $post): ?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<!-- Format de la date : MANUAL strftime() -->
							<?php $date = utf8_encode(strftime('%d %B %Y', strtotime($post['date']))); ?>
							<?php echo 'Posté par <em>'.$post['author_sign']."</em> le ".$date; ?>
						</div>
						<div class="panel-body">
							<?php echo $post['content']; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div><!-- posts -->
		</main>
	</div><!-- container -->
</body>
</html>
