<?php
require_once 'responses.php';

    $movies = new Responses();

    if ($_GET['filterBy'] == 'genre') {
        echo json_encode($movies->getMoviesByGenre($_GET['genreId']));
    } elseif ($_GET['filterBy'] == 'name') {
        echo json_encode($movies->getMoviesByName($_GET['query']));
    }
