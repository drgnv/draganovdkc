<?php
include_once 'Mdds.php';
/**
 * Created by PhpStorm.
 * User: rgnv
 * Date: 05.01.20
 * Time: 13:01
 */
class Dkc extends Mdds
{
    public function getExamsByUserId($user_id){
        $sql = "SELECT * FROM exams LEFT JOIN personal_info ON exams.exams_idn = personal_info.pi_patient_idn WHERE exams_doctor_id = '".$user_id."'";
        return $this->sqliexecute($sql);
       // return $sql;
    }

    public function getExamById($exam_id){
        $sql = "SELECT * FROM exams LEFT JOIN personal_info ON exams.exams_idn = personal_info.pi_patient_idn WHERE exams_id = '".$exam_id."'";
        return $this->sqliexecute($sql);
    }

    public function updateExamById($exam_update){
        $sql = "UPDATE exams SET "
            . "exams_time = '".mysqli_real_escape_string($this->connect(), $exam_update['time'])."', "
            . "exams_date = '".mysqli_real_escape_string($this->connect(), $exam_update['date'])."', "
            . "exams_note = '".mysqli_real_escape_string($this->connect(), $exam_update['note'])."', "
            . "exams_status = '".mysqli_real_escape_string($this->connect(), $exam_update['status'])."'"
            . " WHERE exams_id = '".mysqli_real_escape_string($this->connect(), $exam_update['exam_id'])."'";
        $this->sqliexecute($sql);
    }

    public function deleteExamById($exam_id){
        $sql = "DELETE FROM `exams` WHERE `exams_id` = '".$exam_id."'";
        $this->sqliexecute($sql);
    }

    public function newExam($exam){
        //INSERT INTO `personal_info` (`
        $sql = "INSERT INTO `exams` (`exams_idn`, `exams_time`, `exams_note`, `exams_id`, `exams_date`, `exams_doctor_id`, `exams_status`)
          VALUES ('".mysqli_real_escape_string($this->connect(), $exam['idn'])."',
          '".mysqli_real_escape_string($this->connect(), $exam['time'])."',
          '".mysqli_real_escape_string($this->connect(), $exam['note'])."', NULL,
          '".mysqli_real_escape_string($this->connect(), $exam['date'])."',
          '".mysqli_real_escape_string($this->connect(), $exam['doctor_id'])."',
           ".mysqli_real_escape_string($this->connect(), $exam['status']).")";
        $this->sqliexecute($sql);
    }
}