<?php
if (isset($_POST['name']) && isset($_POST['email']) ){
    include 'db_conn.php';
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email	= validate($_POST['email']);
    $cshap	= validate($_POST['cshap']);
    $cshap10 = validate($_POST['cshap10']);
    $css	= validate($_POST['css']);
    $css10	= validate($_POST['css10']);
    $go	= validate($_POST['go']);
    $go10	= validate($_POST['go10']);
    $html	= validate($_POST['html']);
    $html10	= validate($_POST['html10']);
    $java	= validate($_POST['java']);
    $java10	= validate($_POST['java10']);
    $javascript	= validate($_POST['javascript']);
    $javascript10	= validate($_POST['javascript10']);
    $nosql	= validate($_POST['nosql']);
    $nosql10	= validate($_POST['nosql10']);
    $perl	= validate($_POST['perl']);
    $perl10	= validate($_POST['perl10']);
    $python	= validate($_POST['python']);
    $python10	= validate($_POST['python10']);
    $rust	= validate($_POST['rust']);
    $rust10	= validate($_POST['rust10']);
    $sql	= validate($_POST['sql']);
    $sql10	= validate($_POST['sql10']);
    $other	= validate($_POST['other']);
    $other10	= validate($_POST['other10']);
    $comments5	= validate($_POST['comments5']);
    $coments10= '0';

    $sql1 = "INSERT INTO records(`name`,email,cshap,cshap10,css,css10,`go`,go10,html,html10,java,java10,javascript,javascript10,nosql,nosql10,perl,perl10,python,python10,rust,rust10,`sql`,sql10,other,other10,comments5,coments10)
    VALUES ('$name','$email','$cshap','$cshap10','$css','$css10','$go','$go10','$html','$html10','$java','$java10','$javascript','$javascript10','$nosql','$nosql10','$perl','$perl10','$python','$python10','$rust','$rust10','$sql','$sql10','$other','$other10','$comments5','$coments10')";
    $res = mysqli_query($conn,$sql1);
    if ($res) {
        header('Location: surveythankyou.html');
    }else {
        echo "Your message could not be sent!";
    }
}else {
    header("Location: index.html" );
}
?>