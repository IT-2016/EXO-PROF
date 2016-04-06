<?php
require_once 'app/init.php';
include_once 'app/inc/head.php';

?>

<form action="" method="post" class="formNew">
  <div class="inputHero">
  	<label for="type">Type</label>
    <select name="type" id="type" class="selectHero">
	    <option>Archer</option>
	    <option>Guerrier</option>
	    <option>Cavalier</option>
	    <option>Magicien</option>
    </select>
  </div>
  <div class="inputHero"><label for="nom">Nom</label><input type="text" name="nom"></div>
  <div class="inputHero"><label for="vie">Vie</label><input type="text" name="vie"></div>
  <div class="inputHero"><label for="force">Force</label><input type="text" name="force"></div>
  <div class="inputHero"><label for="specialite">Spécialité</label><input type="text" name="specialite"></div>
  <div class="inputHero"><label for="defense">Défense</label><input type="text" name="defense"></div>
  <button type="submit"><i class="fa fa-save"></i> Enregistrer</button>
</form>

<?php
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
