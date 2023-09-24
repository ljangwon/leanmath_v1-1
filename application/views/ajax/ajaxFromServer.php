<?php

include "conndb.php";

$SQL = " select dt_id, name, position, office, extn, start_date, 
salary from dt_excel";

$result = result_query($SQL);

$ret_arr = array();

while( $row = mysqli_fetch_array($result) )
{
  $row_array['id'] = $row['dt_id'];
  $row_array['name'] = urlencode($row['name']);
  $row_array['position'] = urlencode($row['position']);
  $row_array['salary'] = urlencode($row['salary']);
  $row_array['start_date'] = urlencode($row['start_date']);
  $row_array['office'] = urlencode($row['office']);
  $row_array['extn'] = urlencode($row['extn']);
  
  array_push($ret_arr, $row_array);
}

?>

{"data": <?php
echo urldecode(json_encode($ret_arr));
?>}