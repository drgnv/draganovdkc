<?php
/* Smarty version 3.1.32, created on 2020-01-26 07:58:06
  from '/var/www/html/dkc/view/clinical_laboratory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2d2a6e928a90_05084661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '498439288ab0f2eb56a6123b4928b96d96336e55' => 
    array (
      0 => '/var/www/html/dkc/view/clinical_laboratory.tpl',
      1 => 1580018259,
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
function content_5e2d2a6e928a90_05084661 (Smarty_Internal_Template $_smarty_tpl) {
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

    <a style="font-size: 16px; text-decoration: none;" href="./new_request.php"

       onclick="window.open('./new_request.php',
               'newwindow',
               'width=1000,height=800');
               return false;"

    ><img src="../images/add.png" width="17" height="17" align="left">Нова заявка</a>

    <table id="journal" class="hover compact" >
        <thead>
        <tr  style="background-color: #34495E; color: white; height: 1px; font-size: 15px;">
            <th title="Статус">С</th>
            <th>T</th>
            <th>ID</th>
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody style="background-color: #34495E; color: black; height: 1px; font-size: 15px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daylist']->value, 'patient');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
?>
            <tr>
                <td><?php if ($_smarty_tpl->tpl_vars['patient']->value['over'] == "on") {?>
                        <i style="visibility: hidden;">1</i><img src="../images/over.PNG" width="20" height="20" title="Приключен">
                    <?php } else { ?>
                        <i style="visibility: hidden;">0</i><img src="../images/notover.PNG" width="20" height="20" title="НЕприключен">
                    <?php }?></td>
                <td>

                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['patient']->value['pay'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>

                        <b hidden="true">a</b> <img src="../images/dollar-symbol.png" width="25" height="25"> <?php }?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['patient']->value['pay'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                        <img src="../images/NZOK.png" width="25" height="25"> <?php }?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['number'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['names'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['idn'];?>
</td>
                <td>
                    <a href="./new_request_cl.php?names=<?php echo $_smarty_tpl->tpl_vars['patient']->value['names'];?>
&idn=<?php echo $_smarty_tpl->tpl_vars['patient']->value['idn'];?>
&doctor=<?php echo $_smarty_tpl->tpl_vars['patient']->value['doctor_id'];?>
"
                       style="text-decoration: none;"
                       onclick="window.open('./new_request_cl.php?names=<?php echo $_smarty_tpl->tpl_vars['patient']->value['names'];?>
&idn=<?php echo $_smarty_tpl->tpl_vars['patient']->value['idn'];?>
&doctor=<?php echo $_smarty_tpl->tpl_vars['patient']->value['doctor_id'];?>
',
                               'newwindow',
                               'width=900,height=600');
                               return false;">
                        <img src="../images/add.png" width="20" height="20">
                    </a>
                    <a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"
                       onclick="window.open('./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
',
                               'newwindow',
                               'width=900,height=600');
                               return false;"
                    ><img src="../images/edit.png" width="20" height="20"></a>
                    <a href="./old_results.php?idn=<?php echo $_smarty_tpl->tpl_vars['patient']->value['idn'];?>
">
                        <img src="../images/archive.png" width="20" height="20">
                    </a>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>



</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
