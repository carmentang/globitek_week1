<?php
$page_title = "Territories";
$page_description = "North America Territories";
include('includes/header.php');
include('private/functions.php');
?>

<?php
  require_once('private/initialize.php');

  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  echo "</div>";
  echo "<a href='index.php'>";
  echo "Back to home page";
  echo "</a>";

  echo "<h1>";
    echo "Countries";
  echo "</h1>";

  $countries_result = get_results($db, "countries", true, true);

  while($country = mysqli_fetch_assoc($countries_result)) {
    echo "<h2>";
      echo "<span class=\"state_name\"> ${country['name']} </span>";
    echo "</h2>";

    $states_result = get_results($db, "states", "country_id", $country['id']);

    echo "<ul>";
    while($state = mysqli_fetch_assoc($states_result)) {
      echo "<li>";
      echo "<span class=\"state_name\"> ${state['name']} </span>";
      echo "<span class=\"state_code\">" . "(" . $state['code'] . ")" . "</span>";
      echo "</li>";

      $territories_result = get_results($db, "territories", "state_id", $state['id']);

      echo "<ul>";
      while($territories = mysqli_fetch_assoc($territories_result)) {
        if ($territories['name'] != $state['name']) {
          echo "<li>";
          echo "<span class=\"territories_name\"> ${territories['name']} </span>";
          echo "</li>";
        }

        $sql_salesppl = "SELECT * FROM salespeople ORDER BY last_name ASC";
        $salesppl_result = mysqli_query($db, $sql_salesppl);

        $terr_result = get_results($db, "salespeople_territories", "territories_id", $territories['id']);
        $ppl = array();

        while ($terr = mysqli_fetch_assoc($terr_result)) {
          array_push($ppl, $terr['salespeople_ids']);
        }

        while ($salesppl = mysqli_fetch_assoc($salesppl_result)) {
          foreach($ppl as $id) {
            if ($salesppl['id'] == $id) {
              echo "<a href='salesperson.php?person_id=$id'>";
                echo "<span class=\"salespeople_name\"> ${salesppl['first_name']} ${salesppl['last_name']}</span><br>";
              echo "</a>";
            }
          }
        }
        mysqli_free_result($terr_result);
        mysqli_free_result($salesppl_result);
      }
      mysqli_free_result($territories_result);
      echo "</ul>";
    }
    echo "</ul>";
    mysqli_free_result($states_result);
  }
  mysqli_free_result($countries_result);

  echo "</ul>";
  mysqli_close($db);
?>

<?php include('includes/footer.php'); ?>
