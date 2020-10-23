<?php
echo "<h1>Welcome to the world of PHP!</h1>";
echo "<h2> <u>Charlie's</u> Web Computing PHP area!</h2>";
echo "<img src='Bear.jpg'>"
?>
<?php
echo "<form enctype='multipart/form-data' action='uploadFile.php' method='POST'>";
echo "Please choose a file to Upload:";
echo "<br /><input name='chosenFile' type='file' />";
echo "<br /><input type='submit' value='Upload File'>";
echo "</form>";

$filepath = "UploadedFiles/";
$filepath = $filepath . basename($_FILES['chosenFile']['name']);

if (move_uploaded_file($_FILES['chosenFile']['tmp_name'], $filepath))
{
	echo "The file named " . basename($FIELS['chosenFile']['name']) . " has been uploaded correctly!";
}
else
{
	echo "The file named " . basename($FILES['chosenFile']['name']) . "did not upload due to an error!";
}
?>
	