<?php
ini_set('display_errors', 1);
// Chargement du fichier de config
$config = require_once __DIR__ . '/../config/main.php';

require_once 'app/Hero.php';
require_once 'app/Archer.php';
require_once 'app/Magicien.php';
require_once 'app/Cavalier.php';
require_once 'app/Guerrier.php';

// Création de la connexion à la BDD
require_once 'app/Db.php';
try {
  $db = new Db($config['db']);
} catch(Exception $e) {
  echo $e->getMessage();
  exit;
}

require_once 'app/HeroMapper.php';
$mapper = new HeroMapper($db);
