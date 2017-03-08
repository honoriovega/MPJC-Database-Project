<?php
   include 'database.inc.php';
$conn = getDatabaseConnection();

  $category = $_GET["CategoryID"];
  $org = $_GET['ORG_NAME'];
  if($_GET["CategoryID"] == 0)
  {
  
    $sql = "select ORG_NAME from Organizations where ORG_NAME LIKE '%$org%'";
    $records = getDataBySQL($sql);
    
    foreach($records as $record)
    {
      echo $record['ORG_NAME'] . "<br/>";
    }
  }
  
  else {
  
  $sql = "select * from Organizations where CategoryID=$category";
  $records = getDataBySQL($sql);
  
  foreach($records as $record)
  {
    echo $record['ORG_NAME'] . "<br/>";
  }
  }
?>