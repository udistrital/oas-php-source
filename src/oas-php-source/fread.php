<?
  $read_from = getenv("OAS_PHP_SOURCE_READ_FROM");
  $fp = fopen($read_from, "rb");
  echo fread($fp, filesize($read_from));
  fclose($fp);
