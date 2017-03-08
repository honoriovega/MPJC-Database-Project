<?php
   include 'database.inc.php';
$conn = getDatabaseConnection();
  $category = $_GET["category"];
  
  
  $sql = "select * from Organizations where CategoryID=$category";
  $records = getDataBySQL($sql);
  
  foreach($records as $record)
  {
    echo $record['ORG_NAME'] . "<br/>";
  }
?>