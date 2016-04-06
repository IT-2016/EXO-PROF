<?php

class Guerrier extends Hero
{
    private $pointsSpecialite;

    public function __construct($id, $nom, $pointsVie, $pointsForce, $pointsDefense, $pointsSpecialite)
    {
        $this->pointsSpecialite = $pointsSpecialite;
        parent::__construct($id, $nom, $pointsVie, $pointsForce, $pointsDefense);
    }

    /**
     * Get the value of Points Specialite.
     *
     * @return mixed
     */
    public function getPointsSpecialite()
    {
        return $this->pointsSpecialite;
    }

    /**
     * Set the value of Points Specialite.
     *
     * @param mixed pointsSpecialite
     *
     * @return self
     */
    public function setPointsSpecialite($pointsSpecialite)
    {
        $this->pointsSpecialite = $pointsSpecialite;

        return $this;
    }
}
