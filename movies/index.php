<?php
require_once 'responses.php';

$movies = new Responses();

$result = $movies->getTrendingMovies();

function build_sorter($key)
{
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

usort($result['results'], build_sorter('title'));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>Movies</title>
</head>

<body>
    <div class="wrapper">
        <?php include_once 'menu.php'; ?>
        <div class="row">
            <?php
            foreach ($result['results'] as $index => $item) { ?>
                <div class="card">
                    <div class="title"><?= $item['title'] ?></div>
                    <div class="poster"><img src="https://image.tmdb.org/t/p/original/<?= $item['poster_path'] ?>"></div>
                    <div class="overview"><?= $item['overview'] ?></div>
                    <div class="release">
                        <h5>Lançamento:</h5> <?= date("d/m/Y", strtotime($item['release_date'])) ?>
                    </div>
                    <div class="detailsBtn"><a href="movie.php?id=<?= $item['id'] ?>"><input type="button" value="Detalhes"></a></div>
                </div>
            <?php } ?>
        </div>

    </div>
</body>

</html>