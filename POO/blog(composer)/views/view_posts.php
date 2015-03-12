<!-- Affichage des posts -->
<div class="posts">
    <div class="panel panel-primary">
       <?php if(!isset($data['data']['id'])): ?>
       		<?php header('Location: index.php'); ?>
       	<?php endif; ?>
        <div class="panel-heading">
           <span class="panel-title" style="font-size: 13pt;"><?php echo($data['data']['title']); ?></span><br />
            Posté par <span class="panel-title" style="font-style: italic;"><?php echo $data['data']['author_sign']; ?></span>
        </div>
        <div class="panel-body">
            <p><?php echo($data['data']['content']); ?></p>
        </div>
        <div class="panel-footer">
            <a class="text-danger" href="index.php?a=delete&e=posts&id=<?php echo $data['data']['id']; ?>">Supprimer ce post</a>&nbsp;&nbsp;
            <a class="text-danger" href="index.php?a=update&e=posts&id=<?php echo $data['data']['id']; ?>">Editer ce post</a>
        </div>
    </div>
    <a href="index.php">Retour</a>
</div><!-- posts -->
