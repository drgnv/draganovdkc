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


if(isset($_GET['idn'])){
    $Smarty->assign('idn', $_GET['idn']);
    $idn = $_GET['idn'];
    $personal_info = $Dkc->getPersonalInfo($idn);
    $Smarty->assign('fmh', $personal_info[0]['pi_fam_anamneza']);
    $Smarty->assign('pi', $personal_info[0]);

    if(isset($_POST['save'])){
        $Dkc->updateFmh($_POST['fhm'], $idn);
        header('Location: ./fam_medical_history.php?idn='.$idn.'');
    }


}


$Smarty->display('fam_medical_history.tpl');