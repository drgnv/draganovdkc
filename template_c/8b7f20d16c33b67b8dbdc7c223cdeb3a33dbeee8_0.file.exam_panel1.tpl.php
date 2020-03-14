<?php
/* Smarty version 3.1.32, created on 2020-02-13 20:38:39
  from 'C:\xampp\htdocs\dkc\view\exam_panel1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e45a5bfc1b663_37455753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7f20d16c33b67b8dbdc7c223cdeb3a33dbeee8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dkc\\view\\exam_panel1.tpl',
      1 => 1581611126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e45a5bfc1b663_37455753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\dkc\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><table border="0" id="journal" class="hover compact" >
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
                  <i style="visibility: hidden;">1</i><a href="./exams.php?status=0&exam_id=<?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_id'];?>
"><img src="../images/over.PNG" width="20" height="20" title="Приключен"></a>
                <?php } else { ?>
                    <i style="visibility: hidden;">0</i><a href="./exams.php?status=1&exam_id=<?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_id'];?>
"><img src="../images/notover.PNG" width="20" height="20" title="НЕприключен"></a>
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_time'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exam']->value['exams_date'],"%D");?>
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
</table><?php }
}
