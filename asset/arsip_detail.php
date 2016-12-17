<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'database.php';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'simsip';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

$return_arr = array();
$term = mysql_real_escape_string($_GET['term']);
$fetch = mysql_query("select * from kdbrg where ur_sskel like '%".$term."%'");

while ($row = mysql_fetch_array($fetch) ) {
   $row_array['value'] = $row['ur_sskel'];
   $row_array['kodebarang'] = $row['kd_brg'];
   $row_array['namabarang'] = $row['ur_sskel'];
   $row_array['satuan'] = $row['satuan'];
   $row_array['kategori'] = $row['ur_gol'];

    array_push($return_arr,$row_array);
}

mysql_close();

/* Toss back results as json encoded array. */
echo json_encode($return_arr);