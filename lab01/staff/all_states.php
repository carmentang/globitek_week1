<?php
$page_title = "States and Provinces";
$page_description = "All States and Provinces";
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
    echo "States";
  echo "</h1>";

  $sql_states = "SELECT * FROM states ORDER BY name ASC";
  $states_result = mysqli_query($db, $sql_states);

  $sql_col = "SHOW COLUMNS FROM states";
  $col_results = mysqli_query($db, $sql_col);

  echo "<table>";
    echo "<div id='first-col'>";
      echo "<b>Name Code Country</b><br>";
      while ($states = mysqli_fetch_assoc($states_result)) {
        echo "<tr><span class=\"states_result\">";

        echo "${states['name']} ";
        echo "${states['code']} ${states['country_id']} ";
        echo "<a href='state.php?id=${states['id']}'}>View</a>";

        echo "</span></tr><br>";

      }
    echo "</div>";
  echo "</table>";

  echo "</div>";

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
