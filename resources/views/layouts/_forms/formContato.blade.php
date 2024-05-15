{{ $slot }}
<form action="#" method="POST" class="{{ $css }}">
    @csrf
    <label for="">E-mail</label>
    <input type="text" id="email" name="email">

    <label for="">Nome</label>
    <input type="text" id="nome" name="nome">

    <label for="">Mensagem</label>
    <input type="text" id="mensagem" name="mensagem">

    <label for="">Motivo</label>
    <select name="motivo" id="motivo">
        <option value="1">Reclamação</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
    </select>

    <button type="submit" class="{{$classBtn}}">Enviar</button>
</form>