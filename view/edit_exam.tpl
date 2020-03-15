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
<p>Редактирайте прегледа на: {$exam_info.0.pi_names}</p><br>
<form action="./edit_exam.php?exam_id="{$exam_info.0.exams_id}" method="POST">
<table border="0">

    <tr>
        <td align="right">Час:</td>
        <td ><script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
            <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
            <input type="text" id="time" name="time" value="{$exam_info.0.exams_time}">

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
        <td><input type="date" name="date" value="{$exam_info.0.exams_date}"></td>
    </tr>
    <tr>
        <td align="right">Бележка:</td>
        <td><input type="text" name="note" value="{$exam_info.0.exams_note}"></td>
    </tr>
    <tr>
        <td align="right">Статус: </td>
        <td>
            <select name="status">
                <option value="1" {if $exam_info.0.exams_status == "1"}selected{/if}>Приключен</option>
                <option value="0" {if $exam_info.0.exams_status == "0"}selected{/if}>НЕприключен</option>
            </select>

        </td>
    </tr>
    </table>
    <p style="color: white;background-color: green;">{$ok}</p>
    <input type="hidden" name="exam_id" value="{$exam_info.0.exams_id}">
<input type="submit" name="save" value="Запис">
</form></center>
</body></html>