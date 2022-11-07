<?php
require('./DATABASE_FILES/create_database.php');
require('./DATABASE_FILES/create_user_table.php');
require('./DATABASE_FILES/create_form_table.php');
require('./DATABASE_FILES/create_NewApplication_table.php');
require('./DATABASE_FILES/insert_user_data.php');
require('./DATABASE_FILES/insert_form_data.php');
require('./DATABASE_FILES/insert_newApplications_data.php');
?>

<html>
    
    <head>
        <title>Index Page</title>
        <link rel="stylesheet" href="./css/login.css">
    </head>

    <body>
        <h2 class="head">Welcome to Leave Application Management System!</h2>
        <br><br>
        <button onclick="window.location.href='login.php';">Start</button>
    </body>

</html>