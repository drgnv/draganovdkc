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

//LANGUAGE START
$def_lang = $Dkc->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP

if(isset($_GET['exam_id'])){
    $exam_id = $_GET['exam_id'];
    $exam_info = $Dkc->getExamById($exam_id);
   // print_r($exam_info);
    $Smarty->assign('exam_info', $exam_info);
}

if(isset($_POST['save'])){
    $exam_update['time'] = $_POST['time'];
    $exam_update['date'] = $_POST['date'];
    $exam_update['note'] = $_POST['note'];
    $exam_update['status'] = $_POST['status'];
    $exam_update['exam_id'] = $_POST['exam_id'];
    $Dkc->updateExamById($exam_update);
    header('Location: ./edit_exam.php?exam_id='.$exam_update['exam_id'].'&msg=Промените са записани успешно');


}

$Smarty->assign('ok', $_GET['msg']);

$Smarty->display('edit_exam.tpl');
