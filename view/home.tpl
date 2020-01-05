{include file="header.tpl"}
{include file="menu.tpl"}

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#journal').DataTable({

                    "pageLength": 50

                }

        );
    });
</script>

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
{include file="footer.tpl"}