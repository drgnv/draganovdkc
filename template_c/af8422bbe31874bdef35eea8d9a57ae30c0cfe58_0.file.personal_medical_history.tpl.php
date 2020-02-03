<?php
/* Smarty version 3.1.32, created on 2020-02-03 10:09:15
  from '/var/www/html/dkc/view/personal_medical_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e37d52b4f22b2_88561352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af8422bbe31874bdef35eea8d9a57ae30c0cfe58' => 
    array (
      0 => '/var/www/html/dkc/view/personal_medical_history.tpl',
      1 => 1580717353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e37d52b4f22b2_88561352 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Лична анамнеза</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/richtext.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.richtext.js"><?php echo '</script'; ?>
>

</head>
<body>
<form action="./personal_medical_history.php?idn=<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
" method="post">
<textarea class="content" name="phm"><?php echo $_smarty_tpl->tpl_vars['pmh']->value;?>
</textarea>

    <input type="submit" name="save" value="Запиши">
</form>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('.content').richText();
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
