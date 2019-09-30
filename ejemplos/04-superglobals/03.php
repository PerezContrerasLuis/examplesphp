<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
  <a href="http://www.php.net/manual/es/language.variables.superglobals.php">
    http://www.php.net/manual/es/language.variables.superglobals.php
  </a>
  <hr />

  <strong>$_POST</strong>
  <a href="http://www.php.net/manual/es/reserved.variables.post.php">
    http://www.php.net/manual/es/reserved.variables.post.php
  </a>
<?php

  if (empty($_POST)) {
    echo "<p><strong>Arreglo asociativo \$_POST vacío</strong></p>";
  } else {
    echo "<p><strong>Arreglo asociativo \$_POST</strong></p>";
    echo "<pre>";
    foreach ($_POST as $llave => $valor) {
      echo "Llave= ".$llave."\t\t\tValor= ".$valor." Tipo de dato=".gettype($valor)."\n";
      if (is_array($valor)) {
        foreach ($valor as $l => $v) {
          echo "\tLlave:= ".$l."\t\t\tValor:= ".$v."\n";
        }
      } 
    }
    echo "</pre>";
  }

?>
  <hr />
  
  <form name="formulario" action="" method="post">
    <input type="text" name="llave1" value="" /><hr />
    <input type="text" name="llave2" value="<?php echo $_POST['llave2']; ?>" /><hr />
    <input type="password" name="llave3" /><hr />

    <input type="radio" name="llave4" value="valor4_1" />Valor 4_1
    <input type="radio" name="llave4" value="valor4_2" />Valor 4_2
    <input type="radio" name="llave4" value="valor4_3" />Valor 4_3
    <hr />

    <input type="checkbox" name="llave5[]" value="valor5_1">Valor 5_1
    <input type="checkbox" name="llave5[]" value="valor5_2">Valor 5_2
    <input type="checkbox" name="llave5[]" value="valor5_3">Valor 5_3
    <hr />

    <select name="llave6">
      <option value="">Vacío</option>
      <option value="valor6_1">Valor 6_1</option>
      <option value="valor6_2">Valor 6_2</option>
      <option value="valor6_3">Valor 6_3</option>
    </select>
    <hr />

    <textarea name="llave7" rows="10" cols="100">
      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
    </textarea>
    <hr />

    <input name="boton_subir" type="submit" value="Subir">
  </form> 
  <hr />

  <a href="http://es.wikipedia.org/wiki/Formulario_web">
    http://es.wikipedia.org/wiki/Formulario_web
  </a>
  </body>
</html>
