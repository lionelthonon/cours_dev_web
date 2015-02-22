<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Supprimer un post</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
		<h1>Voulez vous réellement supprimer ce post ?</h1>
		<div class="panel panel-primary">

			<div class="panel-heading">
				<p>Supprimer ce post ?</p>
			</div>

			<div class="panel-body">
				<p><em><?php echo $_GET['content']; ?></em></p>
			</div>

			<div class="panel-footer">
				<div class="non">
					<a href="../index.php">Non</a>
				</div>

				<div class="oui">
					<a class="text-danger" href="../index.php?delete=<?php echo $_GET['to_delete'] ?>">Oui</a>
				</div>
			</div>

		</div>
	</main>
</body>
</html>
