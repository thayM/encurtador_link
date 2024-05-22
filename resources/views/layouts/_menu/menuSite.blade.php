@isset($menu)
<ul>
        @foreach ($menu as $indice => $item)
        <li><a href="{{ route($item['href']) }}">{{ $item['descricao']}}</a></li>
        @endforeach
</ul>
@endisset