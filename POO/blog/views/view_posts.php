<!-- Affichage des posts -->
<div class="posts">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <!-- Format de la date : MANUAL strftime() -->
            <?php $date = utf8_encode(strftime('%d %B %Y', strtotime($post['date']))); ?>
            <?php $hour = utf8_encode(strftime('%H:%M', strtotime($post['date']))); ?>
            <?php echo 'Posté par <em>'.$post['author_sign']."</em> le ".$date.' à '.$hour; ?>
        </div>
        <div class="panel-body">
            <p><?php echo $post['content']; ?></p>
            <small><em><?php echo $post['name']; ?></em></small>
        </div>
        <div class="panel-footer">
            <a class="text-danger" href="views/wantToDelete.php?to_delete=<?php echo $post['id']; ?>&content=<?php echo $post['content']; ?>">Supprimer ce post</a>
        </div>
    </div>
</div><!-- posts -->
