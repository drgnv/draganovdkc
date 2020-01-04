<?php
/* Smarty version 3.1.32, created on 2020-01-04 20:41:16
  from '/var/www/html/dkc/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e10dc4c5e2f39_55003979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c3fb89723b7c353ded75e45598b2ac883db17a' => 
    array (
      0 => '/var/www/html/dkc/view/index.tpl',
      1 => 1577725601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10dc4c5e2f39_55003979 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>dLab Вход</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

    <div class="login-page">
        <div class="form">
            <img src="./images/draganovlabtransperant.png" width="150" height="150" align="center">
            <form autocomplete="off" class="login-form" action="index.php" method="post">
                <input type="text" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
" />
                <input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
" />
                <b style="color: red;"><?php echo $_smarty_tpl->tpl_vars['wrong_msg']->value;?>
</b>
                <button><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_btn'];?>
</button>

            </form>
                <p><a href="support.html"><?php echo $_smarty_tpl->tpl_vars['lang']->value['support'];?>
</a></p>
        </div>
    </div>
    <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/loginindex.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
