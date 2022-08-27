<?php
include_once '../../Controller/QuizC.php';

$quizC = new QuizC();
$quizC->supprimerquiz($_GET['id']);
header('Location:tables.php');
?>