<?php
/* Smarty version 3.1.32, created on 2020-01-05 08:03:23
  from '/var/www/html/dkc/view/exams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e117c2b50eb86_57624896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4c2567c1983adbba93df4cd66fd33adb7fa3576' => 
    array (
      0 => '/var/www/html/dkc/view/exams.tpl',
      1 => 1578204202,
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
function content_5e117c2b50eb86_57624896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>

        /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>


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
            "scrollCollapse": true,
            "scrollY": "575px",
            "paging": false

                }

        );
    });
<?php echo '</script'; ?>
>

<div class="main">
    <button id="myBtn"><img src="../images/add.png" width="17" height="17" align="left"> Добави</button>
    <table border="0" id="journal" class="display" >
        <thead>
        <tr  style="background-color: #34495E; color: white; height: 1px; font-size: 15px;">
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Час</th>
            <th>Бележка</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody style="background-color: #34495E; color: black; height: 1px; font-size: 15px;">
        <tr align="center">
            <td>Драган Драганов</td>
            <td>9308253229</td>
            <td>13:20ч.</td>
            <td>Диабетик</td>
            <td>
                <img src="../images/delete.png" width="20" height="20">
            </td>
        </tr>
        </tbody>
    </table>


    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>
    <?php echo '<script'; ?>
>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    <?php echo '</script'; ?>
>
    <!-- The Modal -->

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
