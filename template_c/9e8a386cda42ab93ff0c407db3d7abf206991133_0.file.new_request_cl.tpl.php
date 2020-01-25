<?php
/* Smarty version 3.1.32, created on 2020-01-25 21:19:18
  from '/var/www/html/dkc/view/new_request_cl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2c94b6bd0a81_24405121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e8a386cda42ab93ff0c407db3d7abf206991133' => 
    array (
      0 => '/var/www/html/dkc/view/new_request_cl.tpl',
      1 => 1579979957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2c94b6bd0a81_24405121 (Smarty_Internal_Template $_smarty_tpl) {
?><DOCTYPE html>
    <html>

    <head>
        <meta name="vieport" content="width=device-width, initial-scale=1.0">

        <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
        <title>DraganovLab</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../js/jj.js"><?php echo '</script'; ?>
>
        <style type="text/css" media="all">
            @import "../css/style.css";
        </style>

        <link href="../css/ui-choose.css" rel="stylesheet">

        <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">




    </head>

    <body bgcolor="#34495E" style="color: white;">
    <center>
<!--Datatables js-->

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
                    ],
                    "scrollY": "375px",
                    "scrollX": "100px",
                    "scrollCollapse": true,
                    "paging": false,

                }

        );
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Моля, попълнете името на пациента");
            return false;
        }
    }
<?php echo '</script'; ?>
>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>



    @media only screen and (max-width: 900px) {
        #t{
            display:block;
        }
        table{
            width: 100%;
        }

        td{
            width: 100%;
        }

    }


    #parent #popup {
        display: none;
    }

    #parent:hover #popup {
        display: block;
    }

    #submit-icon {
        background-image: url("../images/plus.jpg");
        /* Change url to wanted image */
        background-size: cover;
        border: none;
        width: 42px;
        height: 42px;
        cursor: pointer;
        color: transparent;
    }
</style>
    <?php echo '<script'; ?>
>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
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

                    <form autocomplete="off" method="POST" action='./new_request_cl.php' name='newp'>
                            ID:
                            <input required type="number" name="num" style="width: 60px;" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['paid'];?>
:
                            <input type="checkbox" name="pay"> | <b style="color: red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cito'];?>
</b>
                            <input type="checkbox" name="cito">
                            </br>
                            </br>


                            <input value="<?php echo $_smarty_tpl->tpl_vars['patient']->value;?>
"  required type="text" name="names" style="width: 220px; text-transform: capitalize;">
                            <input value="<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
" type="text" name='idn' size="7" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['idn'];?>
" required>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['doctorr']->value;?>
"  list="hosting-plan" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['doctor'];?>
" type="text" size="14"  name='doctor'>

                            <br>
                            <b style="color: red"><?php echo $_smarty_tpl->tpl_vars['not_valid_idn']->value;?>
</b>
                            <br> <select required id="aioConceptName" name="tests[]" class="ui-choose" multiple="multiple" id="uc_04">
                                <option value="01.01" style="list-style: none;">CBC</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['test']->value['code'];?>
" style="list-style: none;"><?php echo $_smarty_tpl->tpl_vars['test']->value['button'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <option value="01.09" style="list-style: none;">Urine-Sediment</option>
                                <option value="01.08" style="list-style: none;">Urine-Chemical</option>
                                <option value="15.00" style="list-style: none;">Na, K, Cl</option>
                                <option value="66.00" style="list-style: none;">BGA</option>
                                <option value="01.40" style="list-style: none;">WBC count</option>
                                <option value="62.00" style="list-style: none;">AGP<!--ambulatory glucose profile--></option>
                            </select>

                            <?php echo '<script'; ?>
 src="../js/ui-choose.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
>
                                $('.ui-choose').ui_choose();
                            <?php echo '</script'; ?>
><br><br>
                            <table align="center" border="1" style="border-collapse: collapse; padding: 5px; width: 100px" cellspacing="0">
                                <th style="background-color: #ffbd28;">
                                    <div class="tooltip"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comment'];?>

                                        <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                                    </div>
                                </th>
                                <th style="background-color: #ffbd28;">
                                    <div class="tooltip"><?php echo $_smarty_tpl->tpl_vars['lang']->value['note'];?>

                                        <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                                    </div>
                                </th>
                                <tr>
                                    <td>
                                        <textarea style="background-color: #ffedc4; resize: none;" name="comment" ><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['comment'];?>
</textarea>
                                    </td>
                                    <td>
                                        <textarea style="background-color: #ffedc4; resize: none;" name="note"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['note'];?>
</textarea>
                                    </td>
                                </tr>
                            </table>
                            </br>
                            </br>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
:
                            <input required type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" style="width: 135px">
                            | &nbsp&nbsp
                            <input type="submit" name="record" style="border: none; background-color: #ff9b30;color:#472b00; width: 80px;height: 25px; font-weight: bold; font-size: 14px" value="&#10133; <?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
">&nbsp&nbsp |
                            <a href="../controller/print.php?id=<?php echo $_smarty_tpl->tpl_vars['patient_id']->value;?>
" target="_blank" style="text-decoration: none;">
                                <img src="../images/print.png" width="24" height="24"><b style="font-size: 13px; color: white;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['print'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['request'];?>
</b></a>
                    </form>
</body></html><?php }
}
