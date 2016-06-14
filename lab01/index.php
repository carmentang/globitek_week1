<?php
$page_title = "Countries";
$page_description = "List of Countries";
include('private/functions.php');
include('includes/header.php');
?>

<?php
  require_once('private/initialize.php');

    echo "<div>";
      echo "<h1>Home</h1>";
      echo "<h3><a href='territories.php'>";
      echo "Countries";
      echo "</a></h3>";

      echo "<h3><a href='staff/menu.php'>";
      echo "Staff";
      echo "</a></h3>";
    echo "</div>";

  mysqli_close($db);
?>

<?php include('includes/footer.php'); ?>
