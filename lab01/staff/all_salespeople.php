<?php
$page_title = "Salespeople";
$page_description = "All Salespeople";
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
    echo "Salespeople";
  echo "</h1>";

  $sql_salesppl = "SELECT * FROM salespeople ORDER BY first_name";
  $salesppl_result = mysqli_query($db, $sql_salesppl);

  echo "<div id='main-wrap'>";
    while ($ppl = mysqli_fetch_assoc($salesppl_result)) {
      echo "<span class=\"salesppl_result\">";

      echo "<td><tr>";
      echo "${ppl['first_name']} ${ppl['last_name']}";
      echo "${ppl['phone']} ${ppl['email']} ${ppl['id']}";
      echo "<a href='../salesperson.php?person_id=${ppl['id']}'}>View</a>";
      echo "</td></tr>";

      echo "</span><br>";
    }
  echo "</div>";

  mysqli_close($db);
?>

<?php include('../includes/footer.php'); ?>
