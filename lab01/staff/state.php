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

  $states_result = get_results($db, "states", "id", $id);

  while ($states = mysqli_fetch_assoc($states_result)) {
    $name = $states['name'];
    $code = $states['code'];
    $country_id = $states['country_id'];
  }

  echo "<a href='all_states.php'>";
  echo "Back to all states";
  echo "</a>";

  echo "<h1>";
    echo "State: $name";
  echo "</h1>";

  echo "Name: $name <br>";
  echo "Code: $code <br>";
  echo "Country Code: $country_id <br>";

  $territories_result = get_results($db, "territories", "state_id", $id);

  echo "<ul>";
  while($territories = mysqli_fetch_assoc($territories_result)) {
    echo "<li>";
    echo "<span class=\"territories_name\"><a href='territory.php?id=${territories['id']}'>${territories['name']}</span>";
    echo "</li>";
  }
  echo "</ul>";
  mysqli_free_result($territories_result);

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
