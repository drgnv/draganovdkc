{include file="header.tpl"}
{include file="menu.tpl"}
<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script src="../js/tinymce.min.js" referrerpolicy="origin"></script>
<style>
    input[type=submit] {
        width: 15%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
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
        <div align="center" style="font-size: 16px;">
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
        </div>
        <form action="./search.php?search={$patient_info.pi_patient_idn}" method="post" autocomplete="on">
            <table border="1" cellspacing="0" align="center">
                <thead style="font-size: 18px; background-color: #34495E; color: white;">
                <th colspan="4">Лични данни</th>
                </thead>
                <tbody style="font-size: 16px;">
                <tr>
                    <td>Име:</td>
                    <td><input type="text" name="names" value="{$patient_info.pi_names}" required></td>

                    <td>ЕГН:</td>
                    <td><input type="text" name="idn" value="{$patient_info.pi_patient_idn}" required></td>
                </tr>

                <tr>
                    <td>Адрес:</td>
                    <td><input type="text" name="address" value="{$patient_info.pi_address}"></td>

                    <td>E-mail:</td>
                    <td><input type="mail" name="mail" value="{$patient_info.pi_mail}"></td>
                </tr>

                <tr>
                    <td>Телефон:</td>
                    <td><input type="tel" name="phone" value="{$patient_info.pi_phone}"></td>

                    <td>Работно Място:</td>
                    <td><input type="text" name="work_place" value="{$patient_info.pi_workplace}"></td>
                </tr>

                <tr>
                    <td>Гражданство:</td>
                    <td><input type="text" name="citizenship" value="{$patient_info.citizenship}" required></td>

                    <td>Пол:</td>
                    <td>
                        <select name="gender">
                            <option value="1" {if $patient_info.pi_gender == '1'}selected{else}{/if}>Мъж</option>
                            <option value="2" {if $patient_info.pi_gender == '2'}selected{else}{/if}>Жена</option>
                            <option value="3" {if $patient_info.pi_gender == '3'}selected{else}{/if}>Не е посочено</option>
                        </select>
                    </td>
                </tr>
                </tbody>

                <thead style="font-size: 18px;background-color: #34495E; color: white;">
                <th colspan="4">Лична карта</th>
                </thead>
                <tbody style="font-size: 16px;">
                <tr>
                    <td>ЛК №</td>
                    <td><input type="text" name="lk_num" value="{$patient_info.pi_lk_num}"></td>

                    <td>Издадена:</td>
                    <td><input type="date" name="out_date" value="{$patient_info.pi_out_date}"></td>

                </tr>
                <tr>
                    <td>Валидна до:</td>
                    <td><input type="date" name="exp_date" value="{$patient_info.pi_exp_date}"></td>

                    <td>Издадена от:</td>
                    <td><input type="text" name="outplace" value="{$patient_info.pi_out_place}"></td>

                </tr>
                </tbody>


                <thead style="font-size: 18px;background-color: #34495E; color: white;">

                <th colspan="4">Здравна информация</th>

                </thead>
                <tbody style="font-size: 16px;">

                <tr>
                    <td colspan="2" align="right">Здравна книжка №:</td>
                    <td colspan="2"><input type="text" name="zdr_knizkha_num" value="{$patient_info.zdr_knizkha_num}"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Рецептурна книжка №:</td>
                    <td colspan="2"><input type="text" name="rec_knizkha_num" value="{$patient_info.rec_knizkha_num}"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">ЛАК №:</td>
                    <td colspan="2"><input type="text" name="lak_num" type="text" value="{$patient_info.lak_num}"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Кръвна група:</td>
                    <td colspan="2">
                        <select name="blood_type">
                            <option value="1" {if $patient_info.pi_blood_type == '1'}selected{else}{/if}>A+</option>
                            <option value="2" {if $patient_info.pi_blood_type == '2'}selected{else}{/if}>A-</option>
                            <option value="3" {if $patient_info.pi_blood_type == '3'}selected{else}{/if}>B+</option>
                            <option value="4" {if $patient_info.pi_blood_type == '4'}selected{else}{/if}>B-</option>
                            <option value="5" {if $patient_info.pi_blood_type == '5'}selected{else}{/if}>AB+</option>
                            <option value="6" {if $patient_info.pi_blood_type == '6'}selected{else}{/if}>AB-</option>
                            <option value="7" {if $patient_info.pi_blood_type == '7'}selected{else}{/if}>0+</option>
                            <option value="8" {if $patient_info.pi_blood_type == '8'}selected{else}{/if}>0-</option>
                            <option value="false" {if $patient_info.pi_blood_type == 'false'}selected{else}{/if}>Не е посочено</option>
                        </select>

                    </td>
                </tr>
                {if $lvl >= 3}
                    <tr>
                        <td colspan="2" align="right">Личен лекар:</td>
                        <td colspan="2">
                            <select name="gp">
                                {foreach from=$doctors item=doctor}
                                    <option value="{$doctor.doctor_id}" {if $patient_info.pi_gp == $doctor.doctor_id} selected {/if}>{$doctor.doctor} - УИН:{$doctor.uin}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                {else}
                    <input type="hidden" name="gp" value="{$user_info.doctor_id}">
                {/if}
                </tbody>

            </table><center>
                <input type="submit" name="save" value="Добави нов пациент" style="font-size: 14px;">
                {if isset($notification.show)}
                    <div class="alert-box {$notification.alert_type}"><span> <img src="../images/{$notification.alert_type}.png" width="20" height="20"> {$notification.alert_type}: </span>
                        {$notification.msg}. {if $notification.exist == 'true'} Можете да го прегледате <a href="./search.php?search={$idn}"> ТУК</a> {/if}</div>
                {/if}
            </center>
        </form>
        {/if}


</div>



{include file="footer.tpl"}