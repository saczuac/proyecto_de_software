<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ABM Productos</title>
        <link rel="stylesheet" type="text/css" href="ej9.css">
    </head>
    <body>
    <header><h1>Web del Buffet</h1></header>
    <nav>
        <ul>
           <li><a href="ej9.html">Inicio</a></li>
           <li><a href="">Productos</a></li>
       </ul>
    </nav>
    <h2>Alta productos</h2><hr><br>
    <div class="container">
    <form method="post" action="productos.php">
      <p> Ingrese datos del producto para dar de alta</p>
      <label for="productName">Nombre: </label>
      <?php
         $e = false;
         if (isset($_POST["producto"])) {
            $pn = $_POST["producto"];
            if ((strlen($pn) > 20) || ($pn == "")) {
               $e = true;
               echo  "<input type='text' id='productName' maxlength='20' required='true' value='$pn' class='error'/> El campo no puede estar vacío o tener menos de 20 caracteres";
            } else {
              echo "<input type='text' id='productName' maxlength='20' required='true'/>";
            }
          } else {
            echo "<input type='text' id='productName' maxlength='20' required='true'/>";
          }
      ?>
      <br><br>
      <label for="markName">Marca: </label>
      <?php
         if (isset($_POST["markName"])) {
            $markName = $_POST["markName"];
            if ((strlen($markName) > 20) || ($markName == "")) {
              $e = true;
               echo  "<input type='text' name='markName' maxlength='20' class='error' value='$markName' required /> El campo no puede estar vacío o tener menos de 20 caracteres";
            } else {
              echo  "<input type='text' name='markName' maxlength='20' required/>";
            }
          } else {
             echo  "<input type='text' name='markName' maxlength='20' required/>";
          }
      ?>
      <br><br>
      <label for="barcode">Código: </label>
      <?php
         if (isset($_POST["barcode"])) {
            $barcode = $_POST["barcode"];
            if ((strlen($barcode) > 20) || ($barcode == "")) {
              $e = true;
               echo "<input type='number' name='barcode' maxlength='20' class='error' value='$barcode' required/> El campo no puede estar vacío o tener menos de 20 caracteres";
            } else {
              echo "<input type='number' name='barcode' maxlength='20' required/> ";
            }
          } else {
            echo "<input type='number' name='barcode' maxlength='20' required/> ";
          }
      ?>
      <br><br>
      <label for="category">Categoría: </label>
      <?php
         if (isset($_POST["category"])) {
            $category = $_POST['category'];
            if ($category == 1) {
              $e = true;
               echo " <select name='category' class='error'>
                      <option value='' selected>Seleccione</option>
                      <option value='food'>Alimento</option>
                      <option value='drink'>Bebida</option>
                      <option value='library'>Librería</option>
                     </select> Debe seleccionar alguna opción";
            } else {
              echo " <select name='category'>
                     <option value='1' selected>Seleccione</option>
                     <option value='2'>Alimento</option>
                     <option value='3'>Bebida</option>
                     <option value='4'>Librería</option>
                    </select>";
            }
          } else {
            echo " <select name='category'>
                   <option value='1' selected>Seleccione</option>
                   <option value='2'>Alimento</option>
                   <option value='3'>Bebida</option>
                   <option value='4'>Librería</option>
                  </select>";
          }
      ?>
      <br><br>
      <input type="submit" value="Agregar"/>
    </form>
  </div>
    <footer>Pie de página</footer>
    </body>
</html>
