<?php
session_start();
$name = $password = "";
$vname = 'Mike';
$vpassword = 'Eagles';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name == $vname && $password == $vpassword)
    {
        $_SESSION['name'] = $name;
        header('Location: success.php');
        exit;
    }
    else
        echo "Invalid input.";
}
?>