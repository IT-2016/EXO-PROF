CREATE TABLE IF NOT EXISTS `hero` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `points_vie` int(11) NOT NULL,
  `points_force` int(11) NOT NULL,
  `points_specialite` int(11) NOT NULL,
  `points_defense` int(11) NOT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `hero` (`id`, `nom`, `type`, `points_vie`, `points_force`, `points_specialite`, `points_defense`, `avatar`) VALUES
(1, 'Foyz', 'Archer', 100, 25, 0, 20, NULL),
(2, 'Archonde', 'Guerrier', 100, 50, 0, 30, NULL),
(3, 'Zerglin', 'Magicien', 100, 45, 20, 30, NULL),
(4, 'Mayze', 'Cavalier', 100, 40, 0, 55, NULL);
