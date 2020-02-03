{include file="header.tpl"}
{include file="menu.tpl"}
<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script src="../js/tinymce.min.js" referrerpolicy="origin"></script>
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
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
    tinymce.init({
        selector: '#mytextarea2'
    });
    tinymce.init({
        selector: '#mytextarea3'
    });
</script>
<div class="main">

    {if $type == 'idn'}<p style="font-size: 16px;">
        <a href="./new_request_cl.php" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./new_request_cl.php?patient_names={$patient_info.pi_names}&patient_idn={$patient_info.pi_patient_idn}&doctor={$doctor}',
               'newwindow',
               'width=700,height=500');
               return false;"

        >+Заявка клинична лаборатория</a> |
        <a href="" style="text-decoration: none; color: #394c70;">+Заявка микробиология</a> |
        <a href="./add_exam.php?idn={$patient_info.pi_patient_idn}&find_patient=Намери"
           style="text-decoration: none; color: #394c70;"

           onclick="window.open('./add_exam.php?idn={$patient_info.pi_patient_idn}&find_patient=Намери',
                   'newwindow',
                   'width=700,height=500');
                   return false;"

        >Нов преглед</a> |
        <a href="./personal_medical_history.php?idn={$patient_info.pi_patient_idn}" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./personal_medical_history.php?idn={$patient_info.pi_patient_idn}',
                   'newwindow',
                   'width=1300,height=650');
                   return false;"

        >Лична анамнеза</a> |
        <a href="./fam_medical_history.php?idn={$patient_info.pi_patient_idn}" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./fam_medical_history.php?idn={$patient_info.pi_patient_idn}',
                   'newwindow',
                   'width=1300,height=650');
                   return false;"

        >Фамилна анамнеза</a> |
        <a href="./alergies.php?idn={$patient_info.pi_patient_idn}" style="text-decoration: none; color: #394c70;"

           onclick="window.open('./alergies.php?idn={$patient_info.pi_patient_idn}',
                   'newwindow',
                   'width=1300,height=650');
                   return false;"

        >Алергии</a>
        </p>
        <form action="./search.php?search={$patient_info.pi_patient_idn}" method="post">
<table border="0"><tr><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична информация</td>
            </tr>
            <tr>
                <td align="right">Пациент: </td>
                <td><input type="text" name="names" value="{$patient_info.pi_names}"></td>
            </tr>
            <tr>
                <td align="right">ЕГН: </td>
                <td><input type="text" name="idn" value="{$patient_info.pi_patient_idn}"></td>
            </tr>

            <tr>
                <td align="right">Адрес: </td>
                <td><input type="text" name="address" value="{$patient_info.pi_address}"></td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td><input type="mail" name="mail" value="{$patient_info.pi_mail}"></td>
            </tr>
            <tr>
                <td align="right">Телефон: </td>
                <td><input type="text" name="phone" value="{$patient_info.pi_phone}"></td>
            </tr>
            <tr>
                <td align="right">Работно място:</td>
                <td><input type="text" name="work_place" value="{$patient_info.pi_workplace}"></td>
            </tr>
            <tr>
                <td align="right">Гражданство: </td>
                <td><input type="text" name="citizenship" value="{$patient_info.citizenship}"></td>
            </tr>
            <tr>
                <td align="right">Пол: </td>
                <td>
                    <select name="gender">
                        <option value="1" {if $patient_info.pi_gender == '1'}selected{else}{/if}>Мъж</option>
                        <option value="2" {if $patient_info.pi_gender == '2'}selected{else}{/if}>Жена</option>
                        <option value="3" {if $patient_info.pi_gender == '3'}selected{else}{/if}>Не е посочено</option>
                    </select>
                </td>
            </tr>
            </table>
</td><td>
        <table border="1" cellspacing="0" style="font-size: 16px;">
            <tr>
                <td colspan="2" style="background-color: #394c70;color: white;" align="center">Лична карта</td>
            </tr>

            <tr>
            <td>ЛК № </td>
                <td><input name="lk_num" type="text" value="{$patient_info.pi_lk_num}"></td>
            </tr>
            <tr>
            <td>Издадена: </td>
            <td><input type="date" name="out_date" value="{$patient_info.pi_out_date}"></td>
            </tr>
            <tr>
                <td>Валидна до: </td>
                <td>
                   <input name="exp_date" type="date" value="{$patient_info.pi_exp_date}">
                </td>
            </tr>
            <tr>
                <td>Издадена от: </td>
                <td><input name="outplace" type="text" value="{$patient_info.pi_out_place}"></td>
            </tr>

        </table>
        </td></tr>
        <tr>
            <td colspan="2">
<table border="1" cellspacing="0">
    <thead>
    <th colspan="2" style="background-color: #394c70;color: white; font-size: 16px" align="center">Здравна информация</th>
    </thead>
    <tbody>
    <tr>
        <td style="font-size: 14px" align="right">Здравна книжка №</td>
        <td><input type="text" value="{$patient_info.zdr_knizkha_num}" name="zdr_knizkha_num"></td>
    </tr>
    <tr>
        <td align="right" style="font-size: 14px">Рецептурна книжка №</td>
        <td><input type="text" value="{$patient_info.rec_knizkha_num}" name="rec_knizkha_num"></td>
    </tr>
    <tr>
        <td align="right" style="font-size: 14px">ЛАК №</td>
        <td><input type="text" value="{$patient_info.lak_num}" name="lak_num"></td>
    </tr>
    </tbody>
</table>
            </td>
        </tr>


</table>
            <input type="submit" name="save" value="Запиши">
            </form>
        {/if}


</div>



{include file="footer.tpl"}