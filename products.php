 <?php
session_start();

if (!isset($_SESSION['username'])) {  //checks whether user has logged in
    
    header("Location: login.php");
    
}

include 'database.inc.php';

$conn = getDatabaseConnection();

function displayAllProducts(){
	

    $sql = "SELECT * FROM Organizations";
    $records = getDataBySQL($sql);


    /* //Using HTML Links
    foreach ($records as $record) {
        echo $record['productName']; 
        echo " <a href='updateProduct.php?productId=".$record['productId']."'> Update </a> ";
        echo " <a href='deleteProduct.php'> Delete </a>";
        echo "<br />";
    }
    */

     //Using Form Buttons
         echo "<table>";
        foreach ($records as $record) {
          echo "<tr>"; 
          echo "<td>" . $record['ORG_NAME'] . "</td>"; 
          echo "<td> <form action=updateProduct.php>";
          echo "<input type='hidden' name='ORG_ID' value='".$record['ORG_ID'] . "'/>";
          echo "<input type='submit' value='Update'/></form> </td>";
          echo "</tr>";
        } //endForeach
        echo "</table>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Products</title>
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
      <h1>Database Administration</h1>
    </header>

   
    <div>
     <strong> Welcome <?=$_SESSION['adminName']?>! </strong>
     
     <form action="logout.php">
        <input type="submit" value="Logout" />    
     </form>
         
     <form action="addProduct.php">
        <input type="submit" value="Add New Organization" />    
     </form>
         
      <br /><br />    
      <?php displayAllProducts() ?>
      
      
      
      
    </div>

    <footer>

    </footer>
  </div>
</body>
</html>
