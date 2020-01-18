<DOCTYPE html>
    <html>

    <head>
        <meta name="vieport" content="width=device-width, initial-scale=1.0">

        <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">
        <title>DraganovLab</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" charset="utf8" src="../js/jj.js"></script>
        <style type="text/css" media="all">
            @import "../css/style.css";
        </style>

        <link href="../css/ui-choose.css" rel="stylesheet">

        <link href="../css/tooltip.css" media="screen" rel="stylesheet" type="text/css">




    </head>

    <body bgcolor="#34495E" style="color: white;">
    <center>
<!--Datatables js-->

<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#journal').DataTable({

                    "pageLength": 50,
                    "order": [
                        [3, "desc"]
                    ],
                    "aLengthMenu": [
                        [10, 25, 50, 75, -1],
                        [10, 25, 50, 75, "Всички"]
                    ],
                    "scrollY": "375px",
                    "scrollX": "100px",
                    "scrollCollapse": true,
                    "paging": false,

                }

        );
    });
</script>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Моля, попълнете името на пациента");
            return false;
        }
    }
</script>
<!--Datatables js-->

<link href="../css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<style>



    @media only screen and (max-width: 900px) {
        #t{
            display:block;
        }
        table{
            width: 100%;
        }

        td{
            width: 100%;
        }

    }


    #parent #popup {
        display: none;
    }

    #parent:hover #popup {
        display: block;
    }

    #submit-icon {
        background-image: url("../images/plus.jpg");
        /* Change url to wanted image */
        background-size: cover;
        border: none;
        width: 42px;
        height: 42px;
        cursor: pointer;
        color: transparent;
    }
</style>
    <script>
        // When the user clicks on div, open the popup
        function popup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>

        <script type="text/javascript">
            function insertText(elemID, text) {
                var elem = document.getElementById(elemID);
                elem.innerHTML += text;
            }

            function validate(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>

                    <form autocomplete="off" method="POST" action='./new_request_cl.php' name='newp'>
                            ID:
                            <input required type="number" name="num" style="width: 60px;" value="{$pid}"> {$lang.paid}:
                            <input type="checkbox" name="pay"> | <b style="color: red;">{$lang.cito}</b>
                            <input type="checkbox" name="cito">
                            </br>
                            </br>


                            <input value="{$patient}"  required type="hidden" name="names" style="width: 220px; text-transform: capitalize;">
                            <input value="{$idn}" type="hidden" name='idn' size="7" placeholder="{$lang.idn}" required>
                            <input value="{$doctorr}"  list="hosting-plan" placeholder="{$lang.doctor}" type="hidden" size="14"  name='doctor'>

                            <br>
                            <b style="color: red">{$not_valid_idn}</b>
                            <br> <select required id="aioConceptName" name="tests[]" class="ui-choose" multiple="multiple" id="uc_04">
                                <option value="01.01" style="list-style: none;">CBC</option>
                                {foreach from=$tests item=test}
                                    <option value="{$test.code}" style="list-style: none;">{$test.button}</option>
                                {/foreach}
                                <option value="01.09" style="list-style: none;">Urine-Sediment</option>
                                <option value="01.08" style="list-style: none;">Urine-Chemical</option>
                                <option value="15.00" style="list-style: none;">Na, K, Cl</option>
                                <option value="66.00" style="list-style: none;">BGA</option>
                                <option value="01.40" style="list-style: none;">WBC count</option>
                                <option value="62.00" style="list-style: none;">AGP<!--ambulatory glucose profile--></option>
                            </select>

                            <script src="../js/ui-choose.js"></script>
                            <script>
                                $('.ui-choose').ui_choose();
                            </script><br><br>
                            <table align="center" border="1" style="border-collapse: collapse; padding: 5px; width: 100px" cellspacing="0">
                                <th style="background-color: #ffbd28;">
                                    <div class="tooltip">{$lang.comment}
                                        <span class="tooltiptext">Коментрът на резултатите се принтира с резултатите на пациента</span>
                                    </div>
                                </th>
                                <th style="background-color: #ffbd28;">
                                    <div class="tooltip">{$lang.note}
                                        <span class="tooltiptext">Бележките са видими само в полето "Болежки" и не достигат до пациентите. Подходящи
  за работни записки.</span>
                                    </div>
                                </th>
                                <tr>
                                    <td>
                                        <textarea style="background-color: #ffedc4; resize: none;" name="comment" >{$data.0.comment}</textarea>
                                    </td>
                                    <td>
                                        <textarea style="background-color: #ffedc4; resize: none;" name="note">{$data.0.note}</textarea>
                                    </td>
                                </tr>
                            </table>
                            </br>
                            </br>
                            {$lang.date}:
                            <input required type="date" name="date" value="{$date}" style="width: 135px">
                            | &nbsp&nbsp
                            <input type="submit" name="record" style="border: none; background-color: #ff9b30;color:#472b00; width: 80px;height: 25px; font-weight: bold; font-size: 14px" value="&#10133; {$lang.add}">&nbsp&nbsp |
                            <a href="../controller/print.php?id={$patient_id}" target="_blank" style="text-decoration: none;">
                                <img src="../images/print.png" width="24" height="24"><b style="font-size: 13px; color: white;">{$lang.print} {$lang.request}</b></a>
                    </form>
</body></html>