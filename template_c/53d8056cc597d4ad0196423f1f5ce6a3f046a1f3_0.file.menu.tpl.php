<?php
/* Smarty version 3.1.32, created on 2020-01-26 16:21:52
  from '/var/www/html/dkc/view/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2da080009569_69908927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d8056cc597d4ad0196423f1f5ce6a3f046a1f3' => 
    array (
      0 => '/var/www/html/dkc/view/menu.tpl',
      1 => 1580048511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2da080009569_69908927 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidenav">
    <center><img src="../images/dkcwhite.png" width="100px" height="100px" ></center>
    <form id="demo-2" action="./search.php" method="GET" autocomplete="off">
        <input type="search" placeholder="Търсене" name="search">
    </form><br>
    <a href="./home.php">Начало</a>
    <a href="./exams.php">Прегледи</a>
    <a href="#services">Пациенти</a>
    <div class="showhim">
        <a>Лаборатории+</a>
        <div class="showme">
            <a style="font-size: 15px" href="clinical_laboratory.php">>>Клинична</a>
            <a style="font-size: 15px">>>Микробиология</a>
        </div>
    </div>
    <a href="#clients">Документи</a>
    <a href="#contact">Настройки</a>
    <a href="../logout.php">Изход</a>
</div><?php }
}
