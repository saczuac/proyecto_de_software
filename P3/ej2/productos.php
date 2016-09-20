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
            $prod = $_POST["producto"];
            if ((strlen($prod) > 20) || ($prod == "")) {
               $e = true;
               echo  "<input type='text' name='producto' id='productName' maxlength='20' value='$prod' class='error' required/> El campo no puede estar vacío o tener menos de 20 caracteres";
            } else {
              echo "<input type='text' id='productName' name='producto' maxlength='20' required/>";
            }
          } else {
            echo "<input type='text' id='productName' name='producto' maxlength='20' required/>";
          }
      ?>
      <br><br>
      <label for="markName">Marca: </label>
      <?php
         if (isset($_POST["markName"])) {
            $markName = $_POST["markName"];
            if ((strlen($markName) > 20) || ($markName == "")) {
                $e = true;
               echo  "<input type='text' id='markName' name='markName' maxlength='20' class='error' value='$markName' required /> El campo no puede estar vacío o tener menos de 20 caracteres";
            } else {
              echo  "<input type='text'  id='markName' name='markName' maxlength='20' required/>";
            }
          } else {
             echo  "<input type='text'  id='markName' name='markName' maxlength='20' required/>";
          }
      ?>
      <br><br>
      <label for="barcode">Código: </label>
      <?php
         if (isset($_POST["barcode"])) {
            $barcode = $_POST["barcode"];
            if ((strlen($barcode) > 20) || ($barcode == "")) {
                $e = true;
               echo "<input type='number' id='barcode' name='barcode' maxlength='20' class='error' value='$barcode' required/> El campo no puede estar vacío o tener menos de 20 caracteres";
            } else {
              echo "<input type='number' id='barcode' name='barcode' maxlength='20' required/> ";
            }
          } else {
            echo "<input type='number' id='barcode' name='barcode' maxlength='20' required/> ";
          }
      ?>
      <br><br>
      <label for="category">Categoría: </label>
      <?php
         if (isset($_POST["category"])) {
            $category = $_POST['category'];
            if ($category == 1) {
               $e = true;
               echo " <select name='category' class='error' id='select'>
                      <option value='' selected>Seleccione</option>
                      <option value='food'>Alimento</option>
                      <option value='drink'>Bebida</option>
                      <option value='library'>Librería</option>
                     </select> Debe seleccionar alguna opción";
            } else {
              echo " <select name='category' id='select'>
                     <option value='1' selected>Seleccione</option>
                     <option value='2'>Alimento</option>
                     <option value='3'>Bebida</option>
                     <option value='4'>Librería</option>
                    </select>";
            }
          } else {
            echo " <select name='category' id='select'>
                   <option value='1' selected>Seleccione</option>
                   <option value='2'>Alimento</option>
                   <option value='3'>Bebida</option>
                   <option value='4'>Librería</option>
                  </select>";
          }
      ?>
      <br><br>
      <input type="submit" value="Agregar"/><br>
      <a class="button" href="productos.php">Reestablecer</a>
    </form>
    <?php
    if ($e) {
        echo "<script type='text/javascript'>
        document.getElementById('markName').value = '$markName';
        document.getElementById('barcode').value = '$barcode';
        document.getElementById('select').value = '$category';
        document.getElementById('productName').value = '$prod';
        </script>";
    } else {
        if (isset($_POST["category"])){
            $message = "Producto agregado con éxito!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

     ?>
  </div>
    <footer>Pie de página</footer>
    </body>
</html>
