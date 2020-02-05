<?php
/* Smarty version 3.1.32, created on 2020-02-04 17:53:45
  from '/var/www/html/dkc/view/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e399389a16205_57955489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b48d7f05efacfdd1a7f35ced35d1fd7125237330' => 
    array (
      0 => '/var/www/html/dkc/view/search.tpl',
      1 => 1580831625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e399389a16205_57955489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/tinymce.min.js" referrerpolicy="origin"><?php echo '</script'; ?>
>
<style>
    input[type=submit] {
        width: 15%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
<style>

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#journal').DataTable({

                    "pageLength": 50,
                    "scrollCollapse": true,
                    "scrollY": "575px",
                    "paging": false,
                    "bInfo" : false

                }

        );
    });


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    tinymce.init({
        selector: '#mytextarea'
    });
    tinymce.init({
        selector: '#mytextarea2'
    });
    tinymce.init({
        selector: '#mytextarea3'
    });
<?php echo '</script'; ?>
>
<div class="main">

    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'idn') {?><p style="font-size: 16px;">
        <div align="center" style="font-size: 16px;">
        <a href="./new_request_cl.php" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./new_request_cl.php?patient_names=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_names'];?>
&patient_idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
&doctor=<?php echo $_smarty_tpl->tpl_vars['doctor']->value;?>
',
               'newwindow',
               'width=700,height=500');
               return false;"

        >+Заявка клинична лаборатория</a> |
        <a href="" style="text-decoration: none; color: #394c70;">+Заявка микробиология</a> |
        <a href="./add_exam.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
&find_patient=Намери"
           style="text-decoration: none; color: #394c70;"

           onclick="window.open('./add_exam.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
&find_patient=Намери',
                   'newwindow',
                   'width=700,height=500');
                   return false;"

        >Нов преглед</a> |
        <a href="./personal_medical_history.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./personal_medical_history.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
',
                   'newwindow',
                   'width=1300,height=650');
                   return false;"

        >Лична анамнеза</a> |
        <a href="./fam_medical_history.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./fam_medical_history.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
',
                   'newwindow',
                   'width=1300,height=650');
                   return false;"

        >Фамилна анамнеза</a> |
        <a href="./alergies.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./alergies.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
',
                   'newwindow',
                   'width=1300,height=650');
                   return false;"

        >Алергии</a>
        </p>
        </div>
        <form action="./search.php?search=<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
" method="post">
            <table border="1" cellspacing="0" align="center">
                <thead style="font-size: 18px; background-color: #34495E; color: white;">
                <th colspan="4">Лични данни</th>
                </thead>
                <tbody style="font-size: 16px;">
                <tr>
                    <td>Име:</td>
                    <td><input type="text" name="names" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_names'];?>
"></td>

                    <td>ЕГН:</td>
                    <td><input type="text" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
"></td>
                </tr>

                <tr>
                    <td>Адрес:</td>
                    <td><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_address'];?>
"></td>

                    <td>E-mail:</td>
                    <td><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_mail'];?>
"></td>
                </tr>

                <tr>
                    <td>Телефон:</td>
                    <td><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_phone'];?>
"></td>

                    <td>Работно Място:</td>
                    <td><input type="text" name="work_place" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_workplace'];?>
"></td>
                </tr>

                <tr>
                    <td>Гражданство:</td>
                    <td><input type="text" name="citizenship" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['citizenship'];?>
"></td>

                    <td>Пол:</td>
                    <td>
                        <select name="gender">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_gender'] == '1') {?>selected<?php } else {
}?>>Мъж</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_gender'] == '2') {?>selected<?php } else {
}?>>Жена</option>
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_gender'] == '3') {?>selected<?php } else {
}?>>Не е посочено</option>
                        </select>
                    </td>
                </tr>
                </tbody>

                <thead style="font-size: 18px;background-color: #34495E; color: white;">
                <th colspan="4">Лична карта</th>
                </thead>
                <tbody style="font-size: 16px;">
                <tr>
                    <td>ЛК №</td>
                    <td><input type="text" name="lk_num" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_lk_num'];?>
"></td>

                    <td>Издадена:</td>
                    <td><input type="date" name="out_date" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_out_date'];?>
"></td>

                </tr>
                <tr>
                    <td>Валидна до:</td>
                    <td><input type="date" name="exp_date" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_exp_date'];?>
"></td>

                    <td>Издадена от:</td>
                    <td><input type="text" name="outplace" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_out_place'];?>
"></td>

                </tr>
                </tbody>


                <thead style="font-size: 18px;background-color: #34495E; color: white;">

                <th colspan="4">Здравна информация</th>

                </thead>
                <tbody style="font-size: 16px;">

                <tr>
                    <td colspan="2" align="right">Здравна книжка №:</td>
                    <td colspan="2"><input type="text" name="zdr_knizkha_num" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['zdr_knizkha_num'];?>
"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Рецептурна книжка №:</td>
                    <td colspan="2"><input type="text" name="rec_knizkha_num" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['rec_knizkha_num'];?>
"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">ЛАК №:</td>
                    <td colspan="2"><input type="text" name="lak_num" type="text" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['lak_num'];?>
"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Кръвна група:</td>
                    <td colspan="2">
                        <select name="blood_type">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '1') {?>selected<?php } else {
}?>>A+</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '2') {?>selected<?php } else {
}?>>A-</option>
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '3') {?>selected<?php } else {
}?>>B+</option>
                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '4') {?>selected<?php } else {
}?>>B-</option>
                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '5') {?>selected<?php } else {
}?>>AB+</option>
                            <option value="6" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '6') {?>selected<?php } else {
}?>>AB-</option>
                            <option value="7" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '7') {?>selected<?php } else {
}?>>0+</option>
                            <option value="8" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == '8') {?>selected<?php } else {
}?>>0-</option>
                            <option value="false" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_blood_type'] == 'false') {?>selected<?php } else {
}?>>Не е посочено</option>
                        </select>

                    </td>
                </tr>
                </tbody>

            </table><center>
                <input type="submit" name="save" value="Добави нов пациент" style="font-size: 14px;">
            </center>
        </form>
        <?php }?>


</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
