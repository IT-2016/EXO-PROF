<?php
require_once 'app/init.php';

include_once 'app/inc/head.php';

$heroes = $mapper->fetchAll();

$html = '<h1>mes Heros</h1><ul class="listHero">';
foreach( $heroes as $hero) {
  $html .= '<li><strong class="nameHero">' . $hero->getNom(). '</strong>, <em class="classHero">' . get_class($hero);
  $html .= '</em><a href="./delete.php?id=' . $hero->getId() . '"><i class="fa fa-trash"></i></a></li>';
}
$html .= '</ul>';


	echo $html.'<a href="./new.php" class="newHero"><i class="fa fa-plus"></i> hero</a>';

include_once 'app/inc/footer.php';
?>

