<?php

require_once '../../config.php';
require_once '../../Model/Quiz.php';


Class QuizC {

    function getAllquiz()
    {
        $requete = "select * from quiz";
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

    function afficherquiz($page_first_result,$results_per_page)
    {
        $requete = "select * from quiz LIMIT ".$page_first_result.','.$results_per_page;
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

    function searchquiz($sh)
    {
        $requete = "select * from quiz where titre like '%".$sh."%' or idCours like '%".$sh."%' or deadline like '%".$sh."%' ";
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


    function getquizbyID($id)
    {
        $requete = "select * from quiz where id=:id";
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

    function ajouterquiz($quiz)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO quiz
                (titre,idCours,deadline)
                VALUES
                (:titre,:idCours,:deadline)
                ');
            $querry->execute([
                'titre'=>$quiz->getTitre(),
                'idCours'=>$quiz->getIdCours(),
                'deadline'=>$quiz->getDeadline()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifierquiz($quiz)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE quiz SET
              titre=:titre,idCours=:idCours,deadline=:deadline

                where id=:id
                ');
            $querry->execute([
                'id'=>$quiz->getId(),
                'titre'=>$quiz->getTitre(),
                'idCours'=>$quiz->getIdCours(),
                'deadline'=>$quiz->getDeadline()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }



    function supprimerquiz($id)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM quiz WHERE id =:id
                ');
            $querry->execute([
                'id'=>$id
            ]);

        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function getquiz($id){
        $requete="select * from quiz where id=:id   ";
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
