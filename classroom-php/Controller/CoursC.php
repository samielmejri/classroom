<?php

require_once '../../config.php';
require_once '../../Model/Cours.php';


Class CoursC {

    function getAllcours()
    {
        $requete = "select * from cours";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function affichercours($page_first_result,$results_per_page)
    {
        $requete = "select * from cours LIMIT ".$page_first_result.','.$results_per_page;
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function searchcours($sh)
    {
        $requete = "select * from cours where nom like '%".$sh."%' or idEnseignant like '%".$sh."%' or description like '%".$sh."%' ";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function getcoursbyID($id)
    {
        $requete = "select * from cours where id=:id";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'id'=>$id
                ]
            );
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function ajoutercours($cours)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO cours
                (nom,category,idEnseignant,description)
                VALUES
                (:nom,:category,:idEnseignant,:description)
                ');
            $querry->execute([
                'nom'=>$cours->getNom(),
                'category'=>$cours->getCategory(),
                'idEnseignant'=>$cours->getIdEnseignant(),
                'description'=>$cours->getDescription()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifiercours($cours)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE cours SET
              nom=:nom,category=:category,idEnseignant=:idEnseignant,description=:description

                where id=:id
                ');
            $querry->execute([
                'id'=>$cours->getId(),
                'nom'=>$cours->getNom(),
                'category'=>$cours->getCategory(),
                'idEnseignant'=>$cours->getIdEnseignant(),
                'description'=>$cours->getDescription()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }



    function supprimercours($id)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM cours WHERE id =:id
                ');
            $querry->execute([
                'id'=>$id
            ]);

        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function getcours($id){
        $requete="select * from cours where id=:id   ";
        $config= config::getConnexion();
        try{
            $query=$config->prepare($requete);
            $query->execute(
                [
                    'id'=>$id,

                ]);
            $result=$query->fetchAll();
            return $result;
        }catch (PDOException $e)
        {$e->getMessage();}
    }



}
