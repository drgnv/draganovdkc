<?php
/* Smarty version 3.1.32, created on 2020-01-07 17:04:11
  from '/var/www/html/dkc/view/exams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e149debaa17f0_31836407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4c2567c1983adbba93df4cd66fd33adb7fa3576' => 
    array (
      0 => '/var/www/html/dkc/view/exams.tpl',
      1 => 1578409450,
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
function content_5e149debaa17f0_31836407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
    <a style="font-size: 16px; text-decoration: none;" href="./add_exam.php"

       onclick="window.open('./add_exam.php',
               'newwindow',
               'width=500,height=300');
               return false;"

    ><img src="../images/add.png" width="17" height="17" align="left"> Добави преглед</a>
    <table border="0" id="journal" class="display" >
        <thead>
        <tr  style="background-color: #34495E; color: white; height: 1px; font-size: 15px;">
            <th title="Статус">С</th>
            <th>Час</th>
            <th>Дата</th>
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Бележка</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody style="background-color: #34495E; color: black; height: 1px; font-size: 15px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exam_list']->value, 'exam');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->value) {
?>
        <tr align="center">
            <td>
                <?php if ($_smarty_tpl->tpl_vars['exam']->value['exams_status'] == "1") {?>
                    <img src="../images/over.PNG" width="20" height="20" title="Приключен">
                <?php } else { ?>
                    <img src="../images/notover.PNG" width="20" height="20" title="НЕприключен">
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_time'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_date'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['exam']->value['pi_names'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_idn'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_note'];?>
</td>
            <td>
                <a href="./edit_exam.php?exam_id=<?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_id'];?>
"
                   onclick="window.open('./edit_exam.php?exam_id=<?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_id'];?>
',
                           'newwindow',
                           'width=500,height=300');
                           return false;"
                ><img src="../images/edit.png" width="20" height="20"></a>
                <a href="./exams.php?delete_id=<?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_id'];?>
" onclick="return confirm('Сигурни ли сте, че искате да изтриете прегледа на <?php echo $_smarty_tpl->tpl_vars['exam']->value['pi_names'];?>
?')"><img src="../images/delete.png" width="20" height="20"></a>
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
