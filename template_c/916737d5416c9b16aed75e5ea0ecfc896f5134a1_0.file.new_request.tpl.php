<?php
/* Smarty version 3.1.32, created on 2020-01-26 07:59:45
  from '/var/www/html/dkc/view/new_request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2d2ad142b008_58163584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '916737d5416c9b16aed75e5ea0ecfc896f5134a1' => 
    array (
      0 => '/var/www/html/dkc/view/new_request.tpl',
      1 => 1580018382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2d2ad142b008_58163584 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<style>
    body{
        background-color: #34495E;
        color: white;
    }
    input[type=text], select {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

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
</head>
<body>
<center><br><br><br>
    <p style="font-family: Monospace; font-size: 14px;">
        Въведете ЕГН на пациент за да изпратите заявка за изслеване към клинична лаборатория
    </p>
<form action="./new_request.php" method="get">
    <input type="text" name="idn" placeholder="ЕГН">
    <input type="hidden" name="type" value="cl">
    <input type="submit" name="send" value="Напред">
    </form>
<?php if ($_smarty_tpl->tpl_vars['find']->value == "false") {?>
    <p style="font-family: Monospace; font-size: 14px;">
    Не открихме пациент с ЕГН: <?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
<br>
    Моля, проверете ЕНГ за грешки или добавете нов пациент!
        </p>
<?php }?>
</center>
</body>
</html><?php }
}
