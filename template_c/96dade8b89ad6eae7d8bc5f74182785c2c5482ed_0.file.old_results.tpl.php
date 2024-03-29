<?php
/* Smarty version 3.1.32, created on 2020-01-26 12:04:02
  from '/var/www/html/dkc/view/old_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2d6412bb7af6_86042551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96dade8b89ad6eae7d8bc5f74182785c2c5482ed' => 
    array (
      0 => '/var/www/html/dkc/view/old_results.tpl',
      1 => 1580033042,
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
function content_5e2d6412bb7af6_86042551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/dkc/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Datatables js-->
    <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#journal').DataTable({
            "pageLength": 50,
            "order": [
                [3, "desc"]
            ],
            "aLengthMenu": [
                [10, 25, 50, 75, -1],
                [10, 25, 50, 75, "Всички"]
            ]
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
<?php echo '</script'; ?>
>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>
    input[type=text]:focus {
        background-color: #fff3bf;
        box-shadow: #33FF33;
    }
</style>
<div class="content" style="background-color: #34495E;color:white;">
    <?php echo '<script'; ?>
>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    <?php echo '</script'; ?>
>
    <link href="../css/scroll-table.css" rel="stylesheet">
    <div class="main" style="font-size: 14px">

        <?php echo '<script'; ?>
>
            document.addEventListener("touchstart", function() {}, true)
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function insertText(elemID, text) {
                var elem = document.getElementById(elemID);
                elem.innerHTML += text;
            }

            function validate(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        <?php echo '</script'; ?>
>

        <table border="0" cellspacing="0" cellpadding="0" width="100%" style=" border-collapse: collapse;">
            <tr>
                <td valign="top" width="20%">
                    <div class="newp" style="width: 220px">
                        <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['old_results'];?>
</h3>
                        <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['patient'];?>
: </b><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>

                        <div id="table-wrapper">
                            <div >
                                <table id="journa122" class="lp" width="4350">
                                    <thead>

                                        <th style="display:none;">егн</th>
                                        <th style="display:none;">id</th>
                                        <th title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
">С</th>
                                        <th title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['type'];?>
">T</th>
                                        <th>ID</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</th>

                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('un', "1");?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>

                                        <tr align="center" style="background-color: white; cursor: pointer;" data-href="../controller/old_results.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
&idn=<?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
">
                                            <td>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "on") {?>

                                                <b hidden="true">a</b> <img src="../images/over.PNG" width="20" height="20"> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['over'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 !== "on") {?> <b hidden="true">b</b>
                                                <img src="../images/notover.PNG" width="20" height="20"> <?php }?>
                                            </td>
                                            <td>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "on") {?>

                                                    <b hidden="true">a</b> <img src="../images/dollar-symbol.png" width="20" height="20"> <?php }?>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 !== "on") {?> <b hidden="true">b</b>
                                                    <img src="../images/NZOK.png" width="20" height="20"> <?php }?>
                                            </td>
                                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['idn'];?>
</td>
                                            <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
</td>
                                            <td style="color: black;" onclick="window.location='#';"><?php echo $_smarty_tpl->tpl_vars['result']->value['number'];?>
</td>
                                            <td style="color: black;" onclick="window.location='#';">
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == "on") {?>
                                                <b hidden="true">a</b> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['pay'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 !== "on") {?> <b hidden="true">b</b> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == "on") {?><b style="color: red;">
                                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable8 = ob_get_clean();
if (strlen($_prefixVariable8) > 1) {?>   <div class="tooltip">
                                                       <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['date'],"%d.%m.%Y");?>

                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable9 = ob_get_clean();
if (strlen($_prefixVariable9) > 1) {?>
                                                            <span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span>
                                                        <?php }?>
                                                        </div><?php }?>
                                                    </b><?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['cito'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 !== "on") {?>
                                                <div class="tooltip">
                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['date'],"%d.%m.%Y");
ob_start();
echo $_smarty_tpl->tpl_vars['result']->value['comment'];
$_prefixVariable11 = ob_get_clean();
if (strlen($_prefixVariable11) > 1) {?><span class="tooltiptext"><?php echo $_smarty_tpl->tpl_vars['result']->value['comment'];?>
</span><?php }?>
                                                </div>
                                                <?php }?>
                                            </td>

                                        </tr>
                                        <b style="visibility: hidden;"> <?php echo $_smarty_tpl->tpl_vars['un']->value++;?>
</b> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
                <td valign="top" width="80%">

                    <div class="lp">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];
$_prefixVariable12 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];
$_prefixVariable13 = ob_get_clean();
if (isset($_prefixVariable12) && $_prefixVariable13 > 0) {?>
                               <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                       <a style="text-decoration: none; color: white;" href="../controller/print.php?id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/reqgreen.png" width="20" height="20" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['print'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['request'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['names'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['request'];?>

                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/resultbyid.php?id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/results.png" width="20" height="20" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['print'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['results'];?>
 <?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['names'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['results'];?>

                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/onlineresults.php?id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" target="_blank">
                            <img src="../images/online.png" width="20" height="20" title="Онлайн достъп на <?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['names'];?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['online_cart'];?>

                        </a> |
                        <a style="text-decoration: none; color: white;" href="../controller/laboratory.php?delete=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
" alt="Изтриване" onclick="return confirm('Сигурен ли сте, че искате да изтриете пациент: <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
?')" title="Изтрий <?php echo $_smarty_tpl->tpl_vars['result']->value['names'];?>
">
                            <img src="../images/delete.png" width="20" height="20" alt="Изтриване"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>

                        </a>
                        <!-- НАЧАЛО НА МЕНЮ ПАЦИЕНТИ-->
                        <table>
                            <tr>
                                <td>
                                    <form autocomplete="off" action="../controller/old_results.php?patient_id=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['patient_id'];?>
&idn=<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['idn'];?>
" method="POST" id="form1">
                                        <table class="gridexample" border="1" style="border-collapse: collapse;" cellspacing="0">
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tests'];?>
</th>
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['results'];?>
</th>
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['unit'];?>
</th>
                                            <th style="background-color: #1b6d85; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['referent_norms'];?>
</th>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'result', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['result']->value) {
?>
                                            <tr style="background-color: #c6dcff;">
                                                <td style="color: #0c1130;"><?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['name'];?>
 </td>
                                                <td >
                                                    <input readonly type="text" name="<?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['test_code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['result'];?>
">
                                                </td>
                                                <td style="color: #0c1130;"><?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['unit'];?>
</td>
                                                <td style="color: #0c1130;"><?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['up'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data2']->value[$_smarty_tpl->tpl_vars['k']->value]['down'];?>
</td>
                                            </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                </td>
                </td>
                <td valign="top">
                    <table>
                        <tr>
                            <td style="color: white;">ID </td>
                            <td>
                                <input required type="text" name="number" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['number'];?>
" size="1" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['patient'];?>
:</td>
                            <td>
                                <input required type="text" name="patient" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['names'];?>
" size="26" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['idn'];?>
:</td>
                            <td>
                                <input type="text" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['idn'];?>
" size="9" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: white;"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
:</td>
                            <td style="color: white;"><?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['doctor'];?>

                               </td>
                        </tr>
                        <tr>
                            <td style="color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
:</td>
                            <td>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data2']->value[0]['date'],"%d.%m.%Y");?>

                            </td>
                        </tr>
                        <tr>
                            <td> <b style="color:red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cito'];?>
:</b></td>
                            <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['cito'];
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 == "on") {?>
                                <input type="checkbox" name="cito" checked> <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['cito'];
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15 !== "on") {?>
                                <input type="checkbox" name="cito"> <?php }?><b style="color:white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
:</b>
                                <select name="over">
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['over'];
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16 == "on") {?>
                                    <option value="on" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                    <option value="off"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                    <?php }?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['data2']->value[0]['over'];
$_prefixVariable17 = ob_get_clean();
if ($_prefixVariable17 !== "on") {?>
                                    <option value="on"><?php echo $_smarty_tpl->tpl_vars['lang']->value['over'];?>
</option>
                                    <option value="off" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_over'];?>
</option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table border="1" style="border-collapse: collapse;" cellspacing="0">
                        <th style="background-color: #ffbd28;">
                            <div class="tooltip" style="color: #0c1130;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comment'];?>

                                <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                            </div>
                        </th>
                        <th style="background-color: #ffbd28;">
                            <div class="tooltip" style="color: #0c1130;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['note'];?>

                                <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                            </div>
                        </th>
                        <tr>
                            <td>
                                <textarea style="background-color: #ffedc4; resize: none;" name="comment" ><?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['comment'];?>
</textarea>
                            </td>
                            <td>
                                <textarea style="background-color: #ffedc4; resize: none;" name="note"><?php echo $_smarty_tpl->tpl_vars['data2']->value[0]['note'];?>
</textarea>
                            </td>
                        </tr>
                    </table>
                </td>
                </tr>
                </table>
                <p style="background-color: green; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</p>
                <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['save_btn'];?>
">
                </form>
                <?php } else { ?>
                <p>
                    ⇦Изберете заявка от панела в ляво за да заредите информацията за нея.
                </p>
                <?php }?>
        </table>
        <?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../js/jquery.formnavigation.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function() {
                $('.gridexample').formNavigation();
            });
        <?php echo '</script'; ?>
>
        </div>
        <?php echo '<script'; ?>
>
            $('tr[data-href]').on("click", function() {
                document.location = $(this).data('href');
            });
        <?php echo '</script'; ?>
>

    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
