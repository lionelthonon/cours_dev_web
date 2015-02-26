<article>
    <p>view_post.php</p>
    <?php if(!$data): ?>
        <h2>Pas de post à cet ID</h2>
    <?php else: ?>
        <h2><?php echo $data['content']; ?></h2>
    <?php endif; ?>
</article>
