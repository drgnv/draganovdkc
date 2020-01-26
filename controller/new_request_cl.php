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
//echo $_SESSION['user_info'][0]['id'];
$exam_list = $Dkc->getExamsByUserId($_SESSION['user_info'][0]['id']);
$patient_name = $_GET['patient_names'];
$idn = $_GET['patient_idn'];
$docto_r = $_GET['doctor'];
$Smarty->assign('patient', $patient_name);
$Smarty->assign('idn', $idn);
$Smarty->assign('doctorr', $docto_r);
//print_r($Dkc->getLastnum());

$id = $Dkc->getLastnum();
$Smarty->assign('id', $id[0]['MAX(number)']);

    //
$patient_names = filter_input(INPUT_GET, 'patient_names');
$patient_idn = filter_input(INPUT_GET, 'patient_idn');
if(filter_has_var(INPUT_POST, 'record')){

    $pname = filter_input(INPUT_POST, 'names');
    $num = $id[0]['MAX(number)']+1;
    $doctor = filter_input(INPUT_POST, 'doctor');
    $results = $_POST['tests'];
    $pay = filter_input(INPUT_POST, 'pay');
    $idn = filter_input(INPUT_POST, 'idn');
    $cito = filter_input(INPUT_POST, 'cito');
    $comment = filter_input(INPUT_POST, 'comment');
    $note = filter_input(INPUT_POST, 'note');
    $date = filter_input(INPUT_POST, 'date');

    if($Dkc->checkCBC($results)){
        $counter = 1;
        $cbc_count = $Dkc->getCbcCount()+1;
        while ($counter <$cbc_count) {
            $results[]='99.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '01.01'){
                unset($results[$key]);
            }
        }

    }

    if($Dkc->checkEle($results)){
        $counter = 1;
        $ele_count = $Dkc->getEleCount()+1;
        while ($counter <$ele_count) {
            $results[]='15.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '15.00'){
                unset($results[$key]);
            }
        }

    }

    if($Dkc->checkUrin($results)){
        $counter = 1;
        $urin_count = $Dkc->getUrineCount()+1;
        while ($counter <$urin_count) {
            $results[]='88.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '01.08'){
                unset($results[$key]);
            }
        }
    }
    if($Dkc->checkAkr($results)){
        $counter = 1;
        $akr_count = $Dkc->getAkrCount()+1;
        while ($counter <$akr_count) {
            $results[]='66.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '66.00'){
                unset($results[$key]);
            }
        }
    }

    if($Dkc->checkDif($results)){
        $counter = 1;
        $dif_count = $Dkc->getDifCount()+1;
        while ($counter <$dif_count) {
            $results[]='44.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '01.40'){
                unset($results[$key]);
            }
        }
    }

    if($Dkc->checkKzp($results)){
        $counter = 1;
        $dif_count = $Dkc->getKzpCount()+1;
        while ($counter <$dif_count) {
            $results[]='62.0'.$counter;
            $counter++;
        }
        foreach ($results as $key => $value) {
            if($value == '62.00'){
                unset($results[$key]);
            }
        }
        foreach ($results as $key => $value) {
            if($value == '01.40'){
                unset($results[$key]);
            }
        }
    }



        $Dkc->newPatient($pname, $num, $doctor, $results, $date,$pay, $idn, $cito, $comment, $note);



}


$tests = $Dkc->getAllTests();
$Smarty->assign('tests',$tests);
$today_date = date('Y-m-d');
$Smarty->assign('date',$today_date);
$Smarty->display('new_request_cl.tpl');
