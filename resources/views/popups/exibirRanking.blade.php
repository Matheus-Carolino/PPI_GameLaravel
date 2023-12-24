<h1 class="text-warning mb-3 text-center text-lg">Ranking da Região</h1>
<table class="table table-dark table-striped">
    <tr class="text-white text-center">
        <th>nome</th>
        <th>acertos</th>
        <th>erros</th>
        <th>data/hora</th>
    </tr>
    @forelse ($listaPartidas as $p)
        <tr class="text-warning text-center">
            <td>{{$p->user->name}}</td>
            <td>{{$p->acertos}}</td>
            <td>{{$p->erros}}</td>
            <td>{{$p->data_hora}}</td>
        </tr>
    @empty
        <h1>Ainda não rankeado</h1>
    @endforelse
</table>