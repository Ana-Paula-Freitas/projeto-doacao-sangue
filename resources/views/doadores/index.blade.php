<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doadores</title>
</head>

<body>
    <a href="{{ route('doadores.create')}}">Cadastrar Doador</a>

    @foreach ($doadores as $doador)
    <div>
        {{ $doador->nome }}
    </div>


    <form action="{{ route('doadores.delete', 
            $doador->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Excluir
        </button>
    </form>
    </div>
    @endforeach
</body>

</html>