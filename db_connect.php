<?php

   $db = pg_connect("host=marketing-redshift.hevo.me port=5439 dbname=support user=support password=h3dwPwJ7lHptXPU7zqAeODHutFbF9S");
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>

<!-- host=hevo-common.c4fgwnhdfb5t.ap-southeast-1.redshift.amazonaws.com port=5439 dbname=zendesk user=root password=ZGRAf43DeQtTuDkz -->