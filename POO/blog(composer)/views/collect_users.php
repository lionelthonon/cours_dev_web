<a href="index.php">Retour</a>
<h2>Connectez-vous</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">

    <div class="form-group">
        <label for="email" class="col-sm-2 label-control">Entrez votre email</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <label for="password" class="col-sm-2 label-control">Votre mot de passe</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <input type="hidden" name="a" value="check" class="col-sm-2 label-control">
        <div class="col-sm-10">
            <input type="hidden" name="e" value="users" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Connectez-vous">
    </div>

</form>
