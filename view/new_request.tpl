<html>
<head>

</head>
<body>
<form action="./new_request.php" method="get">
    <input type="text" name="idn" placeholder="ЕГН">
    <input type="hidden" name="type" value="cl">
    <input type="submit" name="send" value="Напред">
    </form>
{if $find=="false"}
    Не открихме пациент с ЕГН: {$idn}<br>
    Моля, проверете ЕНГ за грешки или добавете нов пациент!
{/if}
</body>
</html>