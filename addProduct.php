 <?php
   include 'database.inc.php';
   	$conn = getDatabaseConnection(); 
function displayCategories() {
	


    $sql = "SELECT * FROM Categories order by category";
    $records = getDataBySQL($sql);
    echo " <select name=\"CategoryID\"> ";
   
    foreach($records as $record) {
		echo "<option value=\"" . $record['CategoryID']. "\">" .$record['category'] . "</option>";
		
	}
    echo "</select> <br/>";
      
 
}
 
if (isset($_GET['addForm'])) {  //admin submitted form to add product
    


  

  $namedParameters = array();


  $sql = "INSERT INTO Organizations (ORG_NAME, ORG_NAME_SHORT, CategoryID, 
  ORG_DESC, WEB_URL, FACEBOOK_URL, CONTACT_LAST_NAME, 
  CONTACT_FIRST_NAME, CONTACT_PREFIX, CONTACT_PHONE, CONTACT_EMAIL, 
  STREET_ADDRESS_LINE_1, STREET_ADDRESS_LINE_2, CITY, STATE, ZIP, 
  VOLUNTEER_OPPORTUNITIES, VOLUNTEER_CONTACT_EMAIL, VOLUNTEER_WEBSITE, 
  EVENT_CALENDAR_WEBSITE, DONATION_WEBSITE, INTERNAL_COMMENTS)

  VALUES( :ORG_NAME, :ORG_NAME_SHORT, :CategoryID, :ORG_DESC, :WEB_URL, 
  :FACEBOOK_URL, :CONTACT_LAST_NAME, :CONTACT_FIRST_NAME, 
  :CONTACT_PREFIX, :CONTACT_PHONE, :CONTACT_EMAIL, 
  :STREET_ADDRESS_LINE_1, :STREET_ADDRESS_LINE_2, :CITY, :STATE, :ZIP, 
  :VOLUNTEER_OPPORTUNITIES, :VOLUNTEER_CONTACT_EMAIL, 
  :VOLUNTEER_WEBSITE, :EVENT_CALENDAR_WEBSITE, :DONATION_WEBSITE, 
  :INTERNAL_COMMENTS)";
$namedParameters[':ORG_NAME'] = $_GET['ORG_NAME'];
$namedParameters[':ORG_NAME_SHORT'] = $_GET['ORG_NAME_SHORT'];
$namedParameters[':CategoryID'] = $_GET['CategoryID'];
$namedParameters[':ORG_DESC'] = $_GET['ORG_DESC'];
$namedParameters[':WEB_URL'] = $_GET['WEB_URL'];
$namedParameters[':FACEBOOK_URL'] = $_GET['FACEBOOK_URL'];
$namedParameters[':CONTACT_LAST_NAME'] = $_GET['CONTACT_LAST_NAME'];
$namedParameters[':CONTACT_FIRST_NAME'] = $_GET['CONTACT_FIRST_NAME'];
$namedParameters[':CONTACT_PREFIX'] = $_GET['CONTACT_PREFIX'];
$namedParameters[':CONTACT_PHONE'] = $_GET['CONTACT_PHONE'];
$namedParameters[':CONTACT_EMAIL'] = $_GET['CONTACT_EMAIL'];
$namedParameters[':STREET_ADDRESS_LINE_1'] = $_GET['STREET_ADDRESS_LINE_1'];
$namedParameters[':STREET_ADDRESS_LINE_2'] = $_GET['STREET_ADDRESS_LINE_2'];
$namedParameters[':CITY'] = $_GET['CITY'];
$namedParameters[':STATE'] = $_GET['STATE'];
$namedParameters[':ZIP'] = $_GET['ZIP'];
$namedParameters[':VOLUNTEER_OPPORTUNITIES'] = $_GET['VOLUNTEER_OPPORTUNITIES'];
$namedParameters[':VOLUNTEER_CONTACT_EMAIL'] = $_GET['VOLUNTEER_CONTACT_EMAIL'];
$namedParameters[':VOLUNTEER_WEBSITE'] = $_GET['VOLUNTEER_WEBSITE'];
$namedParameters[':EVENT_CALENDAR_WEBSITE'] = $_GET['EVENT_CALENDAR_WEBSITE'];
$namedParameters[':DONATION_WEBSITE'] = $_GET['DONATION_WEBSITE'];
$namedParameters[':INTERNAL_COMMENTS'] = $_GET['INTERNAL_COMMENTS'];


  $conn = getDatabaseConnection();    
  $statement = $conn->prepare($sql);
  $statement->execute($namedParameters);    
       


echo "Record has been added!";   
  
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Add new Product</title>
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
      <h1>Adding New Organization</h1>
    </header>

    <div>
      
      <form>
 Organization Name: <input type="text" name="ORG_NAME" /> <br />
   Organization Name (short): <input type="text" name="ORG_NAME_SHORT" /> <br />

  Category: <?php displayCategories(); ?>
	Description: <textarea maxlength="255" rows="4" cols="20" name="ORG_DESC"></textarea><br />
	Web url: <input type="text" name="WEB_URL" /> <br />
	Facebook url: <input type="text" name="FACEBOOK_URL" /> <br />
	
	Contact First Name: <input type="text" name="CONTACT_LAST_NAME" /> <br />
	Contact Last Name: <input type="text" name="CONTACT_FIRST_NAME" /> <br />
	Contact Prefix: <input type="text" maxlength="6" name="CONTACT_PREFIX" /> <br />
	Contact Phone: <input type="text" name="CONTACT_PHONE" /> <br />
	Contact email: <input type="text" name="CONTACT_EMAIL" /> <br />
	
	street_address_line 1: <input type="text" name="STREET_ADDRESS_LINE_1" /> <br />
	
	street_address_line : <input type="text" name="STREET_ADDRESS_LINE_2" /> <br />
	
	
	City: <input type="text" name="CITY" /> <br />
	
State: <select name="STATE">
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select> <br/>
	
	Zip: <input type="text" name="ZIP" /> <br />
	Volunteer Oportunities:  <select name="VOLUNTEER_OPPORTUNITIES">
		<option value="YES">Yes</option>
		<option value="NO">No</option>
		<option value="N/A">N/A</option>
	</select> <br/>
	

	Volunteer Contact email: <input type="text" name="VOLUNTEER_CONTACT_EMAIL" /> <br />
	
	Volunteer website: <input type="text" name="VOLUNTEER_WEBSITE" /> <br />
	
	Event Calendar website: <input type="text" name="EVENT_CALENDAR_WEBSITE" /> <br />
	Donation  website: <input type="text" name="DONATION_WEBSITE" /> <br />
	

	
	Internal Comments: <textarea rows="4" cols="20" name="INTERNAL_COMMENTS"></textarea><br />
	
	
	
	<br />          
	<input type="submit" value="Add Organization" name="addForm" />
          
      </form>
      
      
    </div>
    <center><a href="products.php">Go back</a></center>

    <footer>
    </footer>
  </div>
</body>
</html>
