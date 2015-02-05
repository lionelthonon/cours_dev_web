<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Is Palindrome</title>
	<meta name="Author" content=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>Suis-je un Palindrome ?</h1>

    <?php if(verifPal($chaine)): ?>
        <p><?php echo $chaine; ?> est un palindrome</p>
        <?php else: ?>
        <p><?php echo $chaine; ?> n'est pas un palindrome</p>
    <?php endif; ?>
    
    <!-- Variante en une seule ligne -->
    <?php echo $chaine.' '.(verifPal($chaine)?' est un palindrome':' n\'est pas un palindrome') ?>
</body>
</html>
