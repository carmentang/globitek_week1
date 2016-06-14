<?php
$page_title = "States and Provinces";
$page_description = "All States and Provinces";
include('includes/header.php');
include('../private/functions.php');
?>

<?php
  require_once('../private/initialize.php');

  echo "<a href='menu.php'>";
  echo "Back to menu";
  echo "</a>";

  echo "<h1>";
    echo "States";
  echo "</h1>";

  $states_result = get_all_states();

  echo "<table>";
    echo "<div id='first-col'>";
      echo "<b>Name Code Country</b><br>";
      while ($states = mysqli_fetch_assoc($states_result)) {
        echo "<tr><span class=\"states_result\">";
        echo h($states['name']) . " " . h($states['code']) . " " . h($states['country_id']) . " ";
        echo "<a href='state.php?id=${states['id']}'}>View</a>";
        echo "</span></tr><br>";
      }
    echo "</div>";
  echo "</table>";

  echo "</div>";

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
