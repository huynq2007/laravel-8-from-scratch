<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
<?php /** @var TYPE_NAME $posts */
foreach($posts as $post) :?>
<article>
    <?= $post; ?>
</article>
<?php endforeach; ?>
</body>
</html>
