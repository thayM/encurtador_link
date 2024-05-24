<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/recover.css') }}">
</head>
<body>
    
<nav class="menu">
    @component('layouts._menu.menuSite', ['menu' => $menu])
    @endcomponent
</nav>


<div class="containerBody">
<div class="formRecover">
<form class="formulario">
  <div class="divTitulo">
    <h1 class="tituloForm">Recuperar E-mail</h1>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label labelEmail">E-mail</label>
    <input type="email" class="form-control inputEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="divBtn">
  <button type="submit" class="btnEmail btn-primary btn">Recuperar</button>
  </div>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>