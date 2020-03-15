<?php
/* Smarty version 3.1.32, created on 2020-01-08 19:12:40
  from '/var/www/html/dkc/view/exam_panel2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e160d889983e4_57893899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45d36bef38de09a8cc470914fff648d183afffc9' => 
    array (
      0 => '/var/www/html/dkc/view/exam_panel2.tpl',
      1 => 1578503559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e160d889983e4_57893899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/dkc/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><style>
    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Fira+Sans:200,400,500);
    * {
        border: 0;
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
    }

    body {
        height: inherit;
        display: flex;
        background: #ccc;
        flex-direction: column;
        font-family: 'Fira Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: #000;
    }

    a {
        color: white;
        text-decoration: none;
    }
    a:hover {
        color: #000;
    }

    div.container {
        display: flex;
        flex: auto;
        flex-direction: column;
        max-height: 100%;
    }

    div.item {
        display: flex;
        flex: auto;
        overflow-y: auto;
        padding: 0rem 1rem 0rem 1rem;
    }

    #timeline {
        position: relative;
        display: table;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5rem;
    }
    #timeline div:after {
        content: '';
        width: 2px;
        position: absolute;
        top: .5rem;
        bottom: 0rem;
        left: 60px;
        z-index: 1;
        background: #3C699E;
    }
    #timeline h3 {
        width: 139px;
        text-align: center;
        border-radius: 5px;
        position: -webkit-sticky;
        position: sticky;
        top: 4rem;
        color: #fff;
        margin-left: -140px;
        background: #153666;
        padding: 10px 20px;
        font-size: 1em;
        font-weight: 500;
    }
    @media (min-width: 92em) {
        #timeline h3 {
            font-size: 1.1em;
        }
    }
    #timeline section.year {
        position: relative;
    }
    #timeline section.year:first-child section {
        margin-top: -2.7em;
        padding-bottom: 0px;
    }
    #timeline section.year section {
        position: relative;
        padding-bottom: 1.25em;
        margin-bottom: 2.2em;
    }
    #timeline section.year section ul > li {
        list-style: none;
    }
    #timeline section.year section h4 {
        position: absolute;
        bottom: 0;
        font-size: .9em;
        font-weight: 400;
        line-height: 1.2em;
        margin: 0;
        padding: 0 0 0 89px;
        color: #3C699E;
    }
    @media (min-width: 62em) {
        #timeline section.year section h4 {
            font-size: 1em;
        }
    }
    #timeline section.year section ul {
        list-style: none;
        padding: 0 0 0 75px;
        margin: -1.35rem 0 1em;
        max-width: 32rem;
        font-size: 1em;
    }
    @media (min-width: 62em) {
        #timeline section.year section ul {
            font-size: 1.1em;
            padding: 0 0 0 81px;
        }
    }
    #timeline section.year section ul:last-child {
        margin-bottom: 0;
    }
    #timeline section.year section ul:first-of-type:after {
        content: '';
        width: 14px;
        height: 14px;
        background: #9753C8;
        border: 4px solid #9753C8;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        position: absolute;
        left: 50px;
        top: -7px;
        z-index: 2;
    }
    #timeline section.year section ul li {
        margin-left: .2rem;
        background-color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        list-style: none !important;
    }
    #timeline section.year section ul li:before {
        content: '·';
        list-style: none;
        margin-left: -.5rem;
        padding-right: .3rem;
        list-style-type: none !important;
    }
    #timeline section.year section ul li:not(:first-child) {
        margin-top: .5rem;
        list-style: none !important;
    }
    #timeline section.year section ul li span.price {
        color: mediumturquoise;
        font-weight: 500;
    }

    #price {
        display: inline;
    }

    svg {
        border: 1px solid white;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    }

</style>
<div class="container">
    <div class="item">
        <div id="timeline">
            <div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exam_list']->value, 'exam');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exam']->value) {
?>
                <section class="year">
                    <h3><?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_time'];?>

                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exam']->value['exams_date'],"%A, %B %e, %Y");?>

                        </h3>
                    <section>
                        <ul>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['exam']->value['exams_status'] == "1") {?>
                                    <img src="../images/over.PNG" width="20" height="20" title="Приключен">
                                <?php } else { ?>
                                    <img src="../images/notover.PNG" width="20" height="20" title="НЕприключен">
                                <?php }?>


                                <?php echo $_smarty_tpl->tpl_vars['exam']->value['pi_names'];?>

                                <?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_idn'];?>

                                <?php echo $_smarty_tpl->tpl_vars['exam']->value['exams_note'];?>

                            </li>
                        </ul>
                    </section>
                </section>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div><?php }
}
