<form action="" method="post">
  <div>
    <select name="type">
    <option>Archer</option>
    <option>Guerrier</option>
    <option>Cavalier</option>
    <option>Magicien</option>
    </select>
  </div>
  <div><label for="nom">Nom : </label><input type="text" name="nom"></div>
  <div><label for="vie">Vie : </label><input type="text" name="vie"></div>
  <div><label for="force">Force : </label><input type="text" name="force"></div>
  <div><label for="specialite">Spécialité : </label><input type="text" name="specialite"></div>
  <div><label for="defense">Défense : </label><input type="text" name="defense"></div>
  <div><input type="submit"></div>
</form>
<?php
require_once 'app/init.php';

if ('POST' === $_SERVER['REQUEST_METHOD']) {
  // création et sauvegarde d'un nouveau héro
  $hero = new $_POST['type'](
    null,
    $_POST['nom'],
    $_POST['vie'],
    $_POST['force'],
    $_POST['specialite'],
    $_POST['defense']
  );
  $mapper->save($hero);

  header('Location: index.php');
}
