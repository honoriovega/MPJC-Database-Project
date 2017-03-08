<?php
include 'database.inc.php';
$conn = getDatabaseConnection();
function displayCategories() {
    $sql = "SELECT * FROM Categories order by category";
    $records = getDataBySQL($sql);
    echo " <select name=\"CategoryID\" id=\"category\"> ";
   
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
        <?php displayCategories(); ?>
        <button id="submit">Search</button>
        <div id='content'></div>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    $("button").click(function(){
        var category = document.getElementById('category').value;
        console.log(category);
    
        $.ajax({url: "getinfo.php", data : {category : category}, success: function(result){
            $("#content").html(result);
        }});
        
    });
        
    </script>
</html>