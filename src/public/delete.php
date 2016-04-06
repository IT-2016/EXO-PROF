<?php
require_once 'app/init.php';

$hero = $mapper->findById($_GET['id']);
if ($hero instanceof Hero) {
  $mapper->delete($hero);
}

header('Location: index.php');
