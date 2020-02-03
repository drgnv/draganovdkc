<?php
/* Smarty version 3.1.32, created on 2020-02-03 12:50:56
  from '/var/www/html/dkc/view/fam_medical_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e37fb1016dee9_45554072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5afaa04a16072731cf17e3233d9af51ff3f3cd' => 
    array (
      0 => '/var/www/html/dkc/view/fam_medical_history.tpl',
      1 => 1580726949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e37fb1016dee9_45554072 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Фамилна анамнеза</title>
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
    <h2>Фамилна анамнеза</h2>
    <p><b>Пациент:</b> <?php echo $_smarty_tpl->tpl_vars['pi']->value['pi_names'];?>
 | <b>ЕГН:</b> <?php echo $_smarty_tpl->tpl_vars['pi']->value['pi_patient_idn'];?>
</p></center>
<form action="./fam_medical_history.php?idn=<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
" method="post">
    <textarea class="content" name="fhm"><?php echo $_smarty_tpl->tpl_vars['fmh']->value;?>
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
