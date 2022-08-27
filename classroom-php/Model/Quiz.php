<?php

class Quiz
{
    private $id;
    private $titre;
    private $deadline;
    private $date_deb;
    private $idCours;

    /**
     * @param $id
     * @param $deadline
     * @param $date_deb
     */
    public function __construct($id,  $deadline, $idCours, $titre)
    {
        $this->id = $id;
        $this->deadline = $deadline;
        $this->idCours = $idCours;
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * @param mixed $idCours
     */
    public function setIdCours($idCours): void
    {
        $this->idCours = $idCours;
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
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @param mixed $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }

    /**
     * @return mixed
     */
    public function getDateDeb()
    {
        return $this->date_deb;
    }

    /**
     * @param mixed $date_deb
     */
    public function setDateDeb($date_deb)
    {
        $this->date_deb = $date_deb;
    }





}