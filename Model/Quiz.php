<?php

class Quiz
{
    private $id;
    private $nbQuestion;
    private $deadline;
    private $date_deb;
    private $nbReussite;
    private $idEnseignant;

    /**
     * @param $id
     * @param $nbQuestion
     * @param $deadline
     * @param $date_deb
     * @param $nbReussite
     */
    public function __construct($id, $nbQuestion, $deadline, $date_deb, $nbReussite, $idEnseignant)
    {
        $this->id = $id;
        $this->nbQuestion = $nbQuestion;
        $this->deadline = $deadline;
        $this->date_deb = $date_deb;
        $this->nbReussite = $nbReussite;
        $this->idEnseignant = $idEnseignant;
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
    public function getNbQuestion()
    {
        return $this->nbQuestion;
    }

    /**
     * @param mixed $nbQuestion
     */
    public function setNbQuestion($nbQuestion)
    {
        $this->nbQuestion = $nbQuestion;
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

    /**
     * @return mixed
     */
    public function getNbReussite()
    {
        return $this->nbReussite;
    }

    /**
     * @param mixed $nbReussite
     */
    public function setNbReussite($nbReussite)
    {
        $this->nbReussite = $nbReussite;
    }



}