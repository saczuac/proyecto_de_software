<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Login</h2>
        <?php
        if (!isset($_POST["username"])) {
            echo "<form method='post' action='ej4.php'><input type='text' placeholder='Usuario' name='username'/><br><input type='password' name='pass' /><br><input type='submit' value='Loguearse'/><br></form>";
        } else {
            $log = false;
            $data ="usuarios.dat";
            $lines = file($data);
            foreach ($lines as $line) {
                // Split line by ;
                $data = explode(';', trim($line));
                $user = $data[0];
                $pass = $data[1];
                if (($_POST['username'] == $user) && ($_POST['pass'] == $pass)){
                    $log = true;
                }
            }
            if ($log) {
                session_start();
                $_SESSION["logged_in"]= true;
                header('Location: /proyectoDeSoftware/P3/indexej4.php');

            } else {
                echo "<h1>Wrong user or password!, try again</h1>";
                echo "<form method='post' action='ej4.php'><input type='text' placeholder='Usuario' name='username'/><br><input type='password' name='pass' /><br><input type='submit' value='Loguearse'/><br></form>";
            }
        }
        ?>
    </body>
</html>
