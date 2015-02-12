<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or des pruneaux</title>
	<meta name="Author" content="Lionel Thonon"/>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/style.css">
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
                        <small><?php echo $message['date']; ?></small>
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
            <div class="form-group <?php echo isset($errors['signature'])?'has-error':''; ?>">
                <label class="control-label" for="signature">Votre signature</label>
                <input class="form-control" type="text" name="signature" id="signature" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group <?php echo isset($errors['signature'])?'has-error':''; ?>">
                <label class="control-label" for="body">Votre message</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
            </div>

            <button class="btn btn-default" type="submit">Valider</button>
        </form>
    </section>
</main>

<footer>
    
</footer>
</body>
</html>
