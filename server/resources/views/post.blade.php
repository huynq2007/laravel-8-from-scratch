<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
<h1><?= $post->title; ?></h1>
<article>
    <?= $post->body; ?>
</article>
<a href="/">Go Back</a>

</body>
</html>
