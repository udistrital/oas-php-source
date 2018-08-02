<?
  $fp = fopen(getenv("OAS_PHP_SOURCE_READ_FROM"), "rb");
  echo fread($fp, filesize(getenv("OAS_PHP_SOURCE_READ_FROM")));
  fclose($fp);
