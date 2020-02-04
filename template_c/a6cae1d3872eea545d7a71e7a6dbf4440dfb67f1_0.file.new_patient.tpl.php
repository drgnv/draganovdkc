<?php
/* Smarty version 3.1.32, created on 2020-02-04 10:06:42
  from '/var/www/html/dkc/view/new_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e39261208ed73_86395800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6cae1d3872eea545d7a71e7a6dbf4440dfb67f1' => 
    array (
      0 => '/var/www/html/dkc/view/new_patient.tpl',
      1 => 1580803601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e39261208ed73_86395800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
<style>
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

<div class="main">
<p align="center" style="font-size: 24px;">Нов пациент</p>

    <table border="1" cellspacing="0" align="center">
    <thead style="font-size: 18px; background-color: #34495E; color: white;">
    <th colspan="4">Лични данни</th>
    </thead>
        <tbody style="font-size: 16px;">
    <tr>
        <td>Име:</td>
        <td><input type="text" name=""></td>

        <td>ЕГН:</td>
        <td><input type="text" name=""></td>
    </tr>

    <tr>
         <td>Адрес:</td>
         <td><input type="text" name=""></td>

         <td>E-mail:</td>
         <td><input type="text" name=""></td>
    </tr>

    <tr>
        <td>Телефон:</td>
        <td><input type="text" name=""></td>

        <td>Работно Място:</td>
        <td><input type="text" name=""></td>
    </tr>

    <tr>
        <td>Гражданство:</td>
        <td><input type="text" name=""></td>

        <td>Пол:</td>
        <td><input type="text" name=""></td>
    </tr>
        </tbody>

        <thead style="font-size: 18px;background-color: #34495E; color: white;">
        <th colspan="4">Лична карта</th>
        </thead>
        <tbody style="font-size: 16px;">
        <tr>
            <td>ЛК №</td>
            <td><input type="text" name=""></td>

            <td>Издадена:</td>
            <td><input type="date" name=""></td>

        </tr>
        <tr>
            <td>Валидна до:</td>
            <td><input type="date" name=""></td>

            <td>Издадена от:</td>
            <td><input type="text" name=""></td>

        </tr>
        </tbody>


        <thead style="font-size: 18px;background-color: #34495E; color: white;">

        <th colspan="4">Здравна информация</th>

        </thead>
        <tbody style="font-size: 16px;">

        <tr>
            <td colspan="2" align="right">Здравна книжка №:</td>
            <td colspan="2"><input type="text" name=""></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Рецептурна книжка №:</td>
            <td colspan="2"><input type="text" name=""></td>
        </tr>
        <tr>
            <td colspan="2" align="right">ЛАК №:</td>
            <td colspan="2"><input type="text" name=""></td>
        </tr>
        </tbody>

    </table><center>
<input type="submit" name="" value="Добави нов пациент" style="font-size: 14px;">
        </center>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
