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
        <p>Livre d'or des pruneaux</p>
    </div>
</header>

<main>
    <h1>Vos messages</h1>
    <!-- Affiche les messages -->
    <div class="messages">
        <?php foreach($messages as $message): ?>
            <div class="message">
                <header class="message__header">
                    <p>
                        <?php echo $message['signature']; ?> -
                        <?php echo $message['date']; ?>
                        <p><?php echo $message['body']; ?></p><br />
                    </p>
                </header>
                <div class="message__body">

                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- formulaire -->
    <section>
        <h2>Dites ce que vous en pensez !</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <label for="signature">Votre signature</label>
                <input type="text" name="signature" id="signature" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="body">Votre message</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>

            <button type="submit">Valider</button>
        </form>
    </section>
</main>

<footer>
    
</footer>
</body>
</html>
