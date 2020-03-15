
<div class="sidenav">
    <center><img src="../images/dkcwhite.png" width="100px" height="100px" ></center>

    <form id="demo-2" action="./search.php" method="GET" autocomplete="off">
        <input type="search" placeholder="Търсене" name="search">
    </form><br>
    <a href="./home.php">Начало</a>
    <a href="./exams.php">Прегледи</a>
    <div class="showhim">
    <a href="#services">Пациенти+</a>
        <div class="showme">
            <a style="font-size: 15px" href="new_patient.php">>>Нов пациент</a>
            </div>
    </div>
    <div class="showhim">
        <a>Лаборатории+</a>
        <div class="showme">
            <a style="font-size: 15px" href="clinical_laboratory.php">>>Клинична</a>
            <a style="font-size: 15px">>>Микробиология</a>
        </div>
    </div>
    <a href="./documents.php">Документи</a>
    <a href="./settings.php">Настройки</a>
    <a href="../logout.php">Изход</a>
    <a style="font-size: 14px">Потребител: {$user_info.name}</a>
</div>
