
<?/*
---
title: Ejercicio 1: Formulario Web
desc: Muestra y controla datos de un formulario web
tags: [formulario, POST, empty()]
---
*/?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario</title>
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
  <link rel="stylesheet" href="formulario.css">
</head>
<body>
  <main class="container">
    <article>
      <h1>Formulario Web</h1>
      <form action="procesar.php" method="post">
        <label>Nombre y apellidos
          <input name="nombre">
        </label>

        <label>Email
          <input name="email" type="text">
        </label>

        <label>URL página personal
          <input name="url" type="text">
        </label>

        <fieldset>
          <legend>Sexo</legend>
          <label><input type="radio" name="sexo" value="Mujer"> Mujer</label>
          <label><input type="radio" name="sexo" value="Hombre"> Hombre</label>
          <label><input type="radio" name="sexo" value="Otro"> Otro</label>
        </fieldset>

        <label>Nº de convivientes
          <input name="convivientes" type="number" min="0">
        </label>

        <fieldset>
          <legend>Aficiones</legend>
          <label><input type="checkbox" name="aficiones[]" value="Lectura"> Lectura</label>
          <label><input type="checkbox" name="aficiones[]" value="Deporte"> Deporte</label>
          <label><input type="checkbox" name="aficiones[]" value="Cine"> Cine</label>
          <label><input type="checkbox" name="aficiones[]" value="Viajar"> Viajar</label>
        </fieldset>
        <label>Menú favorito
          <select name="menu">
            <option value="">Selecciona una opción</option>
            <option value="Ensalada">Ensalada</option>
            <option value="Pasta">Pasta</option>
            <option value="Sushi">Sushi</option>
            <option value="Pizza">Pizza</option>
          </select>
        </label>

        <button type="submit">Enviar</button>
      </form>
    </article>
  </main>
</body>
</html>
