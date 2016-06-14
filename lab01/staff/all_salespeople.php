<?php
$page_title = "Salespeople";
$page_description = "All Salespeople";
include('includes/header.php');
include('../private/functions.php');
?>

<?php
  require_once('../private/initialize.php');

  echo "<a href='menu.php'>";
  echo "Back to menu";
  echo "</a>";

  echo "<h1>";
    echo "Salespeople";
  echo "</h1>";


  $salesppl_result = get_all_salespeople();

  echo "<div id='main-wrap'>";
    while ($ppl = mysqli_fetch_assoc($salesppl_result)) {
      echo "<span class=\"salesppl_result\">";

      echo "<td><tr>";
      echo h($ppl['first_name']) . " " . h($ppl['last_name']) . " " . h($ppl['phone']) . " " . h($ppl['email']) . " " . h($ppl['id']) . " ";
      echo "<a href='../salesperson.php?person_id=${ppl['id']}'}>View</a>";
      echo "</td></tr>";

      echo "</span><br>";
    }
  echo "</div>";

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
