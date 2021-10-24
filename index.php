<!DOCTYPE html>
<html lang="es">

<head>
    <title>Anime PHP</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="https://m.media-amazon.com/images/I/41rx-grWnbL.jpg">
</head>

<body>
    <header>
        <h1 class="text-center">Anime PHP</h1>
    </header>
    <div class="container">
        <form action="list.php" method="post">
            <h5>Serch anime: </h5>
            <input type="text" class="text-input" name="name">
            <input type="submit" class="btn btn-success" value="Search">
        </form>
    </div>
</body>

</html>