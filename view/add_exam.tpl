<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>dKc</title>
    <style>
        body{
            background-color: #34495E;
            font-size: 20px;
            color: white;
            font-family: "Lato", sans-serif;
        }
    </style>
</head>
<body><center>


    {if $find=="true"}
    <b>Добави преглед за:</b> {$personal_info.0.pi_names}<br>
    <b>ЕГН:</b> {$personal_info.0.pi_patient_idn}
    <form action="./add_exam.php?idn={$personal_info.0.pi_patient_idn}&find_patient=true" method="POST">
    <table border="0">

        <tr>
            <td align="right">Час:</td>
            <td ><script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
                <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
                <input type="text" id="time" name="time">

                <script>var timepicker = new TimePicker('time', {
                        lang: 'en',
                        theme: 'dark'
                    });
                    timepicker.on('change', function(evt) {

                        var value = (evt.hour || '00') + ':' + (evt.minute || '00');
                        evt.element.value = value;

                    });</script>
            </td>
        </tr>
        <tr>
            <td align="right">Дата:</td>
            <td><input type="date" name="date" ></td>
        </tr>
        <tr>
            <td align="right">Бележка:</td>
            <td><input type="text" name="note"></td>
        </tr>
        <tr>
            <td align="right">Статус: </td>
            <td>
                <select name="status">

                    <option value="0" >НЕприключен</option>
                    <option value="1" >Приключен</option>
                </select>

            </td>
        </tr>
    </table>
    <input type="submit" name="add" value="Добави">
    </form></center>
{else}
<p>Добави прегледа на:

    <form action="add_exam.php" method="GET">
        <input type="text" name="idn" placeholder="ЕГН">
        <input type="submit" name="find_patient" value="Намери">
    </form>
</p><br>

{/if}
{if $find=="false"}
    Не открихме пациент с ЕГН: {$idn}<br>
    Моля, проверете ЕНГ за грешки или добавете нов пациент!
{/if}
</body></html>