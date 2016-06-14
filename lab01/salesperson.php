<?php
$page_title = "Salesperson";
$page_description = "Description of Salesperson";
include('includes/header.php');
include('private/functions.php');
?>

<?php
  require_once('private/initialize.php');

  echo "<div>";

    echo "<a href='territories.php'>";
    echo "Back to territories";
    echo "</a><br>";

    echo "<a href='staff/all_salespeople.php'>";
    echo "Back to all salespeople";
    echo "</a>";

    $all_salespeople = get_all_salespeople();
    $all_id = array();

    while ($sales = mysqli_fetch_assoc($all_salespeople)) {
        array_push($all_id, $sales['id']);
    }

    $person_id = $_GET["person_id"];
    if (!$person_id || !in_array($person_id, $all_id)) {
      header("Location: territories.php");
    }
    $info = get_salesppl_by_id($person_id);

    $territories_result = get_all_territories();

    while ($person = mysqli_fetch_assoc($info)) {
      echo "<h1>";
        echo "Salesperson";
      echo "</h1>";

      if ($person['id'] == $person_id) {
        echo "<span class=\"information\">" . h($person['first_name']) . " " . h($person['last_name']) . "<br>";
          echo h($person['phone']) . "<br>";
          echo h($person['email']) . "<br>";
        echo "</span><br>";

        echo "<h1>";
          echo "Territories";
        echo "</h1>";

        $terr_result = get_results($db, "salespeople_territories", "salespeople_ids", $person_id);
        $terr_result = get_salesterritories_by_salesppl_id($person_id);
        $places = array();

        while ($person = mysqli_fetch_assoc($terr_result)) {
          array_push($places, $person['territories_id']);
        }

        $places_u = array_unique($places);
        while ($territories = mysqli_fetch_assoc($territories_result)) {
          if (in_array($territories['id'], $places_u)) {
            echo "<li><span class=\"area\">" . h($territories['name']) . "</span></li>";
          }
        }
        mysqli_free_result($territories_result);
      }
    }

    mysqli_free_result($info);
  echo "</div>";
  mysqli_close($db);
?>

<?php include('includes/footer.php'); ?>
