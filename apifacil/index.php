<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar API externa de manera sencilla</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
<h3>Obtener datos de una API externa </h3>
    <div class="section">
    <button class="btn blue" id="obtener">Obtener </button>
    </div>
    <div class="section">
    <table>
        <thead>
          <tr>
              <th>ID Usuario</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Nº de posts</th>
          </tr>
        </thead>
        <tbody id="resultado">
        </tbody>
      </table>
    </div>
</div>
<script src="obtener.js"></script>
</body>
</html>