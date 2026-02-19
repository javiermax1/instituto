<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite (["resources/css/app.css", "resources/js/app.js"])

</head>
<body>
<header class="h-header bg-header">
 cabecera
</header>
<nav class="h-nav bg-nav">
    <a href="/about" class="btn btn-glass">About</a>
    <a href="/noticias" class="btn btn-glass text-header">Noticias</a>
    <a href="/alumnos" class="btn btn-glass">Alumnos</a>
</nav>
<main class="h-main bg-main">
    {{$slot}}
</main>
<footer class="h-footer, bg-footer">

</footer>

</body>
</html>
