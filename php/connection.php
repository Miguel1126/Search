<?php 
function getConnetion()
{
  $mysqli = new Mysqli('localhost', 'root', '', 'searchdb');
  if($mysqli->connect_errno) exit('Connection error: ' . $mysqli->connect_errno);
  $mysqli->set_charset('utf8');
  return $mysqli;
}