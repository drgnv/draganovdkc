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
                  <i style="visibility: hidden;">1</i><a href="./exams.php?status=0&exam_id={$exam.exams_id}"><img src="../images/over.PNG" width="20" height="20" title="Приключен"></a>
                {else}
                    <i style="visibility: hidden;">0</i><a href="./exams.php?status=1&exam_id={$exam.exams_id}"><img src="../images/notover.PNG" width="20" height="20" title="НЕприключен"></a>
                {/if}
            </td>
            <td>{$exam.exams_time}</td>
            <td>{$exam.exams_date|date_format:"%D"}</td>
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
                <a href="./exams.php?delete_id={$exam.exams_id}" onclick="return confirm('Сигурни ли сте, че искате да изтриете прегледа на {$exam.pi_names}?')"><img src="../images/delete.png" width="20" height="20"></a>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>