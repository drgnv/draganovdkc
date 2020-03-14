<?php
/* Smarty version 3.1.32, created on 2020-02-13 20:41:55
  from 'C:\xampp\htdocs\dkc\view\edit_exam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e45a683599262_61790902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf7154cf2ae39bace67c2d06b89f89768975d34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dkc\\view\\edit_exam.tpl',
      1 => 1581611126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e45a683599262_61790902 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>dKc</title>
    <style>
        body{
            background-color: #34495E;
            font-size: 20px;
            color: white;
            font-family: "Lato", sans-serif;
        }
    </style>
</head>
<body><center>
<p>Редактирайте прегледа на: <?php echo $_smarty_tpl->tpl_vars['exam_info']->value[0]['pi_names'];?>
</p><br>
<form action="./edit_exam.php?exam_id="<?php echo $_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_id'];?>
" method="POST">
<table border="0">

    <tr>
        <td align="right">Час:</td>
        <td ><?php echo '<script'; ?>
 src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"><?php echo '</script'; ?>
>
            <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
            <input type="text" id="time" name="time" value="<?php echo $_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_time'];?>
">

            <?php echo '<script'; ?>
>var timepicker = new TimePicker('time', {
                    lang: 'en',
                    theme: 'dark'
                });
                timepicker.on('change', function(evt) {

                    var value = (evt.hour || '00') + ':' + (evt.minute || '00');
                    evt.element.value = value;

                });<?php echo '</script'; ?>
>
        </td>
    </tr>
    <tr>
        <td align="right">Дата:</td>
        <td><input type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_date'];?>
"></td>
    </tr>
    <tr>
        <td align="right">Бележка:</td>
        <td><input type="text" name="note" value="<?php echo $_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_note'];?>
"></td>
    </tr>
    <tr>
        <td align="right">Статус: </td>
        <td>
            <select name="status">
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_status'] == "1") {?>selected<?php }?>>Приключен</option>
                <option value="0" <?php if ($_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_status'] == "0") {?>selected<?php }?>>НЕприключен</option>
            </select>

        </td>
    </tr>
    </table>
    <p style="color: white;background-color: green;"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</p>
    <input type="hidden" name="exam_id" value="<?php echo $_smarty_tpl->tpl_vars['exam_info']->value[0]['exams_id'];?>
">
<input type="submit" name="save" value="Запис">
</form></center>
</body></html><?php }
}
