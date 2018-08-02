<?
  session_start();
  $_SESSION["seen"] += 1;
  echo "SID=" . session_id() . "\n";
  echo "seen=" . $_SESSION["seen"] . "\n";
