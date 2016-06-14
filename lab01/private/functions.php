<!-- private/functions.php -->
<?php include('initialize.php'); ?>

<?php
  function get_results($db, $table, $p1, $p2) {
    $sql = "SELECT * FROM ${table} WHERE ${p1} = ${p2}";
    $sql_result = mysqli_query($db, $sql);
    return $sql_result;
  }

  function h($string="") {
    return htmlspecialchars($string);
  }

  function get_all_countries() {
    global $db;
    $sql = "SELECT * FROM countries ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_all_salespeople() {
    global $db;
    $sql = "SELECT * FROM salespeople ORDER BY last_name ASC, first_name ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_all_territories() {
    global $db;
    $sql = "SELECT * FROM territories ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_all_states() {
    global $db;
    $sql = "SELECT * FROM states ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_states_by_country_id($id=0) {
    global $db;
    $sql = "SELECT * FROM states WHERE country_id = $id ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_states_by_id($id=0) {
    global $db;
    $sql = "SELECT * FROM states WHERE id = $id ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_territories_by_state_id($id=0) {
    global $db;
    $sql = "SELECT * FROM territories WHERE state_id = $id";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_territories_by_id($id=0) {
    global $db;
    $sql = "SELECT * FROM territories WHERE id = $id";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_salesterritories_by_terr_id($id=0) {
    global $db;
    $sql = "SELECT * FROM salespeople_territories WHERE territories_id = $id";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_salesterritories_by_salesppl_id($id=0) {
    global $db;
    $sql = "SELECT * FROM salespeople_territories WHERE salespeople_ids = $id";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_salesppl_by_id($id=0) {
    global $db;
    $sql = "SELECT * FROM salespeople WHERE id = $id";
    $result = mysqli_query($db, $sql);
    return $result;
  }

?>
