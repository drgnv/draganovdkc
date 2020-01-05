{include file="header.tpl"}
{include file="menu.tpl"}

<style>

        /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>


<script type="text/javascript" charset="utf8" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#journal').DataTable({

                    "pageLength": 50,
            "scrollCollapse": true,
            "scrollY": "575px",
            "paging": false

                }

        );
    });
</script>

<div class="main">
    <button id="myBtn"><img src="../images/add.png" width="17" height="17" align="left"> Добави</button>
    <table border="0" id="journal" class="display" >
        <thead>
        <tr  style="background-color: #34495E; color: white; height: 1px; font-size: 15px;">
            <th>Пациент</th>
            <th>ЕГН</th>
            <th>Час</th>
            <th>Бележка</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody style="background-color: #34495E; color: black; height: 1px; font-size: 15px;">
        <tr align="center">
            <td>Драган Драганов</td>
            <td>9308253229</td>
            <td>13:20ч.</td>
            <td>Диабетик</td>
            <td>
                <img src="../images/delete.png" width="20" height="20">
            </td>
        </tr>
        </tbody>
    </table>


    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- The Modal -->

</div>
{include file="footer.tpl"}