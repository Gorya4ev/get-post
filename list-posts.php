<h1>Список сообщений</h1>
<?php foreach($posts as $post): ?>
<h3>Сообщение №<?php echo $post['id']; ?></h3>
<?php echo $post['content'];?>
<a href="<?php echo "http://test/index.php?id=".$post['id']; ?>">Подробнее</a>
<hr>
<?php endforeach; ?>