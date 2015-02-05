<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Is Palindrome</title>
	<meta name="Author" content=""/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

    <h1>Suis-je un Palindrome ?</h1>
    
    <form action="" method="GET">
        <label for="chaine">Entrez votre chaine</label>
        <input type="text" name="chaine" id="chaine">
        <button class="btn btn-primary" type="submit">Tester</button>
    </form>

    <?php if(verifPal($chaine)): ?>
        <p><?php echo $chaine; ?> est un palindrome</p>
        <?php else: ?>
        <p><?php echo $chaine; ?> n'est pas un palindrome</p>
    <?php endif; ?>
    
    <!-- Variante en une seule ligne -->
    <?php echo $chaine.' '.(verifPal($chaine)?' est un palindrome':' n\'est pas un palindrome') ?>
</body>
</html>
