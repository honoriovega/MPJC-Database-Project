<?php

 include 'database.inc.php';

if (isset($_GET['deleteForm'])) {  //admin submitted the Delete Form
    $sql = "DELETE FROM Organizations
            WHERE ORG_ID = :ORG_ID";
    $namedParameters = array();
    $namedParameters[':ORG_ID'] = $_GET['ORG_ID'];

    $conn = getDatabaseConnection();
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
      echo "<div class='header'><h1>Record has been deleted! </h1></div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/theme.css">

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>updateProduct</title>
  <meta name="description" content="">
  <meta name="author" content="lara4594">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
  <div>
    <header>
      <h1>Delete Product</h1>
    </header>

    <div>

      <form>
      <?php

      $sql = "SELECT * from Organizations where ORG_ID = :ORG_ID";

      $params = array();
      $params[':ORG_ID'] = $_GET['ORG_ID'];

      $conn = getDatabaseConnection();
      $stmt = $conn->prepare($sql);
      $stmt->execute($params);

      while($row = $stmt -> fetch()) {
	  echo "<div style='height:auto;width:auto;background-color:white'>";
      echo 'Are you sure you want to delete the ' . $row['ORG_NAME'] . " record?";
      ?>
        <input type='hidden' name='ORG_ID' value="<?=$row['ORG_ID']?>" />
        <input type='submit' value='Delete Product' name='deleteForm' />
    <?php
      }
      ?>
      </form>

      <form action='products.php'>
        <input type='submit' value='Return'>
      </form>
</div>
    </div>

    <footer>
    </footer>
  </div>
</body>
</html>
