<?php
/* Smarty version 3.1.32, created on 2020-02-03 12:51:38
  from '/var/www/html/dkc/view/alergies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e37fb3aa54b22_53124584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b484e874dfae35eff1f1ba4e74971282fc1e961' => 
    array (
      0 => '/var/www/html/dkc/view/alergies.tpl',
      1 => 1580727091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e37fb3aa54b22_53124584 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Алергии</title>
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
<center>
    <h2>Алергии</h2>
    <p><b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['pi']->value['pi_names'];?>
 | <b>ЕГН:</b> <?php echo $_smarty_tpl->tpl_vars['pi']->value['pi_patient_idn'];?>
</p></center>
<form action="./alergies.php?idn=<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
" method="post">
    <textarea class="content" name="alergi"><?php echo $_smarty_tpl->tpl_vars['alergi']->value;?>
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
