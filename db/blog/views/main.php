<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini blog en PHP</title>
</head>
<body>
	<header>
		<h1>Mini blog en PHP</h1>
	</header>
	<main>
		<div class="posts">
			<?php foreach($posts as $post): ?>
				<p>
				<?php echo $post['author_sign']; ?><br />
				<?php echo $post['content']; ?><br />
				<?php echo $post['date']; ?><br />
				<p>
			<?php endforeach; ?>
		</div><!-- posts -->
	</main>
</body>
</html>
