<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>


<div class="conteudo">

<div class="img">
  <img src="{{asset('img/login.svg')}}" alt="">
</div>

<div class="divForms">
  <div class="title">
  <h1>Login</h1>
  </div>

<form class="formulario">
  <div class="campos">
    <label for="exampleInputEmail1" class="form-label titulosInputs">E-mail</label>
    <input type="email" class="inputs" id="exampleInputEmail1" aria-describedby="emailHelp">
  
    <label for="exampleInputPassword1" class="form-label titulosInputs">Senha</label>
    <input type="password" class="inputs" id="exampleInputPassword1">
  </div>

  <!-- <div class="btnMsg"> -->
  <div class="divBtn">
  <button type="submit" class="btn btn-primary">Acessar</button>
  </div>

  <div class="divMsg">
    <a href="{{ route('site.register') }}">Não é registrado? Clique aqui.</a>
  </div>

  <!-- </div> -->

</form>
</div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>