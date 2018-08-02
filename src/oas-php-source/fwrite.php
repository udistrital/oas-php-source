<?
  $fp = fopen(getenv("OAS_PHP_SOURCE_WRITE_TO"), "wb");
  fwrite($fp, date(DATE_RFC2822));
  fclose($fp);
