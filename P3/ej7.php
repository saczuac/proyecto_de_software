<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ABM Productos</title>
        <link rel="stylesheet" type="text/css" href="ej2/ej9.css">
    </head>
    <body>
    <header><h1>Web del Buffet</h1></header>
    <nav>
        <ul>
           <li><a href="ej2/ej9.html">Inicio</a></li>
           <li><a href="ej2/productos.php">Alta Producto</a></li>
       </ul>
    </nav>
    <?php
      echo "<table>\n\n";
      $f = fopen("productos.csv", "r");
      while (($line = fgetcsv($f)) !== false) {
          echo "<tr>";
          foreach ($line as $cell) {
              echo "<td>" . htmlspecialchars($cell) . "</td>";
          }
          echo "</tr>\n";
        }
        fclose($f);
        echo "\n</table>";
    ?>
    <footer>Pie de página</footer>
    </body>
</html>
