<!-- File: /app/View/Posts/view.ctp -->
<?php
$post = $post['Post'];
?>
<h1><?= $post['title'] ?></h1>
<p><small>Created: <?php echo $post['created']; ?></small></p>

<p><?php echo h($post['body']); ?></p>
