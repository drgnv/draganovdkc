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

$dayList = $Dkc->getDayPatientListForDoc($_SESSION['user_info'][0]['doctor_id']);

$Smarty->assign('daylist', $dayList);



$Smarty->display('clinical_laboratory.tpl');
