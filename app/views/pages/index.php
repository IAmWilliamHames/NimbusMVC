<?php require APPROOT . '/views/includes/header.php'; ?>

<h1>NimbusMVC Framework</h1>

<ul>
  <?php foreach($data as $post): ?>
    <li><?= $post->title; ?></li>
  <?php endforeach ?>
</ul>

<?php require APPROOT . '/views/includes/footer.php'; ?>