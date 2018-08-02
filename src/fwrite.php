<?
  $fp = fopen(getenv("OAS_PHP_SOURCE_WRITE_TO"), "wb");
  fwrite($fp, getdate());
  fclose($fp);
