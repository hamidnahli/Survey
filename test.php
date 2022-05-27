<?php
$servername = "localhost";
$username = "root";
$password = "IT115@spring";
$dbname = "it115survey";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = 'abc@aol.com'
$cs = '1';
$css = '2';
$go = '2';
$html = '2';
$java = '1';
$javascript = '1';
$nosql = '1';
$perl = '2';
$python = '1';
$rust = '2';
$sqlselesct = '1';
$other = '1';

$cs5 = '1';
$css5 = '1';
$go5 = '1';
$html5 = '1';
$java5 = '1';
$javascript5 = '1';
$nosql5 = '1';
$perl5 = '1';
$python5 = '1';
$rust5 = '1';
$sqlselesct5 = '1';
$other5 = '1';

$comment5 = 'Heloo';
$comment1 = 'Heloo';
$comment = 'Heloo';

$sql = "INSERT INTO `data` (user, JavaScript, JavaScript5, Python, Python5, HTML, HTML5, CSS, CSS5, CSHARP, CSHARP5, `SQL`, `SQL5`, RUST, RUST5, JAVA, JAVA5, PERL, PERL5, `GO`, `GO5`, NoSQL, NoSQL5, OTHER, OTHER5, COMMENT1, COMMENT15, COMMENT)
VALUES ('$email', '$javascript', '$javascript5', '$python', '$python5', '$html', '$html5', '$css', '$css5', '$cs', '$cs5', '$sqlselesct', '$sqlselesct5', '$rust', '$rust5', '$java', '$java5', '$perl', '$perl5', '$go', '$go5', '$nosql', '$nosql5', '$other', '$other5', '$comment1', '$comment5', '$comment')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>