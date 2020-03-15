<?php
/* Smarty version 3.1.32, created on 2020-01-05 08:12:08
  from '/var/www/html/dkc/view/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e117e38770aa4_14656620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1b410ab563c2df4b3d2c57b2ad0e16842fa17ff' => 
    array (
      0 => '/var/www/html/dkc/view/home.tpl',
      1 => 1578200768,
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
function content_5e117e38770aa4_14656620 (Smarty_Internal_Template $_smarty_tpl) {
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


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
