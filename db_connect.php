<?php
   $host        = "host = hevo-common.c4fgwnhdfb5t.ap-southeast-1.redshift.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = zendesk";
   $credentials = "user = root password=ZGRAf43DeQtTuDkz";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>

<!-- host=hevo-common.c4fgwnhdfb5t.ap-southeast-1.redshift.amazonaws.com port=5439 dbname=zendesk user=root password=ZGRAf43DeQtTuDkz -->