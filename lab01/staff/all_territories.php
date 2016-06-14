<?php
$page_title = "Territories";
$page_description = "North America Territories";
include('includes/header.php');
include('../private/functions.php');
?>

<?php
  require_once('../private/initialize.php');

  echo "<a href='menu.php'>";
  echo "Back to menu";
  echo "</a>";

  echo "<h1>";
    echo "Territories";
  echo "</h1>";

  $countries_result = get_all_countries();

  while($country = mysqli_fetch_assoc($countries_result)) {
    echo "<h2>";
      echo "<span class=\"state_name\">" . h($country['name']) . "</span>";
    echo "</h2>";

    echo "<b>Name State_ID Salespeople_ID</b><br>";
    $territories_result = get_all_territories();
    while($territories = mysqli_fetch_assoc($territories_result)) {
      echo "<td><tr>";
      echo h($territories['name']) . " " . h($territories['state_id']) . " " . h($territories['salespeople_ids']);
      echo "<a href='territory.php?id=${territories['id']}'}>View</a><br>";
      echo "</td></tr>";
    }
  }

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
