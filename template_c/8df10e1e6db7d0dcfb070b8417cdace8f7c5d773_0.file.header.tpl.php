<?php
/* Smarty version 3.1.32, created on 2020-01-04 22:28:35
  from '/var/www/html/dkc/view/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e10f5734fdc92_93662183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df10e1e6db7d0dcfb070b8417cdace8f7c5d773' => 
    array (
      0 => '/var/www/html/dkc/view/header.tpl',
      1 => 1578169597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10f5734fdc92_93662183 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Datatables start-->
    <link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <!--Datatables end-->

    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        .sidenav {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #34495E;
            overflow-x: hidden;
            padding-top: 20px;

        }
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
        }
        .sidenav a:hover {
            color: cornflowerblue;
            background-color: white;
            color: #34495E;
        }
        .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        .showme {
            display: none;

        }

        .showhim:hover .showme {
            display: block;
        }
    </style>
   </head>
<body><?php }
}
