<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or des pruneaux</title>
	<meta name="Author" content="Lionel Thonon"/>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<header>
    <div class="branding">
        <p>La fabrique de pruneaux</p>
    </div>
</header>

<main>
    <h1>Vos messages</h1>
    <div class="messages">
        <?php foreach($messages as $message): ?>
            <div class="message">
                <header class="message__header">
                    <p>
                        <?php echo $message['signature']; ?> -
                        <?php echo $message['date']; ?>
                    </p>
                </header>
                <div class="message__body">
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    
</footer>
</body>
</html>
