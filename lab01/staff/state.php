<?php
$page_title = "State";
$page_description = "Specific state information that loads the different territories.";
include('../includes/header.php');
include('../private/functions.php');
?>

<?php
  require_once('../private/initialize.php');

  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  $id = $_GET["id"];

  $states_result = get_states_by_id($id);

  while ($states = mysqli_fetch_assoc($states_result)) {
    $name = h($states['name']);
    $code = h($states['code']);
    $country_id = h($states['country_id']);
  }

  echo "<a href='all_states.php'>";
  echo "Back to all states";
  echo "</a>";

  echo "<h1>";
    echo "State: $name";
  echo "</h1>";

  echo "Name: $name <br>";
  echo "Code: $code <br>";
  echo "Country Code: $country_id <br><br>";

  $territories_result = get_territories_by_state_id($id);

  while($territories = mysqli_fetch_assoc($territories_result)) {
    echo "<li>";
    echo "<span class=\"territories_name\"><a href='territory.php?id=${territories['id']}'>${territories['name']}</span>";
    echo "</li>";
  }

  mysqli_free_result($territories_result);

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
