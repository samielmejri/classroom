<?php

class Cours
{
    private $id;
    private $date_aj;
    private $nom;
    private $category;
    private $idEnseignant;
    private $description;

    /**
     * @param $id
     * @param $date_aj
     * @param $nom
     * @param $idEnseignant
     * @param $description
     */
    public function __construct( $nom, $idEnseignant, $description, $category)
    {
        $this->id = $id;
        $this->date_aj = $date_aj;
        $this->nom = $nom;
        $this->idEnseignant = $idEnseignant;
        $this->description = $description;
        $this->category = $category;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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