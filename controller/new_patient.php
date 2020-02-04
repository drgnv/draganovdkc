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

if(isset($_POST['save'])){

    $pi['idn'] = $_POST['idn'];

    if($Dkc->egn_valid($pi['idn']) == true) {

        $pi['names'] = $_POST['names'];
        $pi['address'] = $_POST['address'];
        $pi['mail'] = $_POST['mail'];
        $pi['phone'] = $_POST['phone'];
        $pi['work_place'] = $_POST['work_place'];
        $pi['citizenship'] = $_POST['citizenship'];
        $pi['gender'] = $_POST['gender'];
        $pi['lk_num'] = $_POST['lk_num'];
        $pi['out_date'] = $_POST['out_date'];
        $pi['exp_date'] = $_POST['exp_date'];
        $pi['out_place'] = $_POST['out_place'];
        $pi['zdr_knizkha'] = $_POST['zdr_knizkha'];
        $pi['rec_knizkha'] = $_POST['rec_knizkha'];
        $pi['lak_num'] = $_POST['lak_num'];
        $pi['blood_type'] = $_POST['blood_type'];
        $Dkc->setNewPatient($pi);
    }




}



$Smarty->display('new_patient.tpl');