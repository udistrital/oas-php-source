<?
  $mysql_server = getenv("OAS_PHP_SOURCE_MYSQL_SERVER");
  $mysql_user = getenv("OAS_PHP_SOURCE_MYSQL_USER");
  $mysql_password = getenv("OAS_PHP_SOURCE_MYSQL_PASSWORD");
  $mysql_db = getenv("OAS_PHP_SOURCE_MYSQL_DB");
  $mysql_port = getenv("OAS_PHP_SOURCE_MYSQL_PORT");
  $db = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_db, $mysql_port);
  $starttime = microtime(true);
  mysqli_query($db, "/* " . MYSQLND_QC_ENABLE_SWITCH . " */ SELECT SLEEP(1) AS ZERO FROM DUAL;");
  $endtime = microtime(true);
  printf("Seconds: %d", $endtime - $starttime);
  mysqli_close($db);
