<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
</head>
<body>
    
<nav class="menu">
    @component('layouts._menu.menuSite', ['menu' => $menu])
    @endcomponent
</nav>

<div class="containerBody">
<!-- <div class="Inferior"> -->
<div class="imagemForm">
    <h1>Entre em contato conosco</h1>
    <img class="imgContato" src="{{ asset('img/undraw_personal_email_re_4lx7.svg') }}" alt="">
</div>

<div class="formulario">
    @component('layouts._forms.formContato', ['css' => 'formContato', 'classBtn' => 'btnEnviar', 'cssLabel' => 'titulosInput', 'cssInput' => 'inputs', 'cssSelect' => 'select', 'cssCampoMensagem' => 'campoMsg'])
    @endcomponent
</div>
</div>

<!-- </div> -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>