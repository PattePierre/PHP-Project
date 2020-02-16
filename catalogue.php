<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Catalogue</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php
include 'Model/GameModel.php';
include 'Controller/GameController.php';
include 'View/GameView.php';
include 'View/GameListView.php';

$controller = new GameController();

$gameList = $controller->getGameList("./gameList.json");

$gameModelList = array();
foreach ($gameList as $game) {
  $model = new GameModel($game->id, $game->name, $game->imageUrl, $game->platform, $game->price);
  array_push($gameModelList, $model);
}

$listView = new GameListView($gameModelList);

$listView->displayGameList();



?>

</div>

</body>
</html>
