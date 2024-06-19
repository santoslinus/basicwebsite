<?php
session_start();
$name = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $vname = 'Mike';
    $vpassword = 'Eagles';
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