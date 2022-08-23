<?php
include_once '../../Controller/CoursC.php';

$coursC = new CoursC();
$coursC->supprimercours($_GET['id']);
header('Location:tables.php');
?>