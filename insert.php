<?php

$name = $_POST["name"];
$email = $_POST['email'];
// $message = $_POST["message"];
// $priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$cshap = filter_input(INPUT_POST, "cshap", FILTER_VALIDATE_INT);
$css = filter_input(INPUT_POST, "css", FILTER_VALIDATE_INT);
$go = filter_input(INPUT_POST, "go", FILTER_VALIDATE_INT);
$html = filter_input(INPUT_POST, "html", FILTER_VALIDATE_INT);
$java = filter_input(INPUT_POST, "java", FILTER_VALIDATE_INT);
$javascript = filter_input(INPUT_POST, "javascript", FILTER_VALIDATE_INT);
$nosql = filter_input(INPUT_POST, "nosql", FILTER_VALIDATE_INT);
$perl = filter_input(INPUT_POST, "perl", FILTER_VALIDATE_INT);
$python = filter_input(INPUT_POST, "python", FILTER_VALIDATE_INT);
$rust = filter_input(INPUT_POST, "rust", FILTER_VALIDATE_INT);
$sqllang = filter_input(INPUT_POST, "sql", FILTER_VALIDATE_INT);
$other = filter_input(INPUT_POST, "other", FILTER_VALIDATE_INT);
$comments = filter_input(INPUT_POST, "comments", FILTER_VALIDATE_INT);

$host = "localhost";
$dbname = "it115spring";
$username = "root";
$password = "IT115@spring";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO `data` (name, body, priority, type)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssiiiiiccccc",
                       $name,
                       $email,
                       $comments,
                       $cshap,
                       $css,
                       $go,
                       $html,
                       $java,
                       $javascript,
                       $nosql,
                       $perl,
                       $python,
                       $rust,
                       $sqllang,
                       $other,
                       $name
                    );

mysqli_stmt_execute($stmt);

echo "Record saved.";