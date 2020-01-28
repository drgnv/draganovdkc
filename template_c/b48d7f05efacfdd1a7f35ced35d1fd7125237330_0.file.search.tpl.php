<?php
/* Smarty version 3.1.32, created on 2020-01-28 23:20:06
  from '/var/www/html/dkc/view/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e30a586291406_84324579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b48d7f05efacfdd1a7f35ced35d1fd7125237330' => 
    array (
      0 => '/var/www/html/dkc/view/search.tpl',
      1 => 1580246405,
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
function content_5e30a586291406_84324579 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="" style="text-decoration: none; color: #394c70;">Лична анамнеза</a> |
        <a href="" style="text-decoration: none; color: #394c70;">Фамилна анамнеза</a> |
        <a href="" style="text-decoration: none; color: #394c70;">Алергии</a>
        </p>
<table border="0"><tr><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична информация</td>
            </tr>
            <tr>
                <td align="right">Пациент: </td>
                <td><input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_names'];?>
"></td>
            </tr>
            <tr>
                <td align="right">ЕГН: </td>
                <td><input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
"></td>
            </tr>

            <tr>
                <td align="right">Адрес: </td>
                <td><input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_address'];?>
"></td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td><input type="mail" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_mail'];?>
"></td>
            </tr>
            <tr>
                <td align="right">Телефон: </td>
                <td><input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_phone'];?>
"></td>
            </tr>
            <tr>
                <td align="right">Работно място:</td>
                <td><input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_workplace'];?>
"></td>
            </tr>
            <tr>
                <td align="right">Гражданство: </td>
                <td><input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['citizenship'];?>
"></td>
            </tr>
            <tr>
                <td align="right">Пол: </td>
                <td>
                    <select>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_gender'] == '1') {?>selected<?php } else {
}?>>Мъж</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_gender'] == '2') {?>selected<?php } else {
}?>>Жена</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['patient_info']->value['pi_gender'] == '3') {?>selected<?php } else {
}?>>Не е посочено</option>
                    </select>
                </td>
            </tr>
            </table>
</td><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична карта</td>
            </tr>

            <tr>
            <td>ЛК № </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_lk_num'];?>
"></td>
            </tr>
            <tr>
            <td>Издадена: </td>
            <td><input type="date" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_out_date'];?>
"></td>
            </tr>
            <tr>
                <td>Валидна до: </td>
                <td>
                   <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_exp_date'];?>
">
                </td>
            </tr>
            <tr>
                <td>Издадена от: </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_out_place'];?>
"></td>
            </tr>

        </table>
        </td></tr>
        <tr>
            <td colspan="2">

            </td>
        </tr>

</table>
        <?php }?>


</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
