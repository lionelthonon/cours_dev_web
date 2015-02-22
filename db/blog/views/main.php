<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mini blog en PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
	<header>
		<h1>Mini blog en PHP</h1>
	</header>
	<div class="container-fluid">
		<main>
			<div class="posts">
				<?php foreach($posts as $post): ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<?php echo 'Posté par <em>'.$post['author_sign']."</em> le ".$post['date']; ?>
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
