<html>
<head>
    <title>Фамилна анамнеза</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/richtext.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.richtext.js"></script>

</head>
<body>
<center>
    <h2>Фамилна анамнеза</h2>
    <p><b>Пациент:</b> {$pi.pi_names} | <b>ЕГН:</b> {$pi.pi_patient_idn}</p></center>
<form action="./fam_medical_history.php?idn={$idn}" method="post">
    <textarea class="content" name="fhm">{$fmh}</textarea>

    <input type="submit" name="save" value="Запиши">
</form>

<script>
    $(document).ready(function() {
        $('.content').richText();
    });
</script>

</body>
</html>