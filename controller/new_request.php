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

if(isset($_GET['type'])){

    $idn = $_GET['idn'];
    $type = $_GET['type'];
    if(is_array($Dkc->getPersonalInfo($idn))){
        $patients_data = $Dkc->getPersonalInfo($idn);
        header('Location: ./new_request_'.$type.'.php?patient_names='.$patients_data[0]['pi_names'].'&patient_idn='.$patients_data[0]['pi_patient_idn'].'&doctor='.$_SESSION['user_info'][0]['id'].'');
    }else{
        $find = "false";

        $Smarty->assign('find', $find);
    }


}




$Smarty->display('new_request.tpl');