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
$var = 'test';

$Dkc = new Dkc();

//LANGUAGE START
$def_lang = $Dkc->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP

//днешна дата
$date=date('Y-m-d');
if(isset($_GET['idn'])){
    $patient_data = $Dkc->oldResults($_GET['idn']);
    $data = $Dkc->getPatientData($_GET['patient_id']);

    $Smarty->assign('data', $patient_data);

    if(isset($_GET['patient_id'])){
        $patient_data2 = $Dkc->getPatientData($_GET['patient_id']);
        // print_r($patient_data);
     //   $data2 = $Dkc->getPatientData($_GET['patient_id']);
        $Smarty->assign('data2', $patient_data2);
    }

}


//ЗАПИС НА ПРОМЕНИТЕ
if(isset($_POST['save'])){
    $patient['number'] = filter_input(INPUT_POST, 'number');
    $patient['name'] = filter_input(INPUT_POST, 'patient');
    $patient['doctor'] = filter_input(INPUT_POST, 'doctor');
    $patient['date'] = substr(filter_input(INPUT_POST, 'date'), 0, 10);
    $patient['over'] = filter_input(INPUT_POST, 'over');
    $patient['comment'] = filter_input(INPUT_POST, 'comment');
    $patient['note'] = filter_input(INPUT_POST, 'note');
    $patient['idn'] = filter_input(INPUT_POST, 'idn');
    $patient['cito'] = filter_input(INPUT_POST, 'cito');
//print_r($data);
    //  echo 1;
    $patient['id']=$data[0]['patient_id'];


   $Dkc->updatePatient($patient);
    header("Location: old_results.php?patient_id=".$patient['id']."&itsok=".$language['saved_msg']."!&idn=".$patient['idn']."");
}

$doctors=$Dkc->getAllDoctors();
    $Smarty->assign('doctors', $doctors);

if(isset($_GET['itsok'])){
    $Smarty->assign('ok', $_GET['itsok']);
}

$Smarty->assign('name', $_SESSION['user_info'][0]['name']);
$Smarty->assign('tests', $tests);
$Smarty->assign('dayList', $dayList);
$Smarty->assign('dayr', $dayResults);
$Smarty->assign('date', $date);
$Smarty->assign('day', $day);
$Smarty->display('old_results.tpl');