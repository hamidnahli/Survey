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

if(isset($_POST['submit'])){
  $email = $_POST['email']
  $cs = $_POST['CS'];
  $css = $_POST['CSS'];
  $go = $_POST['GO'];
  $html = $_POST['HTML'];
  $java = $_POST['JAVA'];
  $javascript = $_POST['JAVASCRIPT'];
  $nosql = $_POST['NOSQL'];
  $perl = $_POST['PERL'];
  $python = $_POST['PYTHON'];
  $rust = $_POST['RUST'];
  $sqlselesct = $_POST['SQL'];
  $other = $_POST['OTHER'];
  
  $cs5 = $_POST['CS5'];
  $css5 = $_POST['CSS5'];
  $go5 = $_POST['GO5'];
  $html5 = $_POST['HTML5'];
  $java5 = $_POST['JAVA5'];
  $javascript5 = $_POST['JAVASCRIPT5'];
  $nosql5 = $_POST['NOSQL5'];
  $perl5 = $_POST['PERL5'];
  $python5 = $_POST['PYTHON5'];
  $rust5 = $_POST['RUST5'];
  $sqlselesct5 = $_POST['SQL5'];
  $other5 = $_POST['OTHER5'];
  
  $comment5 = $_POST['COMMENT5'];
  $comment1 = $_POST['COMMENT1'];
  $comment = $_POST['COMMENT'];
  
  $sql = "INSERT INTO `data` (user, JavaScript, JavaScript5, Python, Python5, HTML, HTML5, CSS, CSS5, CSHARP, CSHARP5, `SQL`, `SQL5`, RUST, RUST5, JAVA, JAVA5, PERL, PERL5, `GO`, `GO5`, NoSQL, NoSQL5, OTHER, OTHER5, COMMENT1, COMMENT15, COMMENT)
  VALUES ('$email', '$javascript', '$javascript5', '$python', '$python5', '$html', '$html5', '$css', '$css5', '$cs', '$cs5', '$sqlselesct', '$sqlselesct5', '$rust', '$rust5', '$java', '$java5', '$perl', '$perl5', '$go', '$go5', '$nosql', '$nosql5', '$other', '$other5', '$comment1', '$comment5', '$comment')";
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  else{
    echo "all field required"
  }
}

?>