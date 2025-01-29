<?php include "menu.php"; ?>
<h2>Посты</h2>
<h2 style="color:red;"><?= $message ?></h2>
<?php foreach ($posts as $post): ?>
    <a href="/post/<?= $post['slug'] ?>"> <?= $post['title'] ?> </a>
    <p><?= $post['text'] ?></p>
<?php endforeach; ?>