{include file="header.tpl"}
{include file="menu.tpl"}

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


<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#journal').DataTable({

                    "pageLength": 50,
            "scrollCollapse": true,
            "scrollY": "575px",
            "paging": false,
            "bInfo" : false

                }

        );
    });
</script>

<div class="main">
    <a style="font-size: 16px; text-decoration: none;" href="./add_exam.php"

       onclick="window.open('./add_exam.php',
               'newwindow',
               'width=500,height=300');
               return false;"

    ><img src="../images/add.png" width="17" height="17" align="left"> Добави преглед</a>
    <table border="0" id="journal" class="display" >
        <thead>
        <tr  style="background-color: #34495E; color: white; height: 1px; font-size: 15px;">
            <th title="Статус">С</th>
            <th>Час</th>
            <th>Дата</th>
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Бележка</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody style="background-color: #34495E; color: black; height: 1px; font-size: 15px;">
        {foreach from=$exam_list item=exam}
        <tr align="center">
            <td>
                {if $exam.exams_status == "1"}
                    <img src="../images/over.PNG" width="20" height="20" title="Приключен">
                {else}
                    <img src="../images/notover.PNG" width="20" height="20" title="НЕприключен">
                {/if}
            </td>
            <td>{$exam.exams_time}</td>
            <td>{$exam.exams_date}</td>
            <td>{$exam.pi_names}</td>
            <td>{$exam.exams_idn}</td>
            <td>{$exam.exams_note}</td>
            <td>
                <a href="./edit_exam.php?exam_id={$exam.exams_id}"
                   onclick="window.open('./edit_exam.php?exam_id={$exam.exams_id}',
                           'newwindow',
                           'width=500,height=300');
                           return false;"
                ><img src="../images/edit.png" width="20" height="20"></a>
                <img src="../images/delete.png" width="20" height="20">
            </td>
        </tr>
        {/foreach}
        </tbody>
    </table>


</div>
{include file="footer.tpl"}