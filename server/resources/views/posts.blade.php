<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
<?php /** @var TYPE_NAME $posts */
foreach($posts as $post) :?>
<h1>
    <a href="/posts/<?= $post->slug; ?>">
        <?= $post->title; ?>
    </a>
</h1>
<article>
    <?= $post->excerpt; ?>
</article>
<?php endforeach; ?>
</body>
</html>
