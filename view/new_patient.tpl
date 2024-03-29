{include file="header.tpl"}
{include file="menu.tpl"}
<link rel="stylesheet" type="text/css" href="../css/notifications.css">

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
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

<div class="main">
<p align="center" style="font-size: 24px;">Нов пациент</p>
<form action="./new_patient.php" method="post" autocomplete="off">
    <table border="1" cellspacing="0" align="center">
    <thead style="font-size: 18px; background-color: #34495E; color: white;">
    <th colspan="4">Лични данни</th>
    </thead>
        <tbody style="font-size: 16px;">
    <tr>
        <td>Име:</td>
        <td><input type="text" name="names" required></td>

        <td>ЕГН:</td>
        <td><input type="text" name="idn" required></td>
    </tr>

    <tr>
         <td>Адрес:</td>
         <td><input type="text" name="address"></td>

         <td>E-mail:</td>
         <td><input type="email" name="mail"></td>
    </tr>

    <tr>
        <td>Телефон:</td>
        <td><input type="tel" name="phone"></td>

        <td>Работно Място:</td>
        <td><input type="text" name="work_place"></td>
    </tr>

    <tr>
        <td>Гражданство:</td>
        <td><input type="text" name="citizenship" required></td>

        <td>Пол:</td>
        <td>
            <select name="gender" required>
                <option value="1">Мъж</option>
                <option value="2">Жена</option>
                <option value="3">Не е посочено</option>
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
            <td><input type="text" name="lk_num"></td>

            <td>Издадена:</td>
            <td><input type="date" name="out_date"></td>

        </tr>
        <tr>
            <td>Валидна до:</td>
            <td><input type="date" name="exp_date"></td>

            <td>Издадена от:</td>
            <td><input type="text" name="out_place"></td>

        </tr>
        </tbody>


        <thead style="font-size: 18px;background-color: #34495E; color: white;">

        <th colspan="4">Здравна информация</th>

        </thead>
        <tbody style="font-size: 16px;">

        <tr>
            <td colspan="2" align="right">Здравна книжка №:</td>
            <td colspan="2"><input type="text" name="zdr_knizkha"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Рецептурна книжка №:</td>
            <td colspan="2"><input type="text" name="rec_knizkha"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">ЛАК №:</td>
            <td colspan="2"><input type="text" name="lak_num"></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Кръвна група:</td>
            <td colspan="2">
                <select name="blood_type">
                    <option value="1" >A+</option>
                    <option value="2" >A-</option>
                    <option value="3" >B+</option>
                    <option value="4" >B-</option>
                    <option value="5" >AB+</option>
                    <option value="6" >AB-</option>
                    <option value="7" >0+</option>
                    <option value="8" >0-</option>
                    <option value="false" >Не е посочено</option>
                </select>

            </td>
        </tr>

        {if $lvl >= 3}
        <tr>
            <td colspan="2" align="right">Личен лекар:</td>
            <td colspan="2">
                <select name="gp">
                    {foreach from=$doctors item=doctor}
                    <option value="{$doctor.doctor_id}">{$doctor.doctor} - УИН:{$doctor.uin}</option>
                    {/foreach}
                </select>
            </td>
        </tr>
            {else}
            <input type="hidden" name="gp" value="{$user_info.doctor_id}">
        {/if}

        </tbody>

    </table><center>
<input type="submit" name="new_patient" value="Добави нов пациент" style="font-size: 14px;">
        {if isset($notification.show)}
        <div class="alert-box {$notification.alert_type}"><span> <img src="../images/{$notification.alert_type}.png" width="20" height="20"> {$notification.alert_type}: </span>
            {$notification.msg}. {if $notification.exist == 'true'} Можете да го прегледате <a href="./search.php?search={$idn}"> ТУК</a> {/if}</div>
        {/if}
        </center>
    </form>
</div>
{include file="footer.tpl"}