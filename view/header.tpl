<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Datatables start-->
    <link rel="stylesheet" type="text/css" href="../libs/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="../libs/jquery.dataTables.js"></script>
    <!--Datatables end-->

    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        .sidenav {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #34495E;
            overflow-x: hidden;
            padding-top: 20px;

        }
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
        }
        .sidenav a:hover {
            color: cornflowerblue;
            background-color: white;
            color: #34495E;
        }
        .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        .showme {
            display: none;

        }

        .showhim:hover .showme {
            display: block;
        }
    </style>
   </head>
<body>