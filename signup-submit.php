/* Percy Teng 10122592 cisc282 final project php sheet*/
/*This php page is invoked after user click "submit" botton at the bottom of getinvolved.html page.*/
/*It takes all the information user entered to the connected KQproject database.*/
<?php
header('Location:memberIntro.php');
function contentCheck($data) {
	$data = htmlentities($data, ENT_QUOTES);
	return $data;
}

$name=contentCheck($_POST["name"]);
$nickname=contentCheck($_POST["nickname"]);
$gender=contentCheck($_POST["gender"]);
$age=$_POST["age"];
$contactEmail=contentCheck($_POST["contact"]);
$type=$_POST['type'];
$other=contentCheck($_POST["other"]);
$bboyidol=contentCheck($_POST["bboyidol"]);
$reason=contentCheck($_POST["reason"]);
$experience=contentCheck($_POST["experience"]);
$noBreak=contentCheck($_POST["noBreak"]);
$fob=contentCheck($_POST["fob"]);
$option=contentCheck($_POST["option"]);
if ($gender == "male")
	$gender = 'm';
else
	$gender = 'f';
$tp = "";
for($i=0; $i<count($type); $i++) {
	$tp.=$type[$i]."|";
}
//This part of code enables users to upload a picture of themselves and store in the current directory
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$filename = $name."photo.".$extension;
$dir='ProjectPhoto';
$selfie="$dir/$filename";
if (isset($_FILES["file"]["name"]) && $_FILES["file"]["name"]!="") {
	if ($_FILES["file"]["error"] > 0) {
		echo "<script>alert('Error: cannot upload image')</script>";	
	} else {
		print_r($_FILES);
		echo "<script>alert('going to upload $selfie')</script>";
		move_uploaded_file($_FILES["file"]["tmp_name"],"$dir/$filename");
	}
}

try {
    $dbh = new PDO('mysql:host=localhost;dbname=KQproject', "root", "coolpig123");
	
    $smt = $dbh->prepare("INSERT INTO info (id, name, nickname, gender, age, email, type, other, inspbboy, start, experience, nobreak, fob, powerbgf,selfie) VALUES (null, '$name','$nickname','$gender','$age','$contactEmail','$tp','$other','$bboyidol','$reason','$experience','$noBreak','$fob','$option','$selfie')");
    $smt->execute();
    var_dump($smt->errorInfo());
    print_r($smt);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
?>