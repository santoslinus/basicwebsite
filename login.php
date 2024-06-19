<?php
session_start();
$name = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $vname = 'Mike';
    $vpassword = 'Eagles';
    if(preg_match("/[a-zA-Z-' ]*$/", $name))
    {
        $name = $_POST['name'];
    }
    if(preg_match("/[a-zA-Z0-9]*$/", $password))
    {
        $password = $_POST['password'];
    }
    if($name == $vname && $password == $vpassword)
    {
        $_SESSION['name'] = $name;
        header('Location: success.php');
        exit;
    }
}
?>