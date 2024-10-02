<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    

<nav class="menu">
    @component('layouts._menu.menuSite', ['menu' => $menu])
    @endcomponent
</nav>


<div class="container">
<div class="divImg">
  <img src="{{ asset('img/undraw_fingerprint_login_re_t71l.svg') }}" alt="">
</div>


<div class="divForms">
  <div class="divTituloForms">
<h1 class="tituloForms">Crie sua conta agora!</h1>
</div>

<form class="formulario col-12" action="{{ route('site.registerUser') }}" method="post">
  @csrf
  <div class="mb-3 col-12">
    <label class="labels form-label">Email</label>
    <input type="email" class="form-control inputs" name="email" id="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-12">
    <label class="labels form-label">Senha</label>
    <input type="password" class="form-control inputs" name="senha1" id="senha1">
  </div>
  <div class="mb-3 col-12">
    <label class="labels form-label">Confirmar senha</label>
    <input type="password" class="form-control inputs" name="senha2" id="senha2">
  </div>
  <div class="divBtn">
  <button type="submit" class="btnRegister btn btn-primary">Registrar-se</button>
  </div>
</form>
</div>

</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>