<?php
/* Smarty version 3.1.32, created on 2020-01-25 11:55:47
  from '/var/www/html/dkc/view/new_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2c10a3765612_16066603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '916737d5416c9b16aed75e5ea0ecfc896f5134a1' => 
    array (
      0 => '/var/www/html/dkc/view/new_request.tpl',
      1 => 1579946144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2c10a3765612_16066603 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>

</head>
<body>
<form action="./new_request.php" method="get">
    <input type="text" name="idn" placeholder="ЕГН">
    <input type="hidden" name="type" value="cl">
    <input type="submit" name="send" value="Напред">
    </form>
<?php if ($_smarty_tpl->tpl_vars['find']->value == "false") {?>
    Не открихме пациент с ЕГН: <?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
<br>
    Моля, проверете ЕНГ за грешки или добавете нов пациент!
<?php }?>
</body>
</html><?php }
}
