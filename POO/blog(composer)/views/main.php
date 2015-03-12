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
		<?php if($_SESSION['connected'] == 0): ?>
            <div>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?a=collect&e=users">Connectez-vous</a>
            </div>
        <?php elseif($_SESSION['connected'] == 1): ?>
            <div>
                <p><?php echo $_SESSION['user']; ?></p>
                <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?a=disconnect&e=users">Déconnectez-vous</a></p>
            </div1>
        <?php endif; ?>
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
