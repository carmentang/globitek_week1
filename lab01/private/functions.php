<!-- private/functions.php -->
<?php
  function get_results($db, $table, $p1, $p2) {
    $sql = "SELECT * FROM ${table} WHERE ${p1} = ${p2}";
    $sql_result = mysqli_query($db, $sql);
    return $sql_result;
  }
?>
