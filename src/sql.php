<?
  $db = mysqli_connect(getenv("OAS_PHP_SOURCE_MYSQL_SERVER"), getenv("OAS_PHP_SOURCE_READ_MYSQL_USER"), getenv("OAS_PHP_SOURCE_READ_MYSQL_PASSWORD"));
  $starttime = microtime(true);
  mysqli_query($db, "/* " . MYSQLND_QC_ENABLE_SWITCH . " */ SELECT SLEEP(1) AS ZERO FROM DUAL;");
  $endtime = microtime(true);
  printf("Seconds: %d", $endtime - $starttime);
  mysqli_close($db);
