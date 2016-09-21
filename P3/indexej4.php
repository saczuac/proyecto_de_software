<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    echo "<h1>Index..</h1><a href='logout.php'>Logout</a>";
}
else
{
    echo 'No estás logueado!. <a href="ej4.php">Click aquí</a> para loguearse.';
}

?>
