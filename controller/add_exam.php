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

if(isset($_GET['find_patient'])){

    $idn = $_GET['idn'];
    if(is_array($Dkc->getPersonalInfo($idn))){
        $find = "true";
        $Smarty->assign('personal_info', $Dkc->getPersonalInfo($idn));
        $Smarty->assign('find', $find);
        if($_POST['add']){
            $exam['time'] = $_POST['time'];
            $exam['date'] = $_POST['date'];
            $exam['note'] = $_POST['note'];
            $exam['status'] = $_POST['status'];
            $exam['idn'] = $idn;
            $exam['doctor_id'] = $_SESSION['user_info'][0]['id'];
         $Dkc->newExam($exam);
        }
    }else{
        $find = "false";

        $Smarty->assign('find', $find);
    }
    $Smarty->assign('idn', $idn);
}



$Smarty->display('add_exam.tpl');
