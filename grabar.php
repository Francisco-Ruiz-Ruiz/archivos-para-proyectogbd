<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<body>
 <div align =center >
<?php 
    include ('conexion.php'); 
    $usuario=$_REQUEST['usuario'];
    $passwd=$_REQUEST['passwd'];
    $data = [
        'usuario' => $usuario,
        'passwd' => $passwd
    ];
    $sql = "INSERT INTO fabricante VALUES (null,:usuario,:passwd)";
    echo $sql;
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);
    echo "<div class='center'>";
    echo "<h2> Usuario registrado correctamente. </h2>";
    echo "</div>";
?>
<div class="btn-group">
  <a href="index.html" class="btn btn-primary">Volver a Inicio </a>
 </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>