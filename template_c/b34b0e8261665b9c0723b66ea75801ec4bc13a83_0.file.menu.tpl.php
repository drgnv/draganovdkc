<?php
/* Smarty version 3.1.32, created on 2020-02-13 17:32:52
  from 'C:\xampp\htdocs\dkc\view\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e457a3473c192_92085210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b34b0e8261665b9c0723b66ea75801ec4bc13a83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dkc\\view\\menu.tpl',
      1 => 1581611126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e457a3473c192_92085210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidenav">
    <center><img src="../images/dkcwhite.png" width="100px" height="100px" ></center>

    <form id="demo-2" action="./search.php" method="GET" autocomplete="off">
        <input type="search" placeholder="Търсене" name="search">
    </form><br>
    <a href="./home.php">Начало</a>
    <a href="./exams.php">Прегледи</a>
    <div class="showhim">
    <a href="#services">Пациенти+</a>
        <div class="showme">
            <a style="font-size: 15px" href="new_patient.php">>>Нов пациент</a>
            </div>
    </div>
    <div class="showhim">
        <a>Лаборатории+</a>
        <div class="showme">
            <a style="font-size: 15px" href="clinical_laboratory.php">>>Клинична</a>
            <a style="font-size: 15px">>>Микробиология</a>
        </div>
    </div>
    <a href="#clients">Документи</a>
    <a href="./settings.php">Настройки</a>
    <a href="../logout.php">Изход</a>
    <a style="font-size: 14px">Потребител: <?php echo $_smarty_tpl->tpl_vars['user_info']->value['name'];?>
</a>
</div>
<?php }
}
