<?php

$dbconn = pg_connect("host=localhost dbname=4k user=postgres password=postgres")
        or die('No se ha podido conectar: ' . pg_last_error());
