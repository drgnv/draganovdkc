{include file="header.tpl"}
{include file="menu.tpl"}
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


    <table id="journal" class="hover compact" >
        <thead>
        <tr  style="background-color: #34495E; color: white; height: 1px; font-size: 15px;">
            <th title="Статус">С</th>
            <th>T</th>
            <th>ID</th>
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody style="background-color: #34495E; color: black; height: 1px; font-size: 15px;">
        {foreach from=$daylist item=patient}
            <tr>
                <td>{if $patient.over == "on"}
                        <i style="visibility: hidden;">1</i><img src="../images/over.PNG" width="20" height="20" title="Приключен">
                    {else}
                        <i style="visibility: hidden;">0</i><img src="../images/notover.PNG" width="20" height="20" title="НЕприключен">
                    {/if}</td>
                <td>

                    {if {$patient.pay} == "on"}

                        <b hidden="true">a</b> <img src="../images/dollar-symbol.png" width="25" height="25"> {/if}
                    {if {$patient.pay} !== "on"} <b hidden="true">b</b>
                        <img src="../images/NZOK.png" width="25" height="25"> {/if}

                </td>
                <td>{$patient.number}</td>
                <td>{$patient.names}</td>
                <td>{$patient.idn}</td>
                <td>
                    <a href="./new_request_cl.php?names={$patient.names}&idn={$patient.idn}&doctor={$patient.doctor_id}"
                       style="text-decoration: none;"
                       onclick="window.open('./new_request_cl.php?names={$patient.names}&idn={$patient.idn}&doctor={$patient.doctor_id}',
                               'newwindow',
                               'width=900,height=600');
                               return false;">
                        <img src="../images/add.png" width="20" height="20">
                    </a>
                    <a href="./edit.php?id={$patient.id}"
                       onclick="window.open('./edit.php?id={$patient.id}',
                               'newwindow',
                               'width=900,height=600');
                               return false;"
                    ><img src="../images/edit.png" width="20" height="20"></a>
                    <a href="./old_results.php?idn={$patient.idn}">
                        <img src="../images/archive.png" width="20" height="20">
                    </a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>



</div>
{include file="footer.tpl"}