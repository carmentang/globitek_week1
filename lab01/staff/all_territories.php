<?php
$page_title = "Territories";
$page_description = "North America Territories";
include('includes/header.php');
include('../private/functions.php');
?>

<?php
  require_once('../private/initialize.php');

  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  echo "<a href='menu.php'>";
  echo "Back to menu";
  echo "</a>";

  echo "<h1>";
    echo "Territories";
  echo "</h1>";

  $countries_result = get_results($db, "countries", true, true);

  while($country = mysqli_fetch_assoc($countries_result)) {
    echo "<h2>";
      echo "<span class=\"state_name\"> ${country['name']} </span>";
    echo "</h2>";

    echo "<b>Name State_ID Salespeople_ID</b><br>";
    $territories_result = get_results($db, "territories", true, true);
    while($territories = mysqli_fetch_assoc($territories_result)) {
      echo "<td><tr>";
      echo "${territories['name']} ";
      echo "${territories['state_id']} ${territories['salespeople_ids']} ";
      echo "<a href='territory.php?id=${territories['id']}'}>View</a><br>";
      echo "</td></tr>";
    }
  }

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
