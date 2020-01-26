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

    {if $type == 'idn'}
<table border="0"><tr><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична информация</td>
            </tr>
            <tr>
                <td align="right">Пациент: </td>
                <td>{$patient_info.pi_names}</td>
            </tr>
            <tr>
                <td align="right">ЕГН: </td>
                <td>{$patient_info.pi_patient_idn}</td>
            </tr>

            <tr>
                <td align="right">Адрес: </td>
                <td>{$patient_info.pi_address}</td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td>{$patient_info.pi_mail}</td>
            </tr>
            <tr>
                <td align="right">Телефон: </td>
                <td>{$patient_info.pi_phone}</td>
            </tr>
            <tr>
                <td align="right">Работно място:</td>
                <td>{$patient_info.pi_workplace}</td>
            </tr>
            <tr>
                <td align="right">Гражданство: </td>
                <td>{$patient_info.citizenship}</td>
            </tr>
            </table>
</td><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична карта</td>
            </tr>

            <tr>
            <td>ЛК № </td>
                <td>{$patient_info.pi_lk_num}</td>
            </tr>
            <tr>
            <td>Издадена: </td>
            <td>{$patient_info.pi_out_date|date_format:"%D"}</td>
            </tr>
            <tr>
                <td>Валидна до: </td>
                <td>
                    {$patient_info.pi_exp_date|date_format:"%D"}
                </td>
            </tr>
            <tr>
                <td>Издадена от: </td>
                <td>{$patient_info.pi_out_place}</td>
            </tr>

        </table>
        </td></tr></table>
        {/if}


</div>
{include file="footer.tpl"}