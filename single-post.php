<?php foreach($posts as $post): ?>
<h1>Сообщение №<?php echo $post['id']; ?></h1>
<hr>
<?php echo $post['content']; ?>
<a href="<?php echo "http://test/index.php"; ?>"> Назад </a>
<?php endforeach; ?>