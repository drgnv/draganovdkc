<?php
/* Smarty version 3.1.32, created on 2020-02-07 09:48:26
  from '/var/www/html/dkc/view/new_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3d164a478ce0_06690037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6cae1d3872eea545d7a71e7a6dbf4440dfb67f1' => 
    array (
      0 => '/var/www/html/dkc/view/new_patient.tpl',
      1 => 1581061523,
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
function content_5e3d164a478ce0_06690037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" type="text/css" href="../css/notifications.css">

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
<form action="./new_patient.php" method="post" autocomplete="off">
    <table border="1" cellspacing="0" align="center">
    <thead style="font-size: 18px; background-color: #34495E; color: white;">
    <th colspan="4">Лични данни</th>
    </thead>
        <tbody style="font-size: 16px;">
    <tr>
        <td>Име:</td>
        <td><input type="text" name="names" required></td>

        <td>ЕГН:</td>
        <td><input type="text" name="idn" required></td>
    </tr>

    <tr>
         <td>Адрес:</td>
         <td><input type="text" name="address"></td>

         <td>E-mail:</td>
         <td><input type="email" name="mail"></td>
    </tr>

    <tr>
        <td>Телефон:</td>
        <td><input type="tel" name="phone"></td>

        <td>Работно Място:</td>
        <td><input type="text" name="work_place"></td>
    </tr>

    <tr>
        <td>Гражданство:</td>
        <td><input type="text" name="citizenship" required></td>

        <td>Пол:</td>
        <td>
            <select name="gender" required>
                <option value="1">Мъж</option>
                <option value="2">Жена</option>
                <option value="3">Не е посочено</option>
            </select>
        </td>
    </tr>
        </tbody>

        <thead style="font-size: 18px;background-color: #34495E; color: white;">
        <th colspan="4">Лична карта</th>
        </thead>
        <tbody style="font-size: 16px;">
        <tr>
            <td>ЛК №</td>
            <td><input type="text" name="lk_num"></td>

            <td>Издадена:</td>
            <td><input type="date" name="out_date"></td>

        </tr>
        <tr>
            <td>Валидна до:</td>
            <td><input type="date" name="exp_date"></td>

            <td>Издадена от:</td>
            <td><input type="text" name="out_place"></td>

        </tr>
        </tbody>


        <thead style="font-size: 18px;background-color: #34495E; color: white;">

        <th colspan="4">Здравна информация</th>

        </thead>
        <tbody style="font-size: 16px;">

        <tr>
            <td colspan="2" align="right">Здравна книжка №:</td>
            <td colspan="2"><input type="text" name="zdr_knizkha"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Рецептурна книжка №:</td>
            <td colspan="2"><input type="text" name="rec_knizkha"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">ЛАК №:</td>
            <td colspan="2"><input type="text" name="lak_num"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Кръвна група:</td>
            <td colspan="2">
                <select name="blood_type">
                    <option value="1" >A+</option>
                    <option value="2" >A-</option>
                    <option value="3" >B+</option>
                    <option value="4" >B-</option>
                    <option value="5" >AB+</option>
                    <option value="6" >AB-</option>
                    <option value="7" >0+</option>
                    <option value="8" >0-</option>
                    <option value="false" >Не е посочено</option>
                </select>

            </td>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['lvl']->value >= 3) {?>
        <tr>
            <td colspan="2" align="right">Личен лекар:</td>
            <td colspan="2">
                <select name="gp">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['doctor'];?>
 - УИН:<?php echo $_smarty_tpl->tpl_vars['doctor']->value['uin'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
        </tr>
            <?php } else { ?>
            <input type="hidden" name="gp" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['doctor_id'];?>
">
        <?php }?>

        </tbody>

    </table><center>
<input type="submit" name="new_patient" value="Добави нов пациент" style="font-size: 14px;">
        <?php if (isset($_smarty_tpl->tpl_vars['notification']->value['show'])) {?>
        <div class="alert-box <?php echo $_smarty_tpl->tpl_vars['notification']->value['alert_type'];?>
"><span> <img src="../images/<?php echo $_smarty_tpl->tpl_vars['notification']->value['alert_type'];?>
.png" width="20" height="20"> <?php echo $_smarty_tpl->tpl_vars['notification']->value['alert_type'];?>
: </span>
            <?php echo $_smarty_tpl->tpl_vars['notification']->value['msg'];?>
. <?php if ($_smarty_tpl->tpl_vars['notification']->value['exist'] == 'true') {?> Можете да го прегледате <a href="./search.php?search=<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
"> ТУК</a> <?php }?></div>
        <?php }?>
        </center>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
