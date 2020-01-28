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

if(isset($_GET['search'])){

    $search = $_GET['search'];

    if(is_numeric($search) && strlen($search) == 10){

        $patient_info = $Dkc->getPersonalInfo($search);
        $Smarty->assign('patient_info', $patient_info[0]);
        $Smarty->assign('doctor', $_SESSION['user_info'][0]['id']);
        $type='idn';
        $Smarty->assign('type', $type);

    }

}

$Smarty->display('search.tpl');