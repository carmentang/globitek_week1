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

  $territories_result = get_results($db, "territories", "id", $id);

  while ($territories = mysqli_fetch_assoc($territories_result)) {
    $name = $territories['name'];
    $state_id = $territories['state_id'];
    $salespeople_ids = $territories['salespeople_ids'];
  }

  echo "<h1>";
    echo "State: $name";
  echo "</h1>";

  echo "Name: $name <br>";
  echo "State ID: $state_id <br>";
  echo "Salespeople ID: $salespeople_ids <br>";

  mysqli_free_result($territories_result);

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
