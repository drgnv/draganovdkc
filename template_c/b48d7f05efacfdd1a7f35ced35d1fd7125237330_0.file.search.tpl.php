<?php
/* Smarty version 3.1.32, created on 2020-01-26 15:40:36
  from '/var/www/html/dkc/view/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2d96d4b7c326_48907627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b48d7f05efacfdd1a7f35ced35d1fd7125237330' => 
    array (
      0 => '/var/www/html/dkc/view/search.tpl',
      1 => 1580046036,
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
function content_5e2d96d4b7c326_48907627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/dkc/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
<div class="main">

    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'idn') {?>
<table border="0"><tr><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична информация</td>
            </tr>
            <tr>
                <td align="right">Пациент: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_names'];?>
</td>
            </tr>
            <tr>
                <td align="right">ЕГН: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_patient_idn'];?>
</td>
            </tr>

            <tr>
                <td align="right">Адрес: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_address'];?>
</td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_mail'];?>
</td>
            </tr>
            <tr>
                <td align="right">Телефон: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_phone'];?>
</td>
            </tr>
            <tr>
                <td align="right">Работно място:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_workplace'];?>
</td>
            </tr>
            <tr>
                <td align="right">Гражданство: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['citizenship'];?>
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
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_lk_num'];?>
</td>
            </tr>
            <tr>
            <td>Издадена: </td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['patient_info']->value['pi_out_date'],"%D");?>
</td>
            </tr>
            <tr>
                <td>Валидна до: </td>
                <td>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['patient_info']->value['pi_exp_date'],"%D");?>

                </td>
            </tr>
            <tr>
                <td>Издадена от: </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient_info']->value['pi_out_place'];?>
</td>
            </tr>

        </table>
        </td></tr></table>
        <?php }?>


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
