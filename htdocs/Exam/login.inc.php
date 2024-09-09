<?php  


if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$password = $_POST["password"];
}


require_once 'dbh.inc.php';

if(isset($_POST['submit']))
{
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM user where name='$name' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["name"] = $row['name'];
        $_SESSION["password"]=$row['password']; 

    }
    else
    {
        echo "Inputed wrong name or password";
    }
}

if($query = MysqLi_query($conn,"SELECT identity FROM user WHERE name = '$name' and password='$password'")){
    $row = MysqLi_fetch_assoc($query);
    if($row[identity] == 'teacher'){
    	header("Location: teacher_home.php");
    }elseif ($row[identity] == 'student') {
        header("Location: student_home.php");
    }else{
    	echo "Inputed wrong name or password";
    }
}