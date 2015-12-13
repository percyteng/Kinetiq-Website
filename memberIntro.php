//Percy Teng cisc282 final project KQ website
/*selecting and displaying all the information entered by certain users and stored in the database. It has similar pattern of
getinvolved.html so users will understand where these informations are from*/
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Kinetiq member introduction</title>
  	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="dropnav">
    <span id="logo"><a href="KQ main page.html"><img  src="images/logo.png"></a></span>
      <nav>
        <ul>
            <li id="main">
            <a href="KQ main page.html">Home</a>
            </li>
            <li id="main">
            <a href="memberIntro.php">Members</a>
                <ul id="subnav">
                      <li><a href="memberIntro.php">Member Intro</a></li>
                      <li><a href="getinvolved.html">Get involved</a></li>
                </ul>            
            </li>
            <li id="main">
            <a href="Aboutus.html">About</a>
                <ul id="subnav">
                      <li><a href="Aboutus.html">About us</a></li>
                      <li><a href="Knowtheledge.html">Hiphop&Breaking</a></li>
                </ul>            
            </li>
            <li id="main">
            <a href="#">KQ new kids</a>
            </li>
        </ul>
      </nav>
      <ul id="second"> 
            <li><a href="Competition.html">|Competition|</a></li>
            <li><a href="Performance.html">|Performance|</a></li>
      </ul>
    </div>
    <div id="show">
    <?php
      /* Prior to running this you may need to do the following on your VM:
      sudo apt-get install php5-mysql
      sudo /etc/init.d/apache2 restart
      */
      try {
          $dbh = new PDO('mysql:host=localhost;dbname=KQproject', "root", "coolpig123");
          $rows = $dbh->query('select * from info');
          foreach($rows as $row) {
		echo "<img src=".$row[selfie]." class = 'pic'>";
          	echo "<p id = 'query'>Name: </p>"."<p>".$row["name"]."</p>";
		echo "<p id = 'query'>Nickname: </p>"."<p>".$row["nickname"]."</p>";
		echo "<p id = 'query'>Age: </p>"."<p>".$row["age"]."</p>";
		echo "<p id = 'query'>Email: </p>"."<p>".$row["email"]."</p>";
		echo "<p id = 'query'>Type of dances I do: </p>"."<p>".$row["type"]."</p>";
		echo "<p id = 'query'>Bboy inspires me: </p>"."<p>".$row["inspbboy"]."</p>";
		echo "<p id = 'query'>How I started breaking: </p>"."<p>".$row["start"]."</p>";
		echo "<p id = 'query'>An unforgettable experience: </p>"."<p>".$row["experience"]."</p>";
		echo "<p id = 'query'>How my life would be like if I never did break dance: </p>"."<p>".$row["nobreak"]."</p>";
		echo "<p id = 'query'>Friends or Break? </p>"."<p>".$row["fob"]."</p>";
		echo "<p id = 'query'>Love or power? </p>"."<p>".$row["powerbgf"]."</p>";

          }
          $dbh = null;
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    ?>
        <p id="signature">Design by Percy Siyu .Teng</p>
    <hr/>      
	<footer>
            <div id="nav">Follow Us: <a href="http://facebook.com/kinetiqbreakingclub" target="_blank">Facebook</a> <a href="http://twitter.com/kin3tiq" target='_blank'>Twitter</a> <a href="http://youtube.com/kinetiQisGreat" target="_blank">YouTube</a></div>
            <div id="nav">Visit our Official Sponsor: <a href="http://bboynorth.bigcartel.com" target="_blank">BBoy North</a></div>
            <p>&copy; 2014 KinetiQ Crew. All rights reserved.</p>
            <ul>
                <li><a href="KQ main page.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </footer>
</body>
</html>
