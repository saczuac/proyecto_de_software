<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    echo "<li><a href='/proyectoDeSoftware/P3/logout.php'>Logout</a></li>";
}
else
{
    header('Location: /proyectoDeSoftware/P3/ej2/ej9.html');
}

?>
