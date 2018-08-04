<?
  $write_to = getenv("OAS_PHP_SOURCE_WRITE_TO");
  $fp = fopen($write_to, "wb");
  fwrite($fp, date(DATE_RFC2822));
  fclose($fp);
