<?php
/* Smarty version 3.1.32, created on 2020-01-05 18:06:27
  from '/var/www/html/dkc/view/add_exam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e120983c506f7_42215110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f4a8c1eb7459a580d789d80853337f5cf29f962' => 
    array (
      0 => '/var/www/html/dkc/view/add_exam.tpl',
      1 => 1578240386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e120983c506f7_42215110 (Smarty_Internal_Template $_smarty_tpl) {
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


    <?php if ($_smarty_tpl->tpl_vars['find']->value == "true") {?>
    <b>Добави преглед за:</b> <?php echo $_smarty_tpl->tpl_vars['personal_info']->value[0]['pi_names'];?>
<br>
    <b>ЕГН:</b> <?php echo $_smarty_tpl->tpl_vars['personal_info']->value[0]['pi_patient_idn'];?>

    <form action="./add_exam.php?idn=<?php echo $_smarty_tpl->tpl_vars['personal_info']->value[0]['pi_patient_idn'];?>
&find_patient=true" method="POST">
    <table border="0">

        <tr>
            <td align="right">Час:</td>
            <td ><?php echo '<script'; ?>
 src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"><?php echo '</script'; ?>
>
                <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
                <input type="text" id="time" name="time">

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
            <td><input type="date" name="date" ></td>
        </tr>
        <tr>
            <td align="right">Бележка:</td>
            <td><input type="text" name="note"></td>
        </tr>
        <tr>
            <td align="right">Статус: </td>
            <td>
                <select name="status">

                    <option value="0" >НЕприключен</option>
                    <option value="1" >Приключен</option>
                </select>

            </td>
        </tr>
    </table>
    <input type="submit" name="add" value="Добави">
    </form></center>
<?php } else { ?>
<p>Добави прегледа на:

    <form action="add_exam.php" method="GET">
        <input type="text" name="idn" placeholder="ЕГН">
        <input type="submit" name="find_patient" value="Намери">
    </form>
</p><br>

<?php }
if ($_smarty_tpl->tpl_vars['find']->value == "false") {?>
    Не открихме пациент с ЕГН: <?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
<br>
    Моля, проверете ЕНГ за грешки или добавете нов пациент!
<?php }?>
</body></html><?php }
}
