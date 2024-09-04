{{ $slot }}

@php
    $contato = session('contato');
@endphp
<form action="{{ route('site.contato') }}" method="POST" class="{{ $css }}">
    @csrf

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">E-mail</label>
    <input class="{{ $cssInput }}" type="text" id="email" name="email" value="{{ $contato->email ?? old('email') }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    </div>

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">Nome</label>
    <input class="{{ $cssInput }}" type="text" id="nome" name="nome" value="{{ $contato->nome ?? old('nome') }}">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </div>

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">Mensagem</label>
    <textarea class="{{ $cssInput }} {{ $cssCampoMensagem }}" type="text" id="mensagem" name="mensagem" row="3" value="{{ $contato->mensagem ?? old('mensagem') }}"></textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    </div>

    <div class="campos">
    <label class="{{ $cssLabel }}" for="">Motivo</label>
    <select class="{{ $cssSelect }}" name="motivo" id="motivo">
        <option selected>Selecione um motivo...</option>
        <option value="1" {{ old('motivo') == 1 ? 'selected' : '' }}>Reclamação</option>
        <option value="2" {{ old('motivo') == 2 ? 'selected' : '' }}>Dúvida</option>
        <option value="3" {{ old('motivo') == 3 ? 'selected' : '' }}>Elogio</option>
    </select>
    @if (session('msg'))
        <p>{{ session('msg') }}</p>
    @endif
    </div>

    <button type="submit" class="{{$classBtn}}">Enviar</button>
</form>