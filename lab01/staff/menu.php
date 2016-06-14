<?php
$page_title = "Countries";
$page_description = "List of Countries";
include('../private/functions.php');
include('includes/header.php');
?>

<?php
  require_once('../private/initialize.php');

  echo "<a href='../index.php'>";
  echo "Back to home page";
  echo "</a>";

  echo "<h1>";
    echo "Menu";
  echo "</h1>";

  echo "<h3><a href='all_states.php'>";
  echo "States";
  echo "</a></h3>";

  echo "<h3><a href='all_territories.php'>";
  echo "Territories";
  echo "</a></h3>";

  echo "<h3><a href='all_salespeople.php'>";
  echo "Salespeople";
  echo "</a></h3>";

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
