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
$needed_lvl = '2';
$Dkc->accessControl($_SESSION['user_info'][0]['lvl'], $needed_lvl);
$Smarty->assign('lvl', $_SESSION['user_info'][0]['lvl']);
$Smarty->assign('user_info', $_SESSION['user_info'][0]);
$Smarty->assign('doctors', $Dkc->getAllDoctors());
//LANGUAGE START
$def_lang = $Dkc->getLanguage();
include_once "../languages/".$def_lang[0]['default_lang'].".php";
$Smarty->assign('lang', $language);
//LANGUAGE STOP

if(isset($_GET['search'])){

    $search = $_GET['search'];

    if(is_numeric($search) && strlen($search) == 10){
        if(isset($_GET['success'])){
            $notification['show'] = 'true';
            $notification['alert_type'] = 'success';
            $notification['msg'] = 'Пациента е добавен успешно';
            $Smarty->assign('notification', $notification);
        }
        $patient_info = $Dkc->getPersonalInfo($search);
        $Smarty->assign('patient_info', $patient_info[0]);
        $Smarty->assign('doctor', $_SESSION['user_info'][0]['id']);
        $type='idn';
        $Smarty->assign('type', $type);


        if(isset($_POST['save'])){

            $pi['address'] = filter_input(INPUT_POST, 'address');
            $pi['mail'] = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
            $pi['gender'] = filter_input(INPUT_POST, 'gender', FILTER_VALIDATE_INT);
            $pi['phone'] = filter_input(INPUT_POST, 'phone');
            $pi['work_place'] = filter_input(INPUT_POST, 'work_place');
            $pi['citizenship'] = filter_input(INPUT_POST, 'citizenship');
            $pi['zdr_knizkha_num'] = filter_input(INPUT_POST, 'zdr_knizkha_num');
            $pi['rec_knizkha_num'] = filter_input(INPUT_POST, 'rec_knizkha_num');
            $pi['lak_num'] = filter_input(INPUT_POST, 'lak_num');
            $pi['names'] = filter_input(INPUT_POST, 'names');
            $pi['lk_num'] = filter_input(INPUT_POST, 'lk_num');
            $pi['out_date'] = filter_input(INPUT_POST, 'out_date');
            $pi['exp_date'] = filter_input(INPUT_POST, 'exp_date');
            $pi['out_place'] = filter_input(INPUT_POST, 'outplace');
            $pi['blood_type'] = filter_input(INPUT_POST, 'blood_type',  FILTER_VALIDATE_INT);
            $pi['idn'] = filter_input(INPUT_POST, 'idn');
            $pi['gp'] = filter_input(INPUT_POST, 'gp');


            if($Dkc->egn_valid($pi['idn'])) {
                     $Dkc->updatePersonalInfoSearch($pi);
                $notification['show'] = 'true';
                $notification['alert_type'] = 'success';
                $notification['msg'] = 'Пациента е добавен успешно';
                $Smarty->assign('notification', $notification);
                     header('Location: ./search.php?search='.$pi['idn'].'&success=true');
            }else{

                $notification['show'] = 'true';
                $notification['alert_type'] = 'error';
                $notification['msg'] = 'Въведен е невалиден ЕГН';
                $Smarty->assign('notification', $notification);

            }
        }
    }

}

$Smarty->display('search.tpl');