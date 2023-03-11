<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require_once 'connection.php';

function search()
{
  $mysqli = getConnetion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT name, url FROM pages WHERE name LIKE '%$search%' ";
  $res = $mysqli->query($query);
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<p><a href='$row[url]' target='_blank'>$row[name]</a></p>";
  }
}

search();