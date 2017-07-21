@if(count($cursos) === 0)
    <h3>Sem resultados para a busca</h3>
@else
    <ul class="media-list">
        @foreach($cursos as $curso)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('curso.get', ['id' => $curso->id]) }}">
                        <img class="media-object" src="{{ url('/') }}/{{ $curso->criador->logo }}" alt="...">
                    </a>
                </div>
                <div class="media-body text-justify">
                    <h4 class="media-heading">
                        <a href="{{ route('curso.get', ['id' => $curso->id]) }}">
                            {{ $curso->nome }} - {{ $curso->criador->nome }}
                        </a>
                        <small>
                            {{ $curso->anoPublicacao() }} - {{ $curso->custo() }} -
                        </small>
                        <a target="_blank" href="{{ $curso->link }}">
                            <span class="glyphicon glyphicon-new-window"></span>
                        </a>
                    </h4>
                    {{ $curso->resumo() }}
                </div>
            </li>
        @endforeach
    </ul>
    <div class="text-center">
        {{ $cursos->links() }}
    </div>
@endif