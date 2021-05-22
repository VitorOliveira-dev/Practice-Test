<?php
require_once 'responses.php';

$movies = new Responses();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $response = $movies->getMovie($_GET['id']);

    //echo json_encode($response);
} else {
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper center">
        <div class="big_poster"><img src="https://image.tmdb.org/t/p/original/<?= $response['poster_path'] ?>"></div>
        <div class="info">
            <div class="big_title">
                <h1><?= $response['title'] ?></h1>
            </div>
            <div class="tag"><h3><?= $response['tagline'] ?></h3></div>
            <div class="card_overview"><?= $response['overview'] ?></div>
            <div class="mini_card">
                <div class="budget">Orçamento: <?= $response['budget'] ?></div>
                <div class="status"><?= $response['status'] ?></div>
                <div class="release_date">Lançamento: <?= $response['release_date'] ?></div>
                <div class="runtime">Duração: <?= $response['runtime'] ?> minutos</div>
            </div>
            <div class="mini_card">
                <div class="popularity">Popularidade: <?= $response['popularity'] ?></div>
                <div class="vote_average">Média de votos: <?= $response['vote_average'] ?></div>
                <div class="vote_count">Quantidade de votos: <?= $response['vote_count'] ?></div>
            </div>
            <div class="mini_card">Generos:
                <?php foreach ($response['genres'] as $genre) { ?>
                    <div class="genres"><?= $genre['name'] ?></div>
                <?php } ?>
            </div>
            <div class="mini_card">Produtoras:
                <?php foreach ($response['production_companies'] as $company) { ?>
                    <div class="production_companies"><?= $company['name'] ?></div>
                <?php } ?>
            </div>
            <div class="mini_card">Filmado em:
                <?php foreach ($response['production_countries'] as $country) { ?>
                    <div class="production_countries"><?= $country['name'] ?></div>
                <?php } ?>
            </div>
            <div class="mini_card">Idiomas Originais:
                <?php foreach ($response['spoken_languages'] as $language) { ?>
                    <div class="spoken_languages"><?= $language['name'] ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="btn"><a href="index.php"><input type="button" value="Voltar"></a></div>

</body>

</html>