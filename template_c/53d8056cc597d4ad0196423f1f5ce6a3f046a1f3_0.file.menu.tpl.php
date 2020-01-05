<?php
/* Smarty version 3.1.32, created on 2020-01-05 08:12:07
  from '/var/www/html/dkc/view/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e117e378ed129_37568101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d8056cc597d4ad0196423f1f5ce6a3f046a1f3' => 
    array (
      0 => '/var/www/html/dkc/view/menu.tpl',
      1 => 1578204726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e117e378ed129_37568101 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidenav">
    <form align="center">
        <input type="text" size="14">
        <input type="submit" size="5" value="t">
    </form><br>
    <a href="./home.php">Начало</a>
    <a href="./exams.php">Прегледи</a>
    <a href="#services">Пациенти</a>
    <div class="showhim">
        <a>Лаборатории+</a>
        <div class="showme">
            <a style="font-size: 15px">Клинична</a>
            <a style="font-size: 15px">Микробиология</a>
        </div>
    </div>
    <a href="#clients">Документи</a>
    <a href="#contact">Настройки</a>
    <a href="../logout.php">Изход</a>
</div><?php }
}
