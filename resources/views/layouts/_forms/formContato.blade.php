{{ $slot }}
<form action="#" method="POST" class="{{ $css }}">
    @csrf

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">E-mail</label>
    <input class="{{ $cssInput }}" type="text" id="email" name="email">
    </div>

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">Nome</label>
    <input class="{{ $cssInput }}" type="text" id="nome" name="nome">
    </div>

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">Mensagem</label>
    <input class="{{ $cssInput }}" type="text" id="mensagem" name="mensagem">
    </div>

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">Motivo</label>
    <select class="{{ $cssSelect }}" name="motivo" id="motivo">
        <option value="">Selecione um motivo...</option>
        <option value="1">Reclamação</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
    </select>
    </div>

    <button type="submit" class="{{$classBtn}}">Enviar</button>
</form>