<?php
require 'vendor/autoload.php';

$client = new \Goutte\Client();

$crawler = $client->request('GET', 'https://www.imdb.com/chart/top');

ini_set('memory_limit', '2048M');

$top250Movies = [];
$top250Movies = $crawler->filter('.titleColumn')->each(function ($node) {


    $strpos = strpos($node->text(), "."); //find first dot
    $ranking = substr($node->text(), 0, $strpos); //determine ranking


    $titleWithYear = trim(trim(substr($node->text(), $strpos), "."));
    $title = trim(explode("(", $titleWithYear)[0]);

    $strpos = strpos($titleWithYear, "(");
    $year = substr($titleWithYear, $strpos + 1, 4);



    return [
        "ranking" => $ranking,
        "title"   => $title,
        "year"    => $year,
        "link"    => implode("-", explode(" ", $title))
    ];
});

// print_r($top250Movies);
// die;

require 'database.php';

foreach ($top250Movies as $movie) {
    $title = $movie["title"];
    $sql = "INSERT INTO films (title, isTrending, isOriginal, isTop, genre, image, video) VALUES ('" . mysqli_real_escape_string($conn, $title) . "', 0, 0, NULL, '', '', '')";

    var_dump(mysqli_query($conn, $sql));
}
