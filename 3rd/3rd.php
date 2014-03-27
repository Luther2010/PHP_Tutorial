<!DOCTYPE html>

<html>

<head>Form Validation</head>

<body>
<?php
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$name = $email = $website = $comment = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$website = test_input($_POST["website"]);
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["gender"]);
}
?>

<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
Name: <input type = "text" name = "name"><br>
Email: <input type = "text" name = "email"><br>
Website: <input type = "text" name = "website"><br>
Comment: <textarea name = "comment" rows = "5" cols = "40"></textarea><br>
Gender: 
<input type = "radio" name = "gender" value = "Male">
<input type = "radio" name = "gender" value = "Female"><br>
<input type = "submit">
</form>

<?php
echo "<h2>Your Inputs</h2>";
echo "<br>";
echo "Name: ".$name;
echo "<br>";
echo "Email: ".$email;
echo "<br>";
echo "Website: ".$website;
echo "<br>";
echo "Comment: ".$comment;
echo "<br>";
echo "Gender: ".$gender;
?>

</body>
</html>
