<?php
$page_title = "Salesperson";
$page_description = "Description of Salesperson";
include('includes/header.php');
include('private/functions.php');
?>

<?php
  require_once('private/initialize.php');

  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  echo "<div>";

    echo "<a href='staff/all_salespeople.php'>";
    echo "Back to salespeople";
    echo "</a>";

    $person_id = $_GET["person_id"];
    $info = get_results($db, "salespeople", "id", $person_id);

    $sql_territories = "SELECT * FROM territories ORDER BY name ASC";
    $territories_result = mysqli_query($db, $sql_territories);

    while ($person = mysqli_fetch_assoc($info)) {
      echo "<h1>";
        echo "Salesperson";
      echo "</h1>";

      if ($person['id'] == $person_id) {
        echo "<span class=\"information\">";
          echo "${person['first_name']} ${person['last_name']}<br>";
          echo "${person['phone']}<br>";
          echo "${person['email']}<br>";
        echo "</span><br>";

        echo "<h1>";
          echo "Territories";
        echo "</h1>";

        $terr_result = get_results($db, "salespeople_territories", "salespeople_ids", $person_id);
        $places = array();

        while ($person = mysqli_fetch_assoc($terr_result)) {
          array_push($places, $person['territories_id']);
        }

        $places_u = array_unique($places);

        while ($territories = mysqli_fetch_assoc($territories_result)) {
          if (in_array($territories['id'], $places_u)) {
            echo "<span class=\"area\">";
            echo "${territories['name']}";
            echo "</span><br>";
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
