<article>
    <p>view_post.php</p>
    <?php if(!$data): ?>
        <h2>Pas de post à cet ID</h2>
    <?php else: ?>
       <?php var_dump($data['data']); ?>
    <?php endif; ?>
</article>
