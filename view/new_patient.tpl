{include file="header.tpl"}
{include file="menu.tpl"}

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
<form action="./new_patient.php" method="post">
    <table border="1" cellspacing="0" align="center">
    <thead style="font-size: 18px; background-color: #34495E; color: white;">
    <th colspan="4">Лични данни</th>
    </thead>
        <tbody style="font-size: 16px;">
    <tr>
        <td>Име:</td>
        <td><input type="text" name=""></td>

        <td>ЕГН:</td>
        <td><input type="text" name=""></td>
    </tr>

    <tr>
         <td>Адрес:</td>
         <td><input type="text" name=""></td>

         <td>E-mail:</td>
         <td><input type="text" name=""></td>
    </tr>

    <tr>
        <td>Телефон:</td>
        <td><input type="text" name=""></td>

        <td>Работно Място:</td>
        <td><input type="text" name=""></td>
    </tr>

    <tr>
        <td>Гражданство:</td>
        <td><input type="text" name=""></td>

        <td>Пол:</td>
        <td><input type="text" name=""></td>
    </tr>
        </tbody>

        <thead style="font-size: 18px;background-color: #34495E; color: white;">
        <th colspan="4">Лична карта</th>
        </thead>
        <tbody style="font-size: 16px;">
        <tr>
            <td>ЛК №</td>
            <td><input type="text" name=""></td>

            <td>Издадена:</td>
            <td><input type="date" name=""></td>

        </tr>
        <tr>
            <td>Валидна до:</td>
            <td><input type="date" name=""></td>

            <td>Издадена от:</td>
            <td><input type="text" name=""></td>

        </tr>
        </tbody>


        <thead style="font-size: 18px;background-color: #34495E; color: white;">

        <th colspan="4">Здравна информация</th>

        </thead>
        <tbody style="font-size: 16px;">

        <tr>
            <td colspan="2" align="right">Здравна книжка №:</td>
            <td colspan="2"><input type="text" name=""></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Рецептурна книжка №:</td>
            <td colspan="2"><input type="text" name=""></td>
        </tr>
        <tr>
            <td colspan="2" align="right">ЛАК №:</td>
            <td colspan="2"><input type="text" name=""></td>
        </tr>
        </tbody>

    </table><center>
<input type="submit" name="" value="Добави нов пациент" style="font-size: 14px;">
        </center>
    </form>
</div>
{include file="footer.tpl"}