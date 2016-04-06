<?php
require_once 'app/init.php';

$heroes = $mapper->fetchAll();

echo '<h1>Heros</h1>';
echo '<ul>';
foreach( $heroes as $hero) {
  echo '<li>' . $hero->getNom(). ', ' . get_class($hero);
  echo ' - <a href="./delete.php?id=' . $hero->getId() . '">Supprimer</a></li>';
}
echo '</ul>';

?>

<a href="./new.php">Ajouter un hero</a>
