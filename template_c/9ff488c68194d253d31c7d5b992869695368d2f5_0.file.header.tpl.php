<?php
/* Smarty version 3.1.32, created on 2020-02-13 17:32:52
  from 'C:\xampp\htdocs\dkc\view\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e457a346d8408_88400370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff488c68194d253d31c7d5b992869695368d2f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dkc\\view\\header.tpl',
      1 => 1581611126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e457a346d8408_88400370 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/notifications.css">
    <!--Datatables start-->
    <link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <!--Datatables end-->
    <style>
        input {
            outline: none;
        }
        input[type=search] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            font-family: inherit;
            font-size: 100%;
        }
        input::-webkit-search-decoration,
        input::-webkit-search-cancel-button {
            display: none;
        }


        input[type=search] {
            background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
            border: solid 1px #ccc;
            padding: 9px 10px 9px 32px;
            width: 55px;

            -webkit-border-radius: 10em;
            -moz-border-radius: 10em;
            border-radius: 10em;

            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
        }
        input[type=search]:focus {
            width: 130px;
            background-color: #fff;
            border-color: #66CC75;

            -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
            -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
            box-shadow: 0 0 5px rgba(109,207,246,.5);
        }


        input:-moz-placeholder {
            color: #999;
        }
        input::-webkit-input-placeholder {
            color: #999;
        }

        /* Demo 2 */
        #demo-2 input[type=search] {
            width: 15px;
            height: 10px;
            padding-left: 10px;
            color: transparent;
            cursor: pointer;

        }
        #demo-2 input[type=search]:hover {
            background-color: #fff;
        }
        #demo-2 input[type=search]:focus {
            width: 130px;
            padding-left: 32px;
            color: #000;
            background-color: #fff;
            cursor: auto;
        }
        #demo-2 input:-moz-placeholder {
            color: transparent;
        }
        #demo-2 input::-webkit-input-placeholder {
            color: transparent;
        }
        body {
            font-family: "Lato", sans-serif;
            background-color: #dfe5ed;
        }
        .sidenav {
            height: 100%;
            width: 175px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #34495E;
            overflow-x: hidden;
            padding-top: 10px;

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
            margin-left: 175px; /* Same as the width of the sidenav */
            margin-top: 0px;
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 0px 0px;
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
