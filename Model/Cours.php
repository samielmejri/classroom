<?php

class Cours
{
    private $id;
    private $date_aj;
    private $ressource;
    private $idEnseignant;
    private $description;

    /**
     * @param $id
     * @param $date_aj
     * @param $ressource
     * @param $idEnseignant
     * @param $description
     */
    public function __construct($id, $date_aj, $ressource, $idEnseignant, $description)
    {
        $this->id = $id;
        $this->date_aj = $date_aj;
        $this->ressource = $ressource;
        $this->idEnseignant = $idEnseignant;
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateAj()
    {
        return $this->date_aj;
    }

    /**
     * @param mixed $date_aj
     */
    public function setDateAj($date_aj)
    {
        $this->date_aj = $date_aj;
    }

    /**
     * @return mixed
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * @param mixed $ressource
     */
    public function setRessource($ressource)
    {
        $this->ressource = $ressource;
    }

    /**
     * @return mixed
     */
    public function getIdEnseignant()
    {
        return $this->idEnseignant;
    }

    /**
     * @param mixed $idEnseignant
     */
    public function setIdEnseignant($idEnseignant)
    {
        $this->idEnseignant = $idEnseignant;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }




}