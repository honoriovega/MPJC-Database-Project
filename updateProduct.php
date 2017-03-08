 <?php

 include 'database.inc.php';
 $conn = getDatabaseConnection();
 
 function getProductById(){
     global $conn;
    $sql = "SELECT * FROM Organizations WHERE ORG_ID = :ORG_ID";
    $namedParameters = array();
    $namedParameters[':ORG_ID'] = $_GET['ORG_ID'];
    $statement = $conn->prepare($sql);    
    $statement->execute($namedParameters);
    $record = $statement->fetch();
    return $record;
   
 }

if (isset($_GET['updateForm'])) {  //admin submitted the Update Form
    


    $sql = "UPDATE Organizations
    
            SET ORG_NAME  =  :ORG_NAME,
			ORG_NAME_SHORT  =  :ORG_NAME_SHORT,
			CategoryID  =  :CategoryID,
			ORG_DESC  =  :ORG_DESC,
			WEB_URL  =  :WEB_URL,
			FACEBOOK_URL  =  :FACEBOOK_URL,
			CONTACT_LAST_NAME  =  :CONTACT_LAST_NAME,
			CONTACT_FIRST_NAME  =  :CONTACT_FIRST_NAME,
			CONTACT_PREFIX  =  :CONTACT_PREFIX,
			CONTACT_PHONE  =  :CONTACT_PHONE,
			CONTACT_EMAIL  =  :CONTACT_EMAIL,
			STREET_ADDRESS_LINE_1  =  :STREET_ADDRESS_LINE_1,
			STREET_ADDRESS_LINE_2  =  :STREET_ADDRESS_LINE_2,
			CITY  =  :CITY,
			STATE  =  :STATE,
			ZIP  =  :ZIP,
			VOLUNTEER_OPPORTUNITIES  =  :VOLUNTEER_OPPORTUNITIES,
			VOLUNTEER_CONTACT_EMAIL  =  :VOLUNTEER_CONTACT_EMAIL,
			VOLUNTEER_WEBSITE  =  :VOLUNTEER_WEBSITE,
			EVENT_CALENDAR_WEBSITE  =  :EVENT_CALENDAR_WEBSITE,
			DONATION_WEBSITE  =  :DONATION_WEBSITE,
			INTERNAL_COMMENTS  =  :INTERNAL_COMMENTS
            WHERE ORG_ID = :ORG_ID";
/*

echo $_GET["ORG_NAME"] . "&nbsp;" . gettype($_GET["ORG_NAME"]) . "<br>";
echo $_GET["ORG_NAME_SHORT"] . "&nbsp;" . gettype($_GET["ORG_NAME_SHORT"]) . "<br>";
echo $_GET["CategoryID"] . "&nbsp;" . gettype($_GET["CategoryID"]) . "<br>";
echo $_GET["ORG_DESC"] . "&nbsp;" . gettype($_GET["ORG_DESC"]) . "<br>";
echo $_GET["WEB_URL"] . "&nbsp;" . gettype($_GET["WEB_URL"]) . "<br>";
echo $_GET["FACEBOOK_URL"] . "&nbsp;" . gettype($_GET["FACEBOOK_URL"]) . "<br>";
echo $_GET["CONTACT_LAST_NAME"] . "&nbsp;" . gettype($_GET["CONTACT_LAST_NAME"]) . "<br>";
echo $_GET["CONTACT_FIRST_NAME"] . "&nbsp;" . gettype($_GET["CONTACT_FIRST_NAME"]) . "<br>";
echo $_GET["CONTACT_PREFIX"] . "&nbsp;" . gettype($_GET["CONTACT_PREFIX"]) . "<br>";
echo $_GET["CONTACT_PHONE"] . "&nbsp;" . gettype($_GET["CONTACT_PHONE"]) . "<br>";
echo $_GET["CONTACT_EMAIL"] . "&nbsp;" . gettype($_GET["CONTACT_EMAIL"]) . "<br>";
echo $_GET["STREET_ADDRESS_LINE_1"] . "&nbsp;" . gettype($_GET["STREET_ADDRESS_LINE_1"]) . "<br>";
echo $_GET["STREET_ADDRESS_LINE_2"] . "&nbsp;" . gettype($_GET["STREET_ADDRESS_LINE_2"]) . "<br>";
echo $_GET["CITY"] . "&nbsp;" . gettype($_GET["CITY"]) . "<br>";
echo $_GET["STATE"] . "&nbsp;" . gettype($_GET["STATE"]) . "<br>";
echo $_GET["ZIP"] . "&nbsp;" . gettype($_GET["ZIP"]) . "<br>";
echo $_GET["VOLUNTEER_OPPORTUNITIES"] . "&nbsp;" . gettype($_GET["VOLUNTEER_OPPORTUNITIES"]) . "<br>";
echo $_GET["VOLUNTEER_CONTACT_EMAIL"] . "&nbsp;" . gettype($_GET["VOLUNTEER_CONTACT_EMAIL"]) . "<br>";
echo $_GET["VOLUNTEER_WEBSITE"] . "&nbsp;" . gettype($_GET["VOLUNTEER_WEBSITE"]) . "<br>";
echo $_GET["EVENT_CALENDAR_WEBSITE"] . "&nbsp;" . gettype($_GET["EVENT_CALENDAR_WEBSITE"]) . "<br>";
echo $_GET["DONATION_WEBSITE"] . "&nbsp;" . gettype($_GET["DONATION_WEBSITE"]) . "<br>";
echo $_GET["INTERNAL_COMMENTS"] . "&nbsp;" . gettype($_GET["INTERNAL_COMMENTS"]) . "<br>";
*/


    $namedParameters = array();
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
	$namedParameters[':ORG_ID'] = $_GET['ORG_ID'];

    $conn = getDatabaseConnection();    

    $statement = $conn->prepare($sql);
       
    $statement->execute($namedParameters); 
      echo "Record has been updated!";    

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
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
      <h1>Update Product</h1>
    </header>

    <div>
        
        <?php $organization = getProductById() ?>

      <form>

 Organization Name: <input type="text" value="<?=$organization['ORG_NAME']?>" name="ORG_NAME" /> <br />
   Organization Name (short): <input type="text" value="<?= $organization['ORG_NAME_SHORT'] ?>" name="ORG_NAME_SHORT" /> <br />

  Category: <select name="CategoryID">
	 
	 		<option selected="selected" value="<?=$organization['CategoryID']?>" ></option>
		<option value=1>Access to healthcare</option>
		<option value=2>Adult Literacy/ESL</option>
		<option value=3>Arts for Social Justice</option>
		<option value=4>At Risk Youth</option>
		<option value=5>Criminal Justice Reform</option>
		<option value=6>Disabilities</option>
		<option value=7>Domestic violence/sexual assault</option>
		<option value=8>Education</option>
		<option value=9>Environment</option>
		<option value=10>Gender Justice</option>
		<option value=11>Gun Violence</option>
		<option value=12>HIV/Aids</option>
		<option value=13>Housing & Homelessness</option>
		<option value=14>Hunger & Food Justice</option>
		<option value=15>Immigration</option>
		<option value=16>Islamophobia</option>
		<option value=17>Job Readiness</option>
		<option value=18>Legal Assistance</option>
		<option value=19>LGBTQI</option>
		<option value=20>Media & Democracy</option>
		<option value=21>Politics & Government</option>
		<option value=22>Racial Justice</option>
		<option value=23>Reproductive Rights</option>
		<option value=24>Seniors</option>
		<option value=25>Veterans</option>
		<option value=26>Voting Rights</option>
		<option value=27>Worker's Rights</option>

    </select> <br/>
      
	Description: <textarea rows="4" cols="20" name="ORG_DESC" ><?php echo $organization['ORG_DESC'];?></textarea><br />
	Web url: <input type="text" value=<?=$organization['WEB_URL']?> name="WEB_URL" /> <br />
	Facebook url: <input type="text" value=<?=$organization['FACEBOOK_URL']?> name="FACEBOOK_URL" /> <br />
	
	Contact First Name: <input type="text" value=<?=$organization['CONTACT_FIRST_NAME']?> name="CONTACT_FIRST_NAME" /> <br />
	Contact Last Name: <input type="text" value=<?=$organization['CONTACT_LAST_NAME']?> name="CONTACT_LAST_NAME" /> <br />
	Contact Prefix: <input type="text" value=<?=$organization['CONTACT_PREFIX']?> name="CONTACT_PREFIX" /> <br />
	Contact Phone: <input type="text" value=<?=$organization['CONTACT_PHONE']?> name="CONTACT_PHONE" /> <br />
	Contact email: <input type="text" value=<?=$organization['CONTACT_EMAIL']?> name="CONTACT_EMAIL" /> <br />
	
 Address line 1 : <input type="text" value="<?= $organization['STREET_ADDRESS_LINE_1']?>" name="STREET_ADDRESS_LINE_1" /> <br />
	 Address line 2: <input type="text" value="<?= $organization['STREET_ADDRESS_LINE_2']?>" name="STREET_ADDRESS_LINE_2" /> <br />
	City: <input type="text" value=<?=$organization['CITY']?> name="CITY" /> <br />
	
State: <select name="STATE">
	<option selected="selected" value="<?= $organization['STATE']?>"></option>
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
	
	Zip: <input type="text" value=<?=$organization['ZIP']?> name="ZIP" /> <br />
	Volunteer Oportunities:  <select name="VOLUNTEER_OPPORTUNITIES">
			<option selected="selected" value="<?= $organization['VOLUNTEER_OPPORTUNITIES']?>"></option>

		<option value="YES">Yes</option>
		<option value="NO">No</option>
		<option value="N/A">N/A</option>
	</select> <br/>
	

	Volunteer Contact email: <input type="text" value=<?=$organization['VOLUNTEER_CONTACT_EMAIL']?> name="VOLUNTEER_CONTACT_EMAIL" /> <br />
	
	Volunteer website: <input type="text" value=<?=$organization['VOLUNTEER_WEBSITE']?> name="VOLUNTEER_WEBSITE" /> <br />
	
	Event Calendar website: <input type="text" value=<?=$organization['EVENT_CALENDAR_WEBSITE']?> name="EVENT_CALENDAR_WEBSITE" /> <br />
	Donation  website: <input type="text" value=<?=$organization['DONATION_WEBSITE']?> name="DONATION_WEBSITE" /> <br />
	

	
	Internal Comments: <textarea rows="4" cols="20" name="INTERNAL_COMMENTS"><?php echo $organization['INTERNAL_COMMENTS']; ?></textarea><br />
	
	
	
	<br />      

     
          <br />          
          <input type="hidden" name="ORG_ID" value="<?=$organization['ORG_ID']?>" />
          <input type="submit" value="Update Product" name="updateForm" />
          
      </form>
      <a href="products.php">Go back</a>

      
    </div>

    <footer>
    </footer>
  </div>
</body>
</html>
