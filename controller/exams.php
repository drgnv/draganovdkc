<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['user_info'])){
    header("Location: ../index.php");
}
include '../libs/Smarty.class.php';
include_once '../model/Dkc.php';
$Smarty = new Smarty();
$Smarty->template_dir='../view/';
$Smarty->compile_dir='../template_c/';


$Dkc = new Dkc();
$Smarty->assign('user_info', $_SESSION['user_info'][0]);
//LANGUAGE START
$def_lang = $Dkc->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP
//echo $_SESSION['user_info'][0]['id'];
$exam_list = $Dkc->getExamsByUserId($_SESSION['user_info'][0]['id']);
$Smarty->assign('exam_list', $exam_list);

if(isset($_GET['delete_id'])){

    $delete_id = $_GET['delete_id'];
    $Dkc->deleteExamById($delete_id);
    header('Location: exams.php');

}

if(isset($_GET['status'])){
$status = $_GET['status'];
$exam_id = $_GET['exam_id'];
    $Dkc->changeExamStatus($status, $exam_id);
    header('Location: exams.php');

}

$Smarty->display('exams.tpl');
