<?php
include 'database.inc.php';
$conn = getDatabaseConnection();
function displayCategories() {
    $sql = "SELECT * FROM Categories order by category";
    $records = getDataBySQL($sql);
    echo " <select name=\"CategoryID\" id=\"CategoryID\"> ";
    echo "<option value=\"0\">All</option>";
    foreach($records as $record) {
		echo "<option value=\"" . $record['CategoryID']. "\">" .$record['category'] . "</option>";
		
	}
	
    echo "</select>";
      
 
}

?>
<html>
    
    <head>
        <title>MPJC</title>
    </head>
    
    <body>
        <center><h1>Search Database</h1></center>
        Organization Name: <input type="text" id="ORG_NAME" />

        Categories: <?php displayCategories(); ?>
        <button id="submit">Search</button>
        <div id='content'></div>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    $("#submit").click(function(){
        var CategoryID = document.getElementById('CategoryID').value;
        console.log(CategoryID);
        
        var ORG_NAME = document.getElementById('ORG_NAME').value;

        $.ajax({url: "getinfo.php", 
        data : {CategoryID : CategoryID, ORG_NAME : ORG_NAME}, 
        success: function(result){
            $("#content").html(result);
        }});
        
    });


        
    </script>
</html>