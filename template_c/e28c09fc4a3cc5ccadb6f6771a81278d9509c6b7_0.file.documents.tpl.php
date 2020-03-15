<?php
/* Smarty version 3.1.32, created on 2020-03-15 18:36:23
  from '/var/www/html/dkc/view/documents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e6e59873ceed4_46090788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e28c09fc4a3cc5ccadb6f6771a81278d9509c6b7' => 
    array (
      0 => '/var/www/html/dkc/view/documents.tpl',
      1 => 1584290182,
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
function content_5e6e59873ceed4_46090788 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#journal').DataTable({

                    "pageLength": 50

                }

        );
    });
<?php echo '</script'; ?>
>

<div class="main">

    
    <!--
    <table border="0" id="journal" class="display" >
        <thead>
        <tr  style="background-color: #122b40; color: white; ">
            <th>Pat</th>
        </tr>
        </thead>
        <tbody>
        <tr><td>aa</td></tr>
        </tbody>
        </table>
-->

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
