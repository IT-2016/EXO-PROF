<?php
require_once 'Hero.php';
require_once 'Archer.php';
require_once 'Guerrier.php';
require_once 'Cavalier.php';
require_once 'Magicien.php';

class HeroMapper
{
  private $dbConnection;

  public function __construct(Db $db)
  {
    $this->dbConnection = $db->getConnection();
  }

  public function findById($id)
  {
    // Récupère les informations d'un enregistrement
    $request = $this->dbConnection->prepare("SELECT * FROM hero WHERE id = ?");
    $request->execute(array($id));
    $row = $request->fetch();

    // Génère l'objet correspondant
    $hero = new $row['type'](
              $row['id'],
              $row['nom'],
              $row['points_vie'],
              $row['points_force'],
              $row['points_defense'],
              $row['points_specialite']
            );

   return $hero;
  }

  public function fetchAll()
  {
    // Récupère les informations de tous les enregistrements
    $request = $this->dbConnection->prepare("SELECT * FROM hero");
    $request->execute();
    $rows = $request->fetchAll();

    $heroes = array();
    foreach( $rows as $row) {
      $heroes[] = new $row['type'](
                $row['id'],
                $row['nom'],
                $row['points_vie'],
                $row['points_force'],
                $row['points_defense'],
                $row['points_specialite']
              );
    }
    return $heroes;
  }

  public function save(Hero $hero)
  {
    if (0 !== (int) $hero->getId()) {
      $request = $this->dbConnection->prepare("
        UPDATE hero SET nom = ?, type = ?,
        points_vie = ?, points_force = ?,
        points_defense = ?, points_specialite = ?
        WHERE id = ?;
      ");
      return $request->execute(
        array(
          $hero->getNom(),
          get_class($hero),
          $hero->getPointsVie(),
          $hero->getPointsForce(),
          $hero->getPointsDefense(),
          $hero->getPointsSpecialite(),
          $hero->getId()
        )
      );
    } else {
      $request = $this->dbConnection->prepare("
        INSERT INTO hero
        (nom,type,points_vie,points_force,points_defense,points_specialite)
        VALUES (?,?,?,?,?,?);
      ");
      return $request->execute(
        array(
          $hero->getNom(),
          get_class($hero),
          $hero->getPointsVie(),
          $hero->getPointsForce(),
          $hero->getPointsDefense(),
          $hero->getPointsSpecialite()
        )
      );
    }
    return $hero;
  }

  public function delete(Hero $hero)
  {
    $request = $this->dbConnection->prepare("DELETE FROM hero WHERE id = ?");
    return $request->execute(array($hero->getId()));
  }

}
