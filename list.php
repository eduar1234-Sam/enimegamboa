<html>
<?php 
$base = "https://api.jikan.moe/v3/search/anime?q=".$_POST['name'];
$id = 1;
$data = file_get_contents($base);
$anime = json_decode($data,true);
?>

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
        <div class='row'>
            <?php
                foreach($anime['results'] as $obj){?>
            <div style="margin-bottom:2%" class="col-4 card">
                <div class="container">
                    <h4 class='text-center'>
                        <?php echo $obj['title'] ?>
                    </h4>
                    <div class="container">
                        <img src="<?php echo $obj['image_url']?>" alt="picture" width="300" height="200">
                    </div>
                    <div class="container">
                        <p class='text-center'><?php echo $obj['synopsis']?></p>
                        <div class="row">
                            <div class="col">
                                <a href="<?php echo $obj['url']?>" class="btn btn-success">Watch</a>
                            </div>
                            <div class="col">
                                <button class="btn btn-info" onclick="test()">Info</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
?>
        </div>
        <div id="testing"></div>
    </div>
</body>

</html>