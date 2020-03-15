<html>
<head>
<style>
    body{
        background-color: #34495E;
        color: white;
    }
    input[type=text], select {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

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
</head>
<body>
<center><br><br><br>
    <p style="font-family: Monospace; font-size: 14px;">
        Въведете ЕГН на пациент за да изпратите заявка за изслеване към лаборатория
    </p>
<form action="./new_request.php" method="get"  autocomplete="off">
    <input type="text" name="idn" placeholder="ЕГН">
    <input type="hidden" name="type" value="cl">
    <input type="submit" name="send" value="Напред">
    </form>
{if $find=="false"}
    <p style="font-family: Monospace; font-size: 14px;">
    Не открихме пациент с ЕГН: {$idn}<br>
    Моля, проверете ЕНГ за грешки или добавете нов пациент!
        </p>
{/if}
</center>
</body>
</html>