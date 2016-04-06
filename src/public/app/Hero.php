<?php

abstract class Hero
{
    protected $id;
    protected $nom;
    protected $pointsVie;
    protected $pointsForce;
    protected $pointsDefense;

    public function __construct($id, $nom, $pointsVie, $pointsForce, $pointsDefense)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->pointsVie = $pointsVie;
        $this->pointsForce = $pointsForce;
        $this->pointsDefense = $pointsDefense;
    }

    /**
     * Get the value of Id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id.
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = (int) $id;

        return $this;
    }

    /**
     * Get the value of Nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom.
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = (string) $nom;

        return $this;
    }

    /**
     * Get the value of Points Vie.
     *
     * @return mixed
     */
    public function getPointsVie()
    {
        return $this->pointsVie;
    }

    /**
     * Set the value of Points Vie.
     *
     * @param mixed pointsVie
     *
     * @return self
     */
    public function setPointsVie($pointsVie)
    {
        $this->pointsVie = (int) $pointsVie;

        return $this;
    }

    /**
     * Get the value of Points Force.
     *
     * @return mixed
     */
    public function getPointsForce()
    {
        return $this->pointsForce;
    }

    /**
     * Set the value of Points Force.
     *
     * @param mixed pointsForce
     *
     * @return self
     */
    public function setPointsForce($pointsForce)
    {
        $this->pointsForce = (int) $pointsForce;

        return $this;
    }

    /**
     * Get the value of Points Defense.
     *
     * @return mixed
     */
    public function getPointsDefense()
    {
        return $this->pointsDefense;
    }

    /**
     * Set the value of Points Defense.
     *
     * @param mixed pointsDefense
     *
     * @return self
     */
    public function setPointsDefense($pointsDefense)
    {
        $this->pointsDefense = (int) $pointsDefense;

        return $this;
    }
}
